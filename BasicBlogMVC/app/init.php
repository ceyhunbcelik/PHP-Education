<?php
  $db = require_once(PATH . '/app/database.php');

  // Helper
  foreach(glob(PATH . '/app/helper/*.php') as $helperFile){
    require_once($helperFile);
  }
 ?>
