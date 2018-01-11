<?php
  $var = function (){
    echo 'this is a closure';
  };

  $var();
-----------------------------
  $x = 3;
  $numbers = ['1', '2', '3', '4', '5'];

  $res = array_map(function ($n) use ($x) {
    return $n * $x;
  }, $numbers);

  ver_dump($res);
?>
