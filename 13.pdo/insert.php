<?php

  /*
  $query = $db -> prepare('INSERT INTO lessons2 SET
  title        = ?,
  content      = ?,
  confirmation = ?');

  $insert = $query -> execute([
    'test title', 'test content', 1
  ]);

  if($insert){
    echo 'Data Saved Successfully!';
  } else{
    $error = $query -> errorInfo();
    echo 'MySQL Error: ' . $error[2];
  }
  */

  // Fetch All Categories
  $categories = $db -> query('SELECT * FROM categories ORDER BY name ASC') -> fetchAll(PDO::FETCH_ASSOC);

  // Form POST
  if(isset($_POST['submit'])){
    $title        = isset($_POST['title']) ? $_POST['title'] : null;
    $content      = isset($_POST['content']) ? $_POST['content'] : null;
    $confirmation = isset($_POST['confirmation']) ? $_POST['confirmation'] : 0;
    $category_id  = isset($_POST['category_id']) && is_array($_POST['category_id']) ? implode(',', $_POST['category_id']) : null;

    if(!$title){
      echo 'Please Add Title!';
    } elseif(!$content){
      echo 'Please Add Content';
    } elseif (!$category_id) {
      echo 'Please Select Category';
    } else{
      // INSERT

      $query = $db -> prepare('INSERT INTO lessons SET
      title = ?,
      content = ?,
      confirmation = ?,
      category_id = ?');

      $insert = $query -> execute([
        $title, $content, $confirmation, $category_id
      ]);

      $lastID = $db -> lastInsertId();

      if($insert){
        Header('Location:index.php?page=read&id=' . $lastID);
      } else{
        $error = $query -> errorInfo();
        echo 'MySQL Error: ' . $error[2];
      }

    }
  }

 ?>

 <form method="post">
   Title:<br>
   <input type="text" name="title" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>"><br>

   Content:<br>
   <textarea name="content" rows="8" cols="80"><?= isset($_POST['content']) ? $_POST['content'] : '' ?></textarea><br>

   Category:<br>
   <select name="category_id[]" multiple size="5">
    <?php foreach ($categories as $category): ?>
      <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
    <?php endforeach; ?>
   </select><br><br>

   Confirmation:<br>
   <select name="confirmation">
     <option value="1">Yes</option>
     <option value="0">No</option>
   </select><br><br>

   <input type="hidden" name="submit" value="1">
   <button type="submit">Send</button>

 </form>
