<?php
  session_start();

//eliminar un valor de una sesion
  unset($_SESSION['count']);

//eliminar sesion y cerrarla por completo
  session_destroy();
?>
