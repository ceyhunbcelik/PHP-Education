<?php

  if(!isset($_GET['id']) || empty($_GET['id'])){
    Header('Location:index.php?page=categories');
    exit;
  }

  $query = $db -> prepare('SELECT * FROM categories WHERE id = ?');
  $query -> execute([
    $_GET['id']
  ]);

  $category = $query -> fetch(PDO::FETCH_ASSOC);

  if(!$category){
    Header('Location:index.php?page=categories');
    exit;
  }

  // Lessons
  $query = $db -> prepare('SELECT * FROM lessons
  WHERE FIND_IN_SET(?, category_id)');

  $query -> execute([
    $category['id']
  ]);

  $lessons = $query -> fetchAll(PDO::FETCH_ASSOC);

 ?>

 <h3><?= $category['name'] ?></h3>

 <?php if($lessons): ?>
 <ul>
   <?php foreach ($lessons as $lesson): ?>
     <li>
       <?= $lesson['title'] ?>
       <div class="">
         <?php if ($lesson['confirmation'] == 1): ?>
           <a href="index.php?page=read&id=<?= $lesson['id'] ?>">[READ]</a>
         <?php endif; ?>
         <a href="index.php?page=update&id=<?= $lesson['id'] ?>">[UPDATE]</a>
         <a href="index.php?page=delete&id=<?= $lesson['id'] ?>">[DELETE]</a>
       </div>
     </li>
   <?php endforeach; ?>
 </ul>
 <?php else: ?>
   <h4>Nothing have</h4>
 <?php endif; ?>
