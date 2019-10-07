<?php

  if ($_SESSION) {
    $nombreUsuario = $_SESSION["usuario"];
    $nombrePropio = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $correo = $_SESSION["email"];
  }

?>
