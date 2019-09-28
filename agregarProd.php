<?php


$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);

$precios = "$" . rand(100,200);
$categorias = ["tecnologia", "computadoras"];
$i2 = 22;
for ($i=0; $i < 10; $i++) {
  $i2++;
  $productos[] = [
    "ruta" => "imgProd/computadora" . $i . ".jpeg",
    "titulo" => "producto" . $i2,
    "precio" => $precios,
    "categorias" => $categorias
  ];
}


$jsonFinal = json_encode($productos);
file_put_contents("productos.json", $jsonFinal);


 ?>
