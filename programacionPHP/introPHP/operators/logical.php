<?php
  $v1 = 1;
  $v2 = 1;

  $v3 = 2;
  $v4 = 3;

  $res1 = $v1 == $v2;
  echo 'result 1: <br>';
  var_dump($res1);
  echo '<br>';
  ---------------------
  $res2 = $v3 == $v4;
  echo 'result 2: <br>';
  var_dump($res2);
  echo '<br>';
  ---------------------
  $res3 = $res1 && $res2;
  echo 'result 3: <br>';
  var_dump($res3);
  echo '<br>';
  ---------------------
  $res4 = $res1 || $res2;
  echo 'result 4: <br>';
  var_dump($res4);

?>
