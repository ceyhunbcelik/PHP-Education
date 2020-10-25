<?php

  require_once('CeyhunDB/CeyhunDB.php');
  $sql = new sqlStatements();

  /*
  $query = $db -> prepare('SELECT lessons.id,
                                  lessons.title,
                                  lessons.confirmation,
                                  categories.name as category_name
                          FROM lessons
                          INNER JOIN categories
                          ON lessons.category_id = categories.id
                          ORDER BY lessons.id DESC');
  $query -> execute();
  $data = $query -> fetchAll(PDO::FETCH_ASSOC);

  print_r($data);
  */



 ?>
