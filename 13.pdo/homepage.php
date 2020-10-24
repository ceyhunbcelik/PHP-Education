<h1>HOME PAGE</h1>

<?php
  // $lessons = $db -> query('SELECT * FROM lessons')->fetchAll(PDO::FETCH_ASSOC);
  // $lessons = $db -> query('SELECT * FROM lessons WHERE id = 3')->fetch(PDO::FETCH_ASSOC);

  $query = $db -> prepare('SELECT lessons.id,
                                  lessons.title,
                                  lessons.confirmation,
                                  categories.name as category_name
                          FROM lessons
                          INNER JOIN categories
                          ON lessons.category_id = categories.id
                          ORDER BY lessons.id DESC');
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

<?php if($lessons): ?>
<ul>
  <?php foreach ($lessons as $lesson): ?>
    <li>
      <?= $lesson['title'] ?>
      -
      (<?= $lesson['category_name'] ?>)
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
