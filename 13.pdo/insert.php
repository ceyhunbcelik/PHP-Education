<?php require_once('header.php') ?>

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

  // Form POST
  if(isset($_POST['submit'])){
    $title        = isset($_POST['title']) ? $_POST['title'] : null;
    $content      = isset($_POST['content']) ? $_POST['content'] : null;
    $confirmation = isset($_POST['confirmation']) ? $_POST['confirmation'] : 0;

    if(!$title){
      echo 'Please Add Title!';
    } elseif(!$content){
      echo 'Please Add Content';
    } else{
      // INSERT

      $query = $db -> prepare('INSERT INTO lessons SET
      title = ?,
      content = ?,
      confirmation = ?');

      $insert = $query -> execute([
        $title, $content, $confirmation
      ]);

      if($insert){
        Header('Location:index.php');
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
   <textarea name="content" rows="8" cols="80"><?= isset($_POST['content']) ? $_POST['content'] : ' ' ?></textarea><br>
   Confirmation:<br>
   <select name="confirmation">
     <option value="1">Yes</option>
     <option value="0">No</option>
   </select><br><br>
   <input type="hidden" name="submit" value="1">
   <button type="submit">Send</button>

 </form>
