<?php
  /*
  $query = $db -> prepare('UPDATE lessons SET
  title   = ?,
  content = ?,
  confirmation = ?
  WHERE id = ?');

  $update = $query -> execute([
    'update title', 'update content', 1, 9
  ]);

  if($update){
    echo "DONE";
  } else {
    echo "ERROR";
  };
  */

  if(!isset($_GET['id']) || empty($_GET['id'])){
    Header('Location:index.php');
    exit;
  }

  $categories = $db -> query('SELECT * FROM categories ORDER BY name ASC') -> fetchAll(PDO::FETCH_ASSOC);


  $query = $db -> prepare('SELECT * FROM lessons WHERE id = ?');
  $query -> execute([
    $_GET['id']
  ]);

  $lesson = $query -> fetch(PDO::FETCH_ASSOC);

  if(!$lesson){
    Header('Location:index.php');
    exit;
  }

  if(isset($_POST['submit'])){
    $title        = isset($_POST['title']) ? $_POST['title'] : $lesson['title'];
    $content      = isset($_POST['content']) ? $_POST['content'] : $lesson['content'];
    $confirmation = isset($_POST['confirmation']) ? $_POST['confirmation'] : $lesson['confirmation'];
    $category_id  = isset($_POST['category_id']) ? $_POST['category_id'] : $lesson['confirmation'];

    if(!$title){
      echo 'Please Add Title!';
    } elseif(!$content){
      echo 'Please Add Content';
    } else{
      // UPDATE
      $query = $db -> prepare('UPDATE lessons SET
      title        = ?,
      content      = ?,
      confirmation = ?,
      category_id  = ?
      WHERE id = ?');

      $update = $query -> execute([
        $title, $content, $confirmation, $category_id, $_GET['id']
      ]);

      if($update){
        Header('Location:index.php?page=read&id=' . $_GET['id']);
      } else{
        echo "ERROR";
      }

    }
  }
 ?>

 <form method="post">
   Title:<br>
   <input type="text" name="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $lesson['title'] ?>"><br>

   Content:<br>
   <textarea name="content" rows="8" cols="80"><?= isset($_POST['content']) ? $_POST['content'] : $lesson['content'] ?></textarea><br>

   Category:<br>
   <select name="category_id">
      <option value="">-- SELECT CATEGORY --</option>
    <?php foreach ($categories as $category): ?>
      <option <?= $category['id'] == $lesson['category_id'] ? ' selected' : null ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
    <?php endforeach; ?>
   </select><br><br>

   Confirmation:<br>
   <select name="confirmation">
     <option <?= $lesson['confirmation'] == '1' ? ' selected' : '' ?> value="1">Yes</option>
     <option <?= $lesson['confirmation'] == '0' ? ' selected' : '' ?> value="0">No</option>
   </select><br><br>

   <input type="hidden" name="submit" value="1">
   <button type="submit">Update</button>

 </form>
