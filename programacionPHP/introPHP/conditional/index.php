<?php
  $color = 'white';
    if ($color == 'black') {
      echo 'color is black';
    }
    elseif ($color == 'white') {
      echo 'color is white';
    }
    else {
      echo 'color...';
    }
---------------------------
  $color2 = 'blue';
  switch ($color2) {
    case 'blue':
      echo 'color is blue';
      break;
    case 'red':
      echo 'color is red';
      break;

    default:
      echo 'color is not blue or red';
      break;
  }
?>
