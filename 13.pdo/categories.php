<a href="index.php?page=add_category">[ADD CATEGORY]</a>
<hr>
<?php

  $categories = $db -> query('SELECT * FROM categories') -> fetchAll(PDO::FETCH_ASSOC);


 ?>

<ul>
  <?php foreach ($categories as $category): ?>
    <li>
      <a href="index.php?page=category&id=<?= $category['id'] ?>">
        <?= $category['name'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
