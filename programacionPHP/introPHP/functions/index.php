<?php
//declaracion y creacion de la funcion
//los parametros van dentro de los parentesis y se declaran como variables
//pueden ser mas de un parametro
  function hello($name) {
    echo 'Hello' . $name;
  }
//ejecucion o llamada a la funcion
//el valor del parametro se da aqui dentro de la llamada.
  hello('Fabian');
---------------------
//la siguiente funcion usa return para retornar el valor de la funcion
//ese valor es asignado mas adelante dentro de la variable $c
//y asi poder hacer uso de ese valor de la funcion aun estando fuera de ella
  function sum($a, $b) {
    return = $a + $b;
  }
  $c = sum(1, 2);
  var_dump($c);
?>
