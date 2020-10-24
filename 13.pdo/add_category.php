<?php

  if(isset($_POST['name'])){

    $name = !empty($_POST['name']) ? $_POST['name'] : null;

    echo $name;

    if(!$name){
      echo "Type a Name";
    } else {
      $query = $db -> prepare('INSERT INTO categories SET
      name = ?');
      $insert = $query -> execute([
        $name
      ]);

      if($insert){
        Header('Location:index.php?page=categories');
      } else {
        echo "ERROR";
      }
    }
  }

 ?>

<form method="post">
  Category Name:<br>
  <input type="text" name="name" value="">

  <button type="submit">Send</button>
</form>
