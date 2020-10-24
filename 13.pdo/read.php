<?php

  if(!isset($_GET['id']) || empty($_GET['id'])){
    Header('Location:index.php');
    exit;
  }

  $query = $db -> prepare('SELECT * FROM lessons WHERE id = ? && confirmation = 1');
  $query -> execute([
    $_GET['id']
  ]);

  $lesson = $query -> fetch(PDO::FETCH_ASSOC);

  if(!$lesson){
    Header('Location:index.php');
    exit;
  }

 ?>

<h3><?= $lesson['title'] ?></h3>

<div>
  <strong>Date: </strong><?= $lesson['date'] ?><hr>
  <?= nl2br($lesson['content']) ?>
</div>
