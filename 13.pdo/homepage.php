<?php require_once('header.php') ?>

<h1>HOME PAGE</h1>

<?php
  // $lessons = $db -> query('SELECT * FROM lessons')->fetchAll(PDO::FETCH_ASSOC);
  // $lessons = $db -> query('SELECT * FROM lessons WHERE id = 3')->fetch(PDO::FETCH_ASSOC);


  $query = $db -> prepare('SELECT * FROM lessons');
  $query -> execute();
  $lessons = $query -> fetchAll(PDO::FETCH_ASSOC);


  /*
  $query = $db -> prepare('SELECT * FROM lessons WHERE id = ?');
  $query -> execute([
    '7'
  ]);
  $lessons = $query -> fetch(PDO::FETCH_ASSOC);
  */


?>

<h3>LESSONS</h3>

<ul>
  <?php foreach ($lessons as $lesson): ?>
    <li>
      <?= $lesson['title'] ?>
      <?php if ($lesson['confirmation'] == 1): ?>
        <a href="index.php?page=read&id=<?= $lesson['id'] ?>">[READ]</a>
      <?php endif; ?>
      <a href="index.php?page=edit&id=<?= $lesson['id'] ?>">[EDIT]</a>
      <a href="index.php?page=edit&id=<?= $lesson['id'] ?>">[DELETE]</a>
    </li>
  <?php endforeach; ?>
</ul>
