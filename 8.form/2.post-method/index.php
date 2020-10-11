<?php

function form_filter($get){
  return is_array($get)
          ? array_map('form_filer', $get)
          : htmlspecialchars(trim($get));
}

$_POST = array_map('form_filter', $_POST);

function post($name){
  if(isset($_POST[$name]))
    return $_POST[$name];
}

if(post('submit')){
  print_r($_POST);
}

?>

<form action='' method='post' enctype='multipart/form-data'>
  <!--
    input
    textarea
    file
    select
    radio
    checkbox
    multiple select
    button
  -->
  Name: <br>
  <input type='text' name='name'>
  <br>
  <hr>
  About:<br>
  <textarea name='about' rows='5' cols='50' placeholder='Tell me something..'><?= post('about') ?></textarea>
  <hr>
  Job:<br>
  <select name='job'>
    <option>-- Select --</option>
    <option <?= post('job') == 'web-developer' ? 'selected' : null ?> value='web-developer'>Web Developer</option>
    <option <?= post('job') == 'front-end-developer' ? 'selected' : null ?> value='front-end-developer'>Front-end Developer</option>
    <option <?= post('job') == 'back-end-developer' ? 'selected' : null ?> value='back-end-developer'>Back-end Developer</option>
  </select>
  <hr>
  Gender:<br>
  <label>
    <input type="radio" name="gender" value="men" checked> Men
  </label>

  <label>
    <input type="radio" name="gender" value="women"> Women
  </label>
  <hr>
  Hobbies:<br>
  <label>
    <input <?= post('hobbies') && in_array('php', post('hobbies')) ? 'checked' : null ?> type='checkbox' name='hobbies[]' value='php'> PHP
  </label>
  <label>
    <input <?= post('hobbies') && in_array('html', post('hobbies')) ? 'checked' : null ?> type='checkbox' name='hobbies[]' value='html'> HTML
  </label>
  <label>
    <input <?= post('hobbies') && in_array('css', post('hobbies')) ? 'checked' : null ?> type='checkbox' name='hobbies[]' value='css'> CSS
  </label>
  <hr>
  Picture: <br>
  <input type='file' name='picture'>
  <hr>
  Job:<br>
  <select name='job2[]' multiple size='5'>
    <option>-- Select --</option>
    <option value='web-developer'>Web Developer</option>
    <option value='front-end-developer'>Front-end Developer</option>
    <option value='back-end-developer'>Back-end Developer</option>
  </select>
  <hr>
  <input type='hidden' name='submit' value='1'>
  <button type='submit'>SEND</button>

</form>

  <!--
  <label for='input'>Click Here</label>
  <input type="text" id="input" name="" value="">
-->
