<?php if(isset($_COOKIE["ultimaVisita"])){
  setcookie("ultimaVisita", "", time () -1);
  setcookie("ultimaVisita", $_GET["categoria"], time() + (86400 * 30));

}else{
  setcookie("ultimaVisita", $_GET["categoria"], time() + (86400 * 30));
} ?>
<?php $cates = [
"0" => [
              "ruta" => "electronicaAudioYVideo",
              "nombre" => "Electrónica, Audio y Video ",
              "subCategorias" => [
                "TV" => ["nombre" => "TV", "ruta" => "1"],
                "Audio" => ["nombre" => "Audio", "ruta" => "audio"],
                "Cables" =>["nombre" => "Cables", "ruta" => "cables"]]
                            ],
"1" => [
              "ruta" => "celularesTelefonos",
              "nombre" => "Celulares y Teléfonos",
              "subCategorias" => [
                "AccesoriosCelulares" => ["nombre" => "Accesorios Para Celulares", "ruta" => "acceCelulares"],
                "Celulares" => ["nombre" => "Celulares", "ruta" => "2"],
                ]
                        ],
"3" => [
              "ruta" => "computacion",
              "nombre" => "Computacíon",
              "subCategorias" => [
                "Alamacenamiento" => ["nombre" => "Almacenamiento", "ruta" => "almacenamiento"],
                "ComponentesDePC" => ["nombre" => "Componentes De PC", "ruta" => "componentesPC"],
                "Laptops" => ["nombre" => "Notebooks", "ruta" => "computadoras"],
                "Monitores" => ["nombre" => "Monitores", "ruta" => "monitores"],
                "Mouses" => ["nombre" => "Mouses", "ruta" => "mouses"]]
                 ],
"4" => [
              "ruta" => "hogar",
              "nombre" => "Hogar",
              "subCategorias" => [
                "BazarYCocina" => ["nombre" => "Bazar y Cocina", "ruta" => "BazarYCocina"],
                "ColchonesYSommiers" => ["nombre" => "Colchones y Sommiers", "ruta" => "colchonesSommiers"],
                "IluminacionParaHogar" => ["nombre" => "Iluminacion para el hogar", "ruta" => "iluminacionHogar"]]
           ],
"5" => [
              "ruta" => "consolasYJuegos",
              "nombre"=> "Consolas y Juegos",
              "subCategorias" => [
                "Consolas" => ["nombre" => "Consolas", "ruta" => "consolas"],
                "Videojuegos" => ["nombre" => "Videojuegos", "ruta" => "videojuegos"]]
                     ],
"6" => [
              "ruta" => "deporteYFitness",
              "nombre" => "Deporte y Fitness",
              "subCategorias" => [
                "Boxeo" => ["nombre" => "Boxeo", "ruta" => "boxeo"],
                "Basquet" => ["nombre" => "Basquet", "ruta" => "basquet"],
                "Futbol" => ["nombre" => "Futbol", "ruta" => "futbol"],
                "Golf" => ["nombre" => "Golf", "ruta" => "golf"],
                "Tennis" => ["nombre" => "Tennis", "ruta" => "tennis"]]
                     ],
"7" => [
              "ruta" => "herramientasYConstruccion",
              "nombre" => "Herramientas y Construcción",
              "subCategorias" => [
                "Aberturas" => ["nombre" => "Aberturas", "ruta" => "aberturas"],
                "Electricidad" => ["nombre" => "Electricidad", "ruta" => "electricidad"],
                "Herramientas" => ["nombre" => "Herramientas", "ruta" => "herramientas"],
                "Pintureria" => ["nombre" => "Pintureria", "ruta" => "pintureria"]]
                               ]
              ]; ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <style>
* {
  box-sizing: border-box;
}

.zoom {
  transition: transform .3s;
}

.zoom:hover {
  z-index: 999;
  transform: scale(1.1);
}
li a{
  color:grey;
  text-decoration:none;
  }
li a:hover{
  color:black;
  text-decoration:none;
}
</style>
  </head>
  <body style="background-color: rgb(224, 235, 235);">
    <?php require("header.php"); ?>




<br><br><br>



    <div class="container-fluid">
      <div class="container justify-content-between d-flex">
        <div class="col-3 bg-white">
                    <ul class="" >
                      <?php
                      foreach ($cates as $cate) {
                        $nombrecat = $cate["nombre"];
                        $rutacat = $cate["ruta"];
                        echo "<li><a href='categorias.php?categoria=$rutacat'>$nombrecat</a>
                            <ul class=''>";
                        $subcats = $cate["subCategorias"];

                        foreach ($subcats as $subcat) {
                          $rutasubcat = $subcat["ruta"];
                          $nombresubcat = $subcat["nombre"];
                          echo "<li class=''><a href='categorias.php?categoria=$rutasubcat'>$nombresubcat</a></li>";
                        }
                        echo "</ul>
                    </li>";
                      }
                       ?>
                      </ul>


          </div>

            <div class='bg-white col-9 row'>
              <?php
              require_once("./imprimirProds.php");
              $productos = traerProductosPorCategorias($cate, $dbh);
              imprimirPorCategorias($productos, $cate); ?>
            </div>


      </div>

  </div>





    <br><br><br><br><br><br><br><br><br><br><br>
    <?php require("footer.php"); ?>



    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
