<?php

  function upload($file, $size = 1, $image_formats = null){

    $result = [];

    $valid_image_formats = $image_formats
      ? $image_formats
      : [

          'image/jpeg',
          'image/png',
          'image/gif'
        ];

    $valid_file_size = (1024 * 1024) * $size; // 1 MB

    if($file['error'] == 4){

      $result['error'] = 'Please select file';

    } else{
      if(is_uploaded_file($file['tmp_name'])){

        $file_type = $file['type'];

        if(in_array($file_type, $valid_image_formats)){

          if($valid_file_size > $file['size']){

            $uniq = uniqid();

            $extension = explode('/', $file_type)[1];

            $name = $uniq . '.' . $extension;

            $upload = move_uploaded_file($file['tmp_name'], 'upload/' . $name);

              if($upload){
                $result['file'] = 'upload/' . $name;
              } else{
                  $result['error'] = "Opps! There is a problem!";
              }

          } else{
            $result['error'] = "File size should be lower than 1MB";
          }

        } else{
          $result['error'] = "Invalid format.";
        }

      } else {

        $result['error'] = 'There is are problem while uploading the file';

      }
    }
    return $result;
  }

  $result = upload($_FILES['file']);

  if(isset($result['error'])){
    echo $result['error'];
  } else{
    echo '<h3>Uploaded Successfully!</h3>';
    echo '<img src="' . $result['file'] . '">';
  }

 ?>
