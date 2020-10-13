<?php
  session_start();
  ob_start();
  require_once('config.php');


  if(isset($_SESSION['time']) && time() > $_SESSION['time']){

    session_destroy();
    header('Location:/10.session/4.time-adjusted-session/');
  } else{
    $_SESSION['time'] = time() + 10;
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php if(isset($_SESSION['username'])): ?>
       <!-- Logged in -->
       <?php require_once('admin.php') ?>
     <?php else: ?>
       <!-- Login -->
       <?php require_once('login.php') ?>
     <?php endif; ?>
   </body>
 </html>
