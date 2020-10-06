<?php
  /*
    array_map() - manipulate to array with function
    array_filter() - clear null value or can make filter func in second param but keys still same
    array_merge() - merging 2 array
    array_rand() - getting random key
    array_reverse() - getting reverse data
    array_search() - return key of searching value. Purpose is only check
    in_array() - checking if value have
    array_shift() - remove first value
    array_pop() - remove last value
    array_slice() - print after skip value
    array_sum() - sum of array values
    array_product() - multiplication of array values
    array_unique() - delete repeated value
  */


  $arr = [1, 2, 3, 4, 5];

  $arr2 = array_map(function($val){
    return $val * 3;
  }, $arr);
  // print_r($arr2);
  // Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 [4] => 15 )

  $arr = ['', 'Ceyhun', '', 'Çelik'];
  $arr2 = array_filter($arr);
  //print_r($arr2);
  // Array ( [1] => Ceyhun [3] => Çelik )

  $arr = [1, 2, 3, 4, 5];
  $arr2 = array_filter($arr, function($item){
    return $item > 2 && $item < 6;
  });

  // print_r($arr2);
  // Array ( [2] => 3 [3] => 4 [4] => 5 )

  $arr1 = [1, 2, 3];
  $arr2 = [4, 5, 6];

  $arr = array_merge($arr1, $arr2);
  // print_r($arr);
  // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'age'     => 22,
    'website' => 'ceyhun.com'
  ];

  $random = array_rand($arr, 2);
  // print_r($random);
  // - Random 2 key => Array ( [0] => surname [1] => website )

  $values = array_map(function($key) use($arr){
    return $arr[$key];
  }, $random);
  // print_r($values);
  // Array ( [0] => name [1] => age ) Array ( [0] => Ceyhun [1] => 22 )

  $arr = [1, 2, 3, 4, 5];
  //print_r($arr);
  // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
  $arr = array_reverse($arr);
  //print_r($arr);
  // Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'a' => [
      'b' => [
        'c' => 'd'
      ]
    ]
  ];

  //$test = array_search('Ceyhun', $arr);
  //echo $test; // return name


  function _array_search($cur_val, $arr){
    foreach ($arr as $key => $val) {
      if($val == $cur_val){
        return true;
      }
      if(is_array($val)){
        return _array_search($cur_val, $val);
      }
    }
    return false;
  }

  $test = _array_search('d', $arr);
  // echo $test; // return 1

  $arr = [1, 2, 3, 4];

  /*
  if(in_array('2', $arr)){
    echo 1;
  } else{
    echo 0;
  }
  */

  $arr = [1, 2, 3, 4, 5];
  $first_val = array_shift($arr);
  // echo $first_val; // 1

  //print_r($arr);
  // Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )

  $last_val = array_pop($arr);
  // echo $last_val; // 5
  // print_r($arr);
  // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

  $arr = [1, 2, 3, 4, 5];

  $arr2 = array_slice($arr, 2);
  //print_r($arr2);
  // Array ( [0] => 3 [1] => 4 [2] => 5 )

  $arr3 = array_slice($arr, 2, 2);
  //print_r($arr3);
  // Array ( [0] => 3 [1] => 4 )

  $arr4 = array_slice($arr, -2);
  // print_r($arr4);
  // Array ( [0] => 4 [1] => 5 )

  $arr = [1, 2, 3, 4, 5];
  $total = array_sum($arr);
  //echo $total; // 15
  $multiplication = array_product($arr);
  //echo $multiplication; // 120

  $arr = ['Ceyhun', 'Şeyma', 'Ceyhun', 'Şeyma', 'Bahadır'];
  //print_r($arr);
  // Array ( [0] => Ceyhun [1] => Şeyma [2] => Ceyhun [3] => Şeyma [4] => Bahadır )
  $arr2 = array_unique($arr);
  print_r($arr2);
  // Array ( [0] => Ceyhun [1] => Şeyma [4] => Bahadır )


?>
