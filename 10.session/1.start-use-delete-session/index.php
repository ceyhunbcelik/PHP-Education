<?php
  session_start();
  $_SESSION['username'] = 'Ceyhun';
  $_SESSION['password'] = 'test123';

  // echo $_SESSION['username']; // Ceyhun

  // session_destroy();



  // print_r($_SESSION);
  // Array ( [username] => Ceyhun [password] => test123 )

  unset($_SESSION['password']);
  print_r($_SESSION);
  // Array ( [username] => Ceyhun )

 ?>
