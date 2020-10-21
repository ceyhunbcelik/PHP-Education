<?php

  $db = $sql -> dbhost('localhost')
             -> dbname('courses')
             -> connect('root', 'root');

  /*
  try {
    $db = new PDO('mysql:host=localhost;dbname=courses', 'root', 'root');
  } catch (PDOException $e) {
    echo $e -> getMessage();
  }
  */
?>
