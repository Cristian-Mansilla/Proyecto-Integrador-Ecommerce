<?php if(isset($_COOKIE["ultimaVisita"])){
  setcookie("ultimaVisita", "", time () -1);
  setcookie("ultimaVisita", $_GET["categoria"], time() + (86400 * 30));

}else{
  setcookie("ultimaVisita", $_GET["categoria"], time() + (86400 * 30));
} ?>
<?php $cates = [
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
