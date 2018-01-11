<?php
  for ($i=0; $i <= 10; $i++) {
    echo $i . '<br>';
  }
-----------------------
  $i = 1;
  while ($i <= 10) {
    echo $i . '<br>';
    $i++;
  }
-----------------------
  $i = 1;
  do {
    echo $i . '<br>';
    $i++;
  } while ($i <= 10);
----------------------
//$key hace referencia al indice de cada valor
//empezando en el indicador 0
//0 fabian
$names = ['fabian', 'jared', 'juan'];
foreach ($names as $key => $name) {
  echo $key . $name . '<br>';
}
?>
