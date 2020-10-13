<?php

  $valid_image_formats = [
    'image/jpeg',
    'image/png',
    'image/gif'
  ];

  $valid_file_size = (1024 * 1014 * 1); // 1 MB

  if($_FILES['file']['error'] == 4){

    echo 'Please select file';

  } else{
    if(is_uploaded_file($_FILES['file']['tmp_name'])){

      $file_type = $_FILES['file']['type'];

      if(in_array($file_type, $valid_image_formats)){

        if($valid_file_size > $_FILES['file']['size']){

          $uniq = uniqid();

          $extension = explode('/', $file_type)[1];

          $name = $uniq . '.' . $extension;

          $upload = move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $name);

            if($upload){
              echo '<h3>Uploaded Successfully!</h3>';
              echo '<img src="upload/' . $name . '">';
            } else{
                echo "Opps! There is a problem!";
            }

        } else{
          echo "File size should be lower than 1MB";
        }

      } else{
        echo "Invalid format. Valid formats: jpeg, png, gif";
      }

    } else {

      echo 'There is are problem while uploading the file';

    }
  }

 ?>
