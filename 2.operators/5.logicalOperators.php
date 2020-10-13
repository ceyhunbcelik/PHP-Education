<?php
  /*
    Logical Operators
      -> && - AND
      -> || - OR
      -> !  meaning "is not"
  */

  $a = 5;
  $b = 5;

  //echo ($a == $b) && ($a + $b == 10); // return 1
  //echo ($a == $b) && ($a + $b == 9); // return 0

  //echo ($a == $b) || ($a + $b == 9); // return 1
  //echo ($a != $b) || ($a + $b == 9); // return 0

  //echo !($a == $b); // return 0
  echo !($a != $b); // return 1

?>
