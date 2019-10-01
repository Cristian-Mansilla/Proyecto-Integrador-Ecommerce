<?php


$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);

$precios = "$" . rand(100,200);
$categorias = ["Hogar", "iluminacionHogar"];
$i2 = 0;
for ($i=0; $i < 4; $i++) {
  $i2++;
  $productos[] = [
    "ruta" => "imgProd/iluminacionHogar/luz" . $i . ".jpeg",
    "titulo" => "producto" . $i2,
    "precio" => $precios,
    "categorias" => $categorias
  ];
}


$jsonFinal = json_encode($productos);
file_put_contents("productos.json", $jsonFinal);


 ?>
