<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!$username || !$password){
      $error = "Please fill inputs";
    } else if($username != $user['username']){
      $error = "Username is invalid";
    } else if($password != $user['password']){
      $error = "Password is invalid";
    } else{
      $_SESSION['username'] = $username;
      // header() - redirect
      header('Location:/10.session//2.login-app');
    }
  }
 ?>


<h1>LOGIN</h1>
<?= isset($error) ? $error : null ?>
<form method="post">
  Username:
  <input type="text" name="username" value=""><br>
  Password:
  <input type="text" name="password" value=""><br>
  <input type="hidden" name="submit" value="1">
  <button type="submit">Login</button>
</form>
