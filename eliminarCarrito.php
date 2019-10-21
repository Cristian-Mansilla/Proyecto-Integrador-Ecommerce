<?php
session_start();


$ruta = $_GET["titulo"];


$i=0;
$bandera = "no";

foreach ($_SESSION["Carrito"] as $producto) {

  $bandera="primerFor";
  if(in_array($ruta, $producto)){
    $bandera = "si";
    unset($_SESSION["Carrito"][$i]);
    $_SESSION["Carrito"] = array_values($_SESSION["Carrito"]);
    break;
  }
  $i++;


}

header("location:carritoCompras.php?i=$i&ruta=$ruta&bandera=$bandera");
