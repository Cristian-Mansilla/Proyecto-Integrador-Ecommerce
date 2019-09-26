<?php


$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);

$precios = "$ 200";
$productos[] = [
  "ruta" => "img/index/computadora.jpeg",
  "titulo" => "producto1",
  "precio" => $precios
];

$jsonFinal = json_encode($productos);
file_put_contents("productos.json", $jsonFinal);


 ?>
