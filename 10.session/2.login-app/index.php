<?php
  session_start();
  ob_start();
  require_once('config.php');
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
