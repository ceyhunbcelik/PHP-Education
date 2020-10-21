<?php

  require_once('CeyhunDB/CeyhunDB.php');
  $sql = new sqlStatements();

  $data = $sql -> select('*')
               -> from('lessons')
               -> query('fetchall');

  print_r($data);

  echo "<br><br><br><br><br><br>";

  //$lessons = $db -> query('SELECT * FROM lessons')->fetchAll(PDO::FETCH_ASSOC);
  //print_r($lessons);

 ?>
