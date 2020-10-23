<?php

  require_once('CeyhunDB/CeyhunDB.php');
  $sql = new sqlStatements();

  $data = $sql -> select('*')
               -> from('lessons')
               -> where('confirmation', '=', '?')
               -> prepare(['fetchall'], ['0']);

  print_r($data);

  /*
  $query = $db -> prepare('SELECT * FROM lessons WHERE confirmation = ?');
  $query -> execute(['1']);
  $lessons = $query -> fetchAll(PDO::FETCH_ASSOC);

  print_r($lessons);
  */
 ?>
