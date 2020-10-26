<a href="index.php?page=add_category">[ADD CATEGORY]</a>
<hr>
<?php

  $categories = $db -> query('SELECT categories.*, COUNT(lessons.id) as total
                              FROM categories
                              LEFT JOIN lessons
                              ON FIND_IN_SET(categories.id, lessons.category_id)
                              GROUP BY categories.id') -> fetchAll(PDO::FETCH_ASSOC);

 ?>

<ul>
  <?php foreach ($categories as $category): ?>
    <li>
      <a href="index.php?page=category&id=<?= $category['id'] ?>">
        <?= $category['name'] ?>
        -
        (<?= $category['total']  ?>)
      </a>
    </li>
  <?php endforeach; ?>
</ul>
