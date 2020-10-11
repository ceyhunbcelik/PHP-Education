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

  if(post('login')){
    print_r($_POST);
  }

  if(post('register')){
    print_r($_POST);
  }


?>

<form method="post">
  <h3>Login</h3>
  Username:
  <input type="text" name="username" value=""><br>
  Password:
  <input type="text" name="password" value=""><br>
  <input type="hidden" name="login" value="1">
  <button type="submit">Login</button>
</form>
<hr>
<form method="post">
  <h3>Register</h3>
  Username:
  <input type="text" name="username" value=""><br>
  Password:
  <input type="text" name="password" value=""><br>
  E-Mail:
  <input type="text" name="email" value=""><br>
  <input type="hidden" name="register" value="1">
  <button type="submit">Login</button>
</form>
