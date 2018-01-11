<?php
  //operadores de comparacion
  $v1 = 10;
  $v2 = 12;

  //operador igual ==
  //en este ejemplo da false
  $res = $v1 == $v2;
  var_dump($res);
------------------------------
  //operadores de comparacion
  $v1 = 10;
  $v2 = '10';

  //operador igual ==
  //en este ejemplo da true porque convierte el string en entero
  $res = $v1 == $v2;
  var_dump($res);
------------------------------
  //operadores de comparacion
  $v1 = 10;
  $v2 = '10';

  //operador igual ===
  //en este ejemplo da false porque no convierte los valores
  //los compara tal cual son, por lo tanto son diferentes
  $res = $v1 === $v2;
  var_dump($res);
  ------------------------------
    //operadores de comparacion
    $v1 = '10';
    $v2 = '10';

    //operador diferente de !=
    //en este ejemplo da false porque no son valores diferentes
    //el operador compara que sean diferentes pero como son iguales regresa un false
    $res = $v1 != $v2;
    var_dump($res);
    ------------------------------
      //operadores de comparacion
      $v1 = 10;
      $v2 = '10';

      //operador diferente de !==
      //en este ejemplo da true porque son valores diferentes
      //el operador compara que sean diferentes en valores y tipos
      $res = $v1 !== $v2;
      var_dump($res);
?>
