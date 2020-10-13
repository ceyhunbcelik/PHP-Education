<?php

  function multi_upload($files){

    $result = [];

    // Check Errors
    foreach ($files['error'] as $index => $error) {
      if ($error == 4) {
        $result['error'] = 'Please select error!';
      } elseif ($error != 0){
        $result['error'][] = 'Error: Somethings wrong! #' . $files['name'][$index];
      }
    } 

    // Not Error
    if(!isset($result['error'])){

      // Check extension
      global $valid_file_formats;

      foreach ($files['type'] as $index => $type) {
        if(!in_array($type, $valid_file_formats)){
          $result['error'][] = 'Invalid format. #' . $files['name'][$index];
        }
      }

      // Not Error
      if(!isset($result['error'])){
        $maxSize = (1024 * 1024) * 1; // 1 MB

        foreach ($files['size'] as $index => $size) {
          if($size > $maxSize){
            $result['error'][] = 'File size should be lower than 1 MB #' . $files['name'][$index];
          }
        }

        // Not Error
        if(!isset($result['error'])){

          // Upload
          foreach ($files['tmp_name'] as $index => $tmp) {
            $fileName = $files['name'][$index];
            $upload = move_uploaded_file($tmp, 'upload/' . $fileName);

            if($upload){
              $result['file'][] = 'upload/' . $fileName;
            } else{
              $result['error'][] = 'File did not uploaded!';
            }
          }

        }

      }

    }

    return $result;

  }

  $valid_file_formats = [
    'image/jpeg'
  ];

  $result = multi_upload($_FILES['files']);

  if(isset($result['file'])){

    print_r($result['file']);

    if (isset($result['error'])) {
      print_r($result['error']);
    }

  } elseif(isset($result['error'])){

    if(is_array($result['error'])){
      echo implode('<br>', $result['error']);
    } else {
      echo $result['error'];
    }

  }


 ?>
