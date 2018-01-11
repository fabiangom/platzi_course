<?php
  // operadores aritmeticos (+ - / * %)
  $a = 1;
  $b = 2;

  $c = $a + $b;
  var_dump($c);

  //en el caso de que el resultado sea float podemos convertirlo
  //a int de la siguiente forma...
  $c = (int)($a / $b);
  var_dump($c);

  //el operador modulo es para obetener el residuo de una division
  $c = $a % $b;
  var_dump($c);
?>
