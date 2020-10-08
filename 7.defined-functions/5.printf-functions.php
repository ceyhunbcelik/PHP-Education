<?php
  /*
    printf() - making possible to use variable in string by parameters.
    sprintf() - like a printf() but need "echo" to print
    vprintf() - use to manipulate a string
    vsprintf() - like a vprintf() but need "echo" to print
  */


  $str = 'there are 5 monkeys in africa';

  // printf($str); // there are 5 monkeys in africa

  $place = 'africa';
  $population = 5;
  $type = 'monkeys';

  // echo 'there are ' . $population .  ' ' . $type . ' in ' . $place;
  // printf('there are %d %s in %s', $population, $type, $place); // there are 5 monkeys in africa

  $date = '2020-5-8';
  // vprintf('%d-%02d-%02d', explode('-', $date)); // 2020-05-08

  // printf('Pi %f tür.', 3.14); // Pi 3.140000 tür.
  // printf('Pi %.2f tür.', 3.14); // Pi 3.14 tür.

  // echo sprintf('Pi %.2f tür.', 3.14); // Pi 3.14 tür.
  // echo vsprintf('%d-%02d-%04d', explode('-', $date)); // 2020-05-0008















?>
