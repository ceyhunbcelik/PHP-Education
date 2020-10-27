<?php

  function seflink($str){
    // character low
    $str = mb_strtolower($str, 'UTF-8');
    // convert turkish character to english character
    $str = str_replace(
      ['ı', 'ğ', 'ü', 'ç', 'ö', 'ş', '#'],
      ['i', 'g', 'u', 'c', 'o', 's', 'sharp'],
      $str
    );
    // convert everything to hyphen except numbers and characters.
    $str = preg_replace('/[^a-z0-9]/', '-', $str);
    // only 1 hyphen
    $str = preg_replace('/-+/', '-', $str);
    // trim for unnecessary hyphen
    return trim($str, '-');
  }

 ?>
