<?php

$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);






foreach ($productos as $producto) {
  $ruta = $producto["ruta"];
  echo "<a href='#top' class='col-lg-3 col-md-6 mt-md-6 col-sm-6 col-12'><img src='$ruta' class=' rounded-circle'></a>";



} ?>
