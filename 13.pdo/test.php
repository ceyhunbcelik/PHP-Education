<?php

  require_once('CeyhunDB/CeyhunDB.php');
  $sql = new sqlStatements();


  $data = $sql -> select('*')
               -> from('lessons')
               -> where('id', '=', '3')
               -> _where('&&', 'confirmation', '=', '1')
               -> query('fetch');

  print_r($data);
  // SELECT * FROM lessons WHERE id = ? && confirmation = 1
  /*
  $data = $sql -> select('*')
               -> from('lessons')
               -> query('fetchall');

  print_r($data);
  */
  echo "<br><br><br><br><br><br>";
  /*
  $lessons = $db -> query('SELECT * FROM lessons WHERE id = 1') -> fetch(PDO::FETCH_ASSOC);
  print_r($lessons);
  */
 ?>
