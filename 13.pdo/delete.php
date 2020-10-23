<?php
  if(!isset($_GET['id']) || empty($_GET['id'])){
    Header('Location:index.php');
    exit;
  }

  $query = $db -> prepare('DELETE FROM lessons WHERE id = ?');
  $delete = $query -> execute([
    $_GET['id']
  ]);

  if ($delete) {
    Header('Location:index.php');
  } else {
    echo "ERROR";
  }

?>
