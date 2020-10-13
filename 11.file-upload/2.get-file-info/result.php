<?php

  if($_FILES['file']['error'] == 4){
    echo 'Please select file';
  } else{
    print_r($_FILES['file']);
  }

 ?>
