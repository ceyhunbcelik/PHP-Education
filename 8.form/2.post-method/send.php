<?php
  // $_POST

  // print_r($_POST);

  // echo $_POST['name']; // Ceyhun Bahadır ÇELİK

  /*
    strip_tags() - clear all of HTML tags
    htmlspecialchars() - turning HTML to harmless value
    htmlspecialchars_decode() - turning harmless HTML to normal HTML
  */

  /*
  if(trim($_POST['about']) == ''){
    echo 'Please say something in comment place';
  } else{
    print_r($_POST);
  }
  */

  // echo htmlspecialchars($_POST['about']);

  function form_filter($post){
    return is_array($post)
            ? array_map('form_filer', $post)
            : htmlspecialchars(trim($post));
  }

  $_POST = array_map('form_filter', $_POST);

  function post($name){
    if(isset($_POST[$name]))
      return $_POST[$name];
  }

  //print_r($_POST);
  echo post('about');

















?>
