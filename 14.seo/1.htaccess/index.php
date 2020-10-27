<?php require_once('header.php') ?>
<?php

   if(!isset($_GET['page'])){
     $_GET['page'] = 'index';
   }

   $_PAGES = explode('/', $_GET['page']);

   Switch ($_PAGES[0]) {
     case 'index':
       require_once('home.php');
     break;

     case 'about':
       require_once('about.php');
     break;

     case 'contact':
       require_once('contact.php');
     break;

     case 'content':
       require_once('content.php');
     break;

     default:
       // code...
     break;
   }

 ?>
