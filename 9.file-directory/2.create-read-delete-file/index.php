<?php

  /*
    touch() - create file

  */
  // touch('text.txt');
  // touch('text2.txt', time() - 84000); // second param changing create date

  /*
    Mode:
      r  - open for read
      r+ - open for read and write
      w  - open for write(will create if file not exists, if exists, create again from zero)
      w+ - open for read and write
      a  - open for write
      a+ - open for read and write
  */

  /*
    fopen()    - open file
    fclose()   - close file
    fwrite()   - type in file
    fread()    - read file
    fgets()    - read line by line
    feof()     - checking is file readed till end
    filesize() - return in file character size
    unlink()   - delete file
  */

  /*
  $content = 'I am an english man in new york';

  $file = fopen('test.txt', 'w'); // create
  fwrite($file, $content); // write
  fclose($file); // close
  */

  /*
  $content = 'I am a turkish man in california';

  $file = fopen('test.txt', 'a'); // append
  fwrite($file, $content); // write
  fclose($file); // close
  */

  /*
  $file = fopen('test.txt', 'r'); // read
  // echo fread($file, 9); // I am an e
  // echo filesize('test.txt'); // 64
  echo fread($file, filesize('test.txt')); // return all
  fclose($file);
  */

  /*
  $content = 'This is an example' . rand(0, 1000) . "\n";

  $file = fopen('content.txt', 'a');
  fwrite($file, $content);
  fclose($file);
  */

  /*
  $file = fopen('content.txt', 'a+');

  echo fgets($file) . '<br>'; // This is an example332
  echo fgets($file) . '<br>'; // This is an example638
  echo fgets($file) . '<br>'; // This is an example899
  echo fgets($file) . '<br>'; // This is an example524
  echo fgets($file) . '<br>'; // This is an example732
  echo fgets($file) . '<br>'; // This is an example403
  echo fgets($file) . '<br>'; // This is an example752
  echo fgets($file);

  print_r(feof($file)); // 1 - end of line

  fclose($file);
  */

  /*
  $file = fopen('content.txt', 'a+');

  while (!feof($file)) {
    echo fgets($file) . '<br>';
  }

  //
    This is an example332
    This is an example638
    This is an example899
    This is an example524
    This is an example732
    This is an example403
    This is an example752
  //

  fclose($file);
  */

  //unlink('text2.txt'); // text2.txt deleted

  /*
  $values = file('test.txt');

  print_r($values);
  // Array ( [0] => I am an english man in new york [1] => I am a turkish man in california )
  fclose($values);
  */

  /*
    file_get_contents()
    file_put_contents()
  */

  // $content = file_get_contents('test.txt');

  // echo $content;
  // I am an english man in new york I am a turkish man in california

  // $content = file_get_contents('http://erbilen.net/logic-pro-x-error-content-relocation-could-not-be-completed-hatasi-ve-cozumu/');
  // echo $content;

  // file_put_contents('text.txt', 'New Value'); // deleted old value and write "New Value"
  file_put_contents('text.txt', 'New Value', FILE_APPEND); // keep old value and write "New Value"

 ?>
