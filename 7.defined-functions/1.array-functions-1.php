<?php
  /*
    print_r() - printing array
    var_dump() - printing array with details
    explode() - exploding array by selected character
    implode() - merging array to string by selected character
    count() - getting length of array
    is_array() - is this array?
    shuffle() - mixing values of array
    array_combine() - firs array's index is getting key of second array's index
    array_count_values() - counting same data
    array_flip() - change place of key and value
    array_key_exists() - check a key name - but not working in subarrays
  */

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'age'     => 22
  ];

  // print_r($arr);
  // Array ( [name] => Ceyhun [surname] => Çelik [age] => 22 )

  //var_dump($arr);
  // array(3) { ["name"]=> string(6) "Ceyhun" ["surname"]=> string(6) "Çelik" ["age"]=> int(22) }

  $test = 'Ceyhun,Bahadır,Çelik';
  $arr = explode(',', $test);
  //print_r($arr);
  // Array ( [0] => Ceyhun [1] => Bahadır [2] => Çelik )

  $string = implode('|', $arr);
  //echo $string;
  // Ceyhun|Bahadır|Çelik

  //echo count($arr); // 3

  /*
  if(is_array($string)){
    echo 'This is array';
  } else{
    echo 'This is not array!';
  }
  // This is not array!
  */

  $arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  shuffle($arr); // Mixed
  //print_r($arr);
  // Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 5 [4] => 4 [5] => 2 [6] => 7 [7] => 0 [8] => 1 [9] => 10 [10] => 8 )

  $keys   = ['job', 'gf'];
  $values = ['Student', 'Şeyma'];

  $arr = (array_combine($keys, $values));
  //print_r($arr);
  // Array ( [job] => Student [gf] => Şeyma )

  $arr = ['Ceyhun', 'Ceyhun', 'Şeyma', 'Ceyhun', 'CvC'];
  //print_r(array_count_values($arr));
  // Array ( [Ceyhun] => 3 [Şeyma] => 1 [CvC] => 1 )

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'age'     => 22
  ];

  $arr2 = array_flip($arr);
  //print_r($arr2);
  // Array ( [Ceyhun] => name [Çelik] => surname [22] => age )

  $arr = [
    'name' => 'Ceyhun',
    'a' => [
      'b' => [
        'c' => [
          'd' => 'e',
          'f' => 'g'
        ]
      ]
    ]
  ];
  /*
  if(array_key_exists('name', $arr)){
    echo 'have key called "name"';
  } else{
    echo 'have not key called "name"';
  }
  */
  // have key called "name"

  function _array_key_exists($cur_key, $arr){
    foreach($arr as $key => $val){
      if($key == $cur_key){
        return true;
      }
      if(is_array($val)){
        return _array_key_exists($cur_key, $val);
      }
    }
    return false;
  }


  if(_array_key_exists('c', $arr)){
    echo 'have key called "c"';
  } else{
    echo 'have not key called "c"';
  }
  // have key called "c"

 ?>
