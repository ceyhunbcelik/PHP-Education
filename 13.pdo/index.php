<?php

  require_once('connect.php');

  if(!isset($_GET['page'])){
    $_GET['page'] = 'index';
  }

  Switch ($_GET['page']) {

    case 'index':
      require_once('homepage.php');
    break;

    case 'insert':
      require_once('insert.php');
    break;

    default:
      // code...
      break;
  }

 ?>
