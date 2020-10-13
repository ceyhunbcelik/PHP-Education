<?php
  /*
    Aritcmetic Operators
      -> + addition
      -> - subtraction
      -> * multiplication
      -> / division
      -> % mod
  */

  $a = 15;
  $b = 5;

  //echo $a + $b; // return 20
  //echo $a - $b; // return 10
  //echo $a * $b; // return 75
  //echo $a / $b; // return 3
  //echo $a % $b; // return 0

  // Operation priority

  //echo 5 + 2 * 5 * 2 / 5; // return 9
  //echo (5 + 2) * 5 * 2 / 5; // return 14
  // echo (5 + ((2 * 5) * 2)) / 5; // return 5

  $a = 5;
  $b = 2;
  $c = 5;
  $d = 2;
  $e = 5;

  echo ($a + ($b * $c)) * ($d / $e); // return
 ?>
