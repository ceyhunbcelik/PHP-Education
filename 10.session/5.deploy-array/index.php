<?php

  session_start();

  /*
  $_SESSION = [
    'user' => 'ceyhunbase',
    'pass' => 'test123'
  ];*/

  // print_r($_SESSION);
  // Array ( [user] => ceyhunbase [pass] => test123 )

  /*
  setcookie('member[id]', 1, 30);
  setcookie('member[user]', 'ceyhunbasee');
  setcookie('member[pass]', 'test123');
  */

  print_r($_COOKIE);
  // Array ( [member] => Array ( [id] => 1 [user] => ceyhunbase [pass] => test123 ))

 ?>
