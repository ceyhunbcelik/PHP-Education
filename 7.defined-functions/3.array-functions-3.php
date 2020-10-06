<?php
  /*
    array_values() - print value and start key from 0 to regular everytime
    array_push() - add value in array
    array_unshift() - add value to array's first index.
    array_keys() - getting key's value
    current() - getting first value of array
    end() - getting last value of array
    next() - getting next value every using
    prev() - getting preview value every using
    reset() - reset all of next&preview func.
    extract() - turning array key to variable. can use directly by key name.
    asort() - sorting value a-z
    arsort() - sorting value z-a
    ksort() - sorting key a-z
    krsort() - sorting key z-a
  */

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik'
  ];

  $arr2 = array_values($arr);
  //print_r($arr2);
  // Array ( [0] => Ceyhun [1] => Çelik )

  $arr = [
    'Ceyhun',
    'Bahadır'
  ];

  array_push($arr, 'Çelik');

  //print_r($arr);
  // Array ( [0] => Ceyhun [1] => Bahadır [2] => Çelik )
  $arr['age'] = 22;
  //print_r($arr);
  // Array ( [0] => Ceyhun [1] => Bahadır [2] => Çelik [age] => 22 )

  $arr = [
    'Ceyhun',
    'Bahadır'
  ];

  //array_unshift($arr, 'udemy');
  //print_r($arr);
  // Array ( [0] => udemy [1] => Ceyhun [2] => Bahadır )
  $arr2 = [
    'web' => 'udemy'
  ];

  $arr = array_merge($arr2, $arr);
  // print_r($arr);
  // Array ( [web] => udemy [0] => Ceyhun [1] => Bahadır )

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
    'a' => [
      'b' => 'c',
      'd' => [
        'e' => 'f'
      ]
    ]
  ];

  $keys = array_keys($arr);
  //print_r($keys);
  // Array ( [0] => name [1] => surname [2] => a )

  function _array_keys($arr){
    static $keys = [];
    foreach ($arr as $key => $val) {
      array_push($keys, $key);
      if(is_array($val)){
        return _array_keys($val);
      }
    }
    return $keys;
  }

  $keys = _array_keys($arr);
  //print_r($keys);
  // Array ( [0] => name [1] => surname [2] => a [3] => b [4] => d [5] => e )

  $arr = ['Ceyhun', 'Bahadır', 'udemy', 'prototurk'];
  // echo current($arr); // Ceyhun
  // echo end($arr); // prototurk
  // echo next($arr); // Bahadır
  // echo next($arr); // udemy
  // echo next($arr); // prototurk
  // echo prev($arr); // udemy
  // echo prev($arr); // Bahadır
  // echo next($arr); // udemy
  // reset($arr); // reset all of next&preview func.
  // echo next($arr); // Bahadır

  $arr = [
    'name'    => 'Ceyhun',
    'surname' => 'Çelik',
  ];

  extract($arr);

  //echo $name; // Ceyhun
  //echo $surname // Çelik

  $arr = [3, 1, 6, 4];
  //print_r($arr);
  // Array ( [0] => 3 [1] => 1 [2] => 6 [3] => 4 )

  //asort($arr);
  //print_r($arr);
  // Array ( [1] => 1 [0] => 3 [3] => 4 [2] => 6 )

  // arsort($arr);
  // print_r($arr);
  // Array ( [2] => 6 [3] => 4 [0] => 3 [1] => 1 )

  $arr = [
    'c' => 'First',
    'a' => 'Second',
    'b' => 'Third'
  ];
  // print_r($arr);
  // Array ( [c] => First [a] => Second [b] => Third )

  // ksort($arr);
  // print_r($arr);
  // Array ( [a] => Second [b] => Third [c] => First )

  krsort($arr);
  print_r($arr);
  // Array ( [c] => First [b] => Third [a] => Second )


?>
