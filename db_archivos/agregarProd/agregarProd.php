<?php
$user = "root";
$password = "04232905";
$dbname = "db_4Buy";
try {
$dsn = "mysql:host=localhost;dbname=$dbname";
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
echo $e->getMessage();
}


require_once("../funciones/funcionesSelect.php");
$cates = [
"0" => [
              "ruta" => "1",
              "nombre" => "Electrónica, Audio y Video ",
              "subCategorias" => [
                "TV" => ["nombre" => "TV", "ruta" => "8"],
                "Audio" => ["nombre" => "Audio", "ruta" => "9"],
                "Cables" =>["nombre" => "Cables", "ruta" => "10"]]
                            ],
"1" => [
              "ruta" => "2",
              "nombre" => "Celulares y Teléfonos",
              "subCategorias" => [
                "AccesoriosCelulares" => ["nombre" => "Accesorios Para Celulares", "ruta" => "11"],
                "Celulares" => ["nombre" => "Celulares", "ruta" => "12"],
                ]
                        ],
"3" => [
              "ruta" => "3",
              "nombre" => "Computacíon",
              "subCategorias" => [
                "Alamacenamiento" => ["nombre" => "Almacenamiento", "ruta" => "13"],
                "ComponentesDePC" => ["nombre" => "Componentes De PC", "ruta" => "14"],
                "Laptops" => ["nombre" => "Notebooks", "ruta" => "15"],
                "Monitores" => ["nombre" => "Monitores", "ruta" => "16"],
                "Mouses" => ["nombre" => "Mouses", "ruta" => "17"]]
                 ],
"4" => [
              "ruta" => "4",
              "nombre" => "Hogar",
              "subCategorias" => [
                "BazarYCocina" => ["nombre" => "Bazar y Cocina", "ruta" => "18"],
                "ColchonesYSommiers" => ["nombre" => "Colchones y Sommiers", "ruta" => "19"],
                "IluminacionParaHogar" => ["nombre" => "Iluminacion para el hogar", "ruta" => "20"]]
           ],
"5" => [
              "ruta" => "5",
              "nombre"=> "Consolas y Juegos",
              "subCategorias" => [
                "Consolas" => ["nombre" => "Consolas", "ruta" => "21"],
                "Videojuegos" => ["nombre" => "Videojuegos", "ruta" => "22"]]
                     ],
"6" => [
              "ruta" => "6",
              "nombre" => "Deporte y Fitness",
              "subCategorias" => [
                "Boxeo" => ["nombre" => "Boxeo", "ruta" => "23"],
                "Basquet" => ["nombre" => "Basquet", "ruta" => "24"],
                "Futbol" => ["nombre" => "Futbol", "ruta" => "25"],
                "Golf" => ["nombre" => "Golf", "ruta" => "26"],
                "Tennis" => ["nombre" => "Tennis", "ruta" => "27"]]
                     ],
"7" => [
              "ruta" => "7",
              "nombre" => "Herramientas y Construcción",
              "subCategorias" => [
                "Aberturas" => ["nombre" => "Aberturas", "ruta" => "28"],
                "Electricidad" => ["nombre" => "Electricidad", "ruta" => "29"],
                "Herramientas" => ["nombre" => "Herramientas", "ruta" => "30"],
                "Pintureria" => ["nombre" => "Pintureria", "ruta" => "31"]]
                               ]
              ]; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="agregarProdDB.php" method="post" enctype="multipart/form-data">

    Titulo <input type="text" name="titulo" value="">
    <br>
    <br>
    Precio <input type="number" name="precio" value="">
    <br>
    <br>
    Stock <input type="number" name="stock" value="">
    <br>
    <br>
    Imagen <input type="file" name="img">
    <br>
    <br>
    Categorias <select class="" name="categoria">
                <option selected value="0"> Elige una opción </option>
                <?php
                foreach ($cates as $cate) {
                  $nombrecat = $cate["nombre"];
                  $rutacat = $cate["ruta"];
                  echo "<optgroup label='$nombrecat'>";

                  $subcats = $cate["subCategorias"];

                  foreach ($subcats as $subcat) {
                    $rutasubcat = $subcat['ruta'];
                    $nombresubcat = $subcat['nombre'];
                    echo "<option value='$rutasubcat'>$nombresubcat</option>";
                  }
                  echo "</optgroup>";
                }
                 ?>
               </select>
              <br>
              <br>
    Marcas <select name="marca">
              <option selected value="0"> Elige una opción </option>
              <?php
              $marcas=traerMarcas($dbh);
              foreach ($marcas as $marca) {
                $id = $marca["id"];
                $nombre = $marca["marca"];
                echo "<option value='$id'>$nombre</option>";
              }

               ?>



            </select>
            <br><br>
            <input type="submit" value="Upload Product" name="submit">
    </form>
  </body>
</html>
