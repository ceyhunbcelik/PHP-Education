<?php
  /*
    scandir()
    glob()
  */

  /*
  $files =  scandir('.');
  print_r($files);
  // Array ( [0] => . [1] => .. [2] => index.php [3] => test-folder )
  */

  /*
  $files = glob('*');
  print_r($files);
  // Array ( [0] => index.php [1] => test-folder )
  */

  /*
  $folder = glob('*', GLOB_ONLYDIR);
  print_r($folder);
  // Array ( [0] => test-folder )
  */


  //$folder = glob('*/');
  //print_r($folder);
  // Array ( [0] => test-folder/ )

  /*
  $folder = glob('*.php');
  print_r($folder);
  // Array ( [0] => index.php )
  */

  /*
  $folder = glob('*.{php,txt}', GLOB_BRACE);
  print_r($folder);
  // Array ( [0] => index.php [1] => text.txt )
  */

  /*
  $folder = glob('*{/,txt}', GLOB_BRACE);
  print_r($folder);
  // Array ( [0] => test-folder/ [1] => text.txt )
  */

  function files_list($directory_name){
    $files = scandir($directory_name);

    echo '<ul>';

    foreach ($files as $file) {
      if(!in_array($file, ['.', '..'])){
        echo '<li>' . $file . '</li>';
        if(is_dir($directory_name . '/' . $file)){
          files_list($directory_name . '/' . $file);
        }
      }
    }

    echo '</ul>';
  }

  // print_r(files_list('.'));
  // Array ( [0] => . [1] => .. [2] => index.php [3] => test-folder [4] => text.txt )

  // files_list('..') // return list of "9.file-directory"

  function list_files($directory_name){
    echo '<ul>';
      $files = glob($directory_name);
      foreach ($files as $file) {
        echo '<li>' . str_replace('../', '', $file) . '</li>';
        if(is_dir($file)){
          list_files($file . '/*');
        }
      }
    echo '</ul>';
  }

  list_files('../*');




 ?>
