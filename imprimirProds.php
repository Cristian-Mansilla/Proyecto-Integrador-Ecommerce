<?php

$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);






foreach ($productos as $producto) {
  $ruta = $producto["ruta"];
  $titulo = $producto["titulo"];
  $precio = $producto["precio"];


  echo "<a href='#top' class='text-decoration-none'><div class='card' style='width: 18rem;'>
          <img src='$ruta' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>$titulo</h5>
            <p class='card-text'>$precio</p>
          </div>
      </div></a>";

  // echo "<a href='#top' class='col-lg-3 col-md-6 mt-md-6 col-sm-6 col-12'><img src='$ruta' class=' rounded-circle'></a>";



} ?>
