<?php

  require_once('CeyhunDB/CeyhunDB.php');
  $sql = new sqlStatements();

  $query = $db -> prepare('SELECT * FROM lessons WHERE confirmation = ?');
  $query -> execute(['1']);
  $lessons = $query -> fetchAll(PDO::FETCH_ASSOC);

  print_r($lessons);

 ?>
