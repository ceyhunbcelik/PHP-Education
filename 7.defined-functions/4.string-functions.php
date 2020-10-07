<?php
  /*
    strlen() - length
    strstr() - printing after words from selected character in checking value
    strpos() - getting index in searching character in variable
    ucwords() - upper first character of words
    ucfirst() - upper only first character
    strtolower() - lower all of characters
    strtoupper() - upper all of characters
    trim() - cleaning left and right space
    ltrim() - cleaning left space
    rtrim() - cleaning right space
    substr() - divide string value
    str_replace() - replace selected word to target word in value
    str_repeat() - repeat selected character as much as decided
  */

  $str = 'ceyhun';
  //echo strlen($str); // 6
  // echo strlen('ceyhunbase') // 10

  //echo strstr($str, 'y'); // yhun
  //echo strstr($str, 'e'); // eyhun

  // echo strpos($str, 'c'); // 0
  // echo strpos($str, 'e') // 1

  $str = 'ceyhun Base hello';
  // echo ucwords($str); // Ceyhun Base Hello
  // echo ucfirst($str); // Ceyhun Base hello
  // echo strtolower($str); // ceyhun base hello
  // echo strtoupper($str); // CEYHUN BASE HELLO

  $str = '      CEYHUN          ';
  // echo trim($str);
  // echo lrim($str);
  // echo rtrim($str);

  $str = '-ceyhun-base-';
  // echo trim($str, '-'); // ceyhun-base
  // echo ltrim($str, '-'); // ceyhun-base-
  // echo rtrim($str, '-'); // -ceyhun-base

  //echo substr($str, 3, 7); // yhun-ba
   $str = 'Şeyma Başar';
   // echo str_replace('Başar', 'Çelik', $str); // Şeyma Çelik
   /*
   echo str_replace(
     ['Şeyma', 'Başar'],
     ['Ceyhun', 'Çelik'],
     $str
   ); // Ceyhun Çelik
   */

   // echo str_repeat('*', 10); // **********

   /*
   for ($i = 1; $i <= 10; $i++) {
     echo str_repeat('*', $i).'<br>';
   };
   *
   **
   ***
   ****
   *****
   ******
   *******
   ********
   *********
   **********
   */









?>
