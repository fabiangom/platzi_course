<?php
  //operacion de union basado en los indices
  //php une los dos arrays ordenandolos por el indice que tienen
  $array1 = [
    0 => 'a',
    1 => 'b',
    2 => 'c'
  ];

  $array2 = [
    3 => 'd',
    4 => '3'
  ];

  $res = $array1 + $array2;
  var_dump($res);
----------------------------------
//operacion de comparacion entre dos arrays
//el resultado es true por que ambos arrays contienen los mismos valores
$array1 = [
  0 => 'a',
  1 => 'b',
  2 => 'c'
];

$array2 = ['a', 'b', 'c'];

$res = $array1 == $array2;
var_dump($res);
?>
