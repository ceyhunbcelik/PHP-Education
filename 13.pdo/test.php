<?php

  require_once('CeyhunDB/CeyhunDB.php');
  $sql = new sqlStatements();

  /*
  $data = $sql -> select('*')
               -> from('lessons')
               -> where('id', '=', '?')
               -> _where('&&', 'confirmation', '=', '?')
               -> prepare(['fetch'], ['3', '1']);

  print_r($data);
  */

  echo "<br><br><br>";

  $query = $db -> prepare('SELECT * FROM table WHERE column = ?');
  $query -> execute(['value']);

  $data = $query -> fetch(PDO::FETCH_ASSOC);

  print_r($data);

 ?>
