
<?php require_once('header.php') ?>

<?php

  ob_start();
  require_once('connect.php');

  $_GET = array_map(function($get){
    return htmlspecialchars(trim($get));
  }, $_GET);

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

    case 'read':
      require_once('read.php');
    break;

    case 'update':
      require_once('update.php');
    break;

    case 'delete':
      require_once('delete.php');
    break;

    case 'categories':
      require_once('categories.php');
    break;

    case 'add_category':
      require_once('add_category.php');
    break;

    case 'category':
      require_once('category.php');
    break;

    default:
      // code...
    break;
  }

 ?>

<?php
  /* // PAGES
  ob_start();
  require_once('connect.php');

  $_GET = array_map(function($get){
    return htmlspecialchars(trim($get));
  }, $_GET);

  // Limit(how many post listing in page)
  $limit = 5;

  // Total Data
  $totalData = $db -> query('SELECT COUNT(id) as total FROM test') -> fetch(PDO::FETCH_ASSOC)['total'];

  // Total Page
  $totalPage = ceil($totalData / $limit);

  // Page number
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

  // Start
  $start = ($page * $limit) - $limit;

  // List Data
  $datas = $db -> query('SELECT * FROM test ORDER BY id DESC LIMIT ' . $start . ',' . $limit) -> fetchAll(PDO::FETCH_ASSOC);

  foreach ($datas as $data) {
    echo $data['ad'] . ' ' . $data['id'] . '<br>';
  }

  $left = $page - 3;
  $right = $page + 3;

  if($page <= 3){
    $right = 7;
  }

  if ($right > $totalPage) {
    $left = $totalPage - 6;
  }


  // List Pages
  echo '<div class="pages">';
  echo '<a href="index.php?page=' . ($page > 1 ? $page - 1 : 1) . '"><</a>';
  for ($i = $left; $i < $right; $i++) {
    if($i > 0 && $i <= $totalPage){
      echo '<a ' . ($i == $page ? 'class="active"' : null) . ' href="index.php?page=' . $i .'">' . $i . '</a>';
    }
  }
  echo '<a href="index.php?page=' . ($page < $totalPage ? $page + 1 : $totalPage) . '">></a>';

  echo '</div>';
  */

 ?>
<!--
<style>
    .pages a{
      display: inline-block;
      padding: 10px;
      background-color: #EEE;
      margin-right: 4px;
      text-decoration: none;
      color: #333;
    }

    .pages a.active{
      background-color: #333;
      color: #FFF;
    }
</style>
-->
