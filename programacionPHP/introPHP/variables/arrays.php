<?php
  //php asigna por defecto el primer valor al indice 0, el segundo valor al indice 1 etc
  $arrayVar = ['red', 'blue', 'black'];

  //asignando valores a variables dentro de un array
  $arrayVar = [
    'colorRojo' => 'red',
    'colorAzul' => 'blue',
    'colorNegro' => 'black'
  ];

  //imprime toda la cadena
  var_dump($arrayVar);
  //imprime solo el elemento requerido, en este ejemplo 'black'
  var_dump($arrayVar['colorNegro']);
?>
