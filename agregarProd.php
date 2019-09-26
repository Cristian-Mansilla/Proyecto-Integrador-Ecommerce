<?php


$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);


$productos[] = [
  "ruta" => "img/index/computadora.jpeg"
];

$jsonFinal = json_encode($productos);
file_put_contents("productos.json", $jsonFinal);


 ?>
