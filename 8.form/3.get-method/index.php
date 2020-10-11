<?php
  // SEARCH - GET
  // SAVE - POST
  // /?word=Ceyhun&id=5
  //print_r($_GET);
  // Array ( [word] => Ceyhun [id] => 5 )
  echo 'Start';
  // exit; // stopping
  function form_filter($get){
    return is_array($get)
            ? array_map('form_filer', $get)
            : htmlspecialchars(trim($get));
  }

  function get($name){
    if(isset($_GET[$name]))
      return $_GET[$name];
  }

  $_GET = array_map('form_filter', $_GET);

  $id = (int) get('id');
?>

<form method='get'>
  Search:
  <input type='text' name='word' value='<?= get('word') ?>'>
  <hr>
  ID: <?= is_int($id) && $id != 0 ? get('id') : 'Must be integer' ?>
</form>
