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













<style media="screen">
.main{width: 100%;}
/*General Menu Styling*/
.mNav{margin: 0 auto}
li{list-style: none;}
li a{text-decoration: none;}
.dDown{position: absolute;; width: 150px;top: 41px; opacity: 0;visibility: hidden;transition: ease-out .35s;-moz-transition: ease-out .35s;-webkit-transition: ease-out .35s;}
.mNav li{float: left;padding: 5px;background: rgb(52, 152, 219);border-left: 1px dotted #fff;}
.mNav li:first-child{border: none;}
.mNav li a{ display: block;padding: 2px 20px;color: #fff;font-family: arial; text-decoration: none;}
.mNav li:hover{background: #fff;transition: ease-in .35s;-moz-transition: ease-in .35s;-webkit-transition: ease-in .35s;}
.mNav li:hover a{color: rgb(52, 152, 219);transition: ease-in .35s;-moz-transition: ease-in .35s;-webkit-transition: ease-in .35s;}
/*First Level*/
.subs {left: -45px;position: relative;top: 0px;width: 175px;border-left: none !important; border-bottom: 1px dotted #fff !important;}
.subs:last-child{border: none !important;}
.hassubs:hover .dDown,.hassubs .hassubs:hover .dDown{opacity: 1;visibility: visible; transition: ease-in .35s;-moz-transition: ease-in .35s;-webkit-transition: ease-in .35s;}
.mNav li:hover ul a,.mNav li:hover ul li ul li a{color: white; text-decoration: none;}
.mNav li ul li:hover,.mNav li ul li ul li:hover{background: #fff;transition: ease-in-out .35s;-moz-transition: ease-in-out .35s;-webkit-transition: ease-in-out .35s;}
.mNav li ul li:hover a,.mNav li ul li ul li:hover a{color: rgb(52, 152, 219);transition: ease-in-out .35s;-moz-transition: ease-in-out .35s;-webkit-transition: ease-in-out .35s;}
/*Second Level*/
.hassubs .hassubs .dDown .subs{left: 25px;position: relative;width: 165px;top: 0px;}
.hassubs .hassubs .dDown{position: absolute;width: 150px;left: 120px;top: 0px;opacity: 0;visibility: hidden;transition: ease-out .35s;-moz-transition: ease-out .35s;-webkit-transition: ease-out .35s;}
</style>
<div class="main ml-5">
            <ul class="mNav">
              <li class="hassubs"><a href="#">Categorias</a>
                    <ul class="dDown" style="z-index:900;">
              <?php
              foreach ($cates as $cate) {
                $nombrecat = $cate["nombre"];
                $rutacat = $cate["ruta"];
                echo "<li class='subs hassubs''><a href='categorias.php?categoria=$rutacat'>$nombrecat</a>
                    <ul class='dDown'>";
                $subcats = $cate["subCategorias"];

                foreach ($subcats as $subcat) {
                  $rutasubcat = $subcat["ruta"];
                  $nombresubcat = $subcat["nombre"];
                  echo "<li class='subs'><a href='categorias.php?categoria=$rutasubcat'>$nombresubcat</a></li>";
                }
                echo "</ul>
            </li>";
              }

               ?>
              </ul>
                </li>
                <li><a href="canjearCupon.php">Canjear cupon</a></li>
                <li><a href="categorias.php?categoria=oferta">Ofertas</a></li>
                <li><a href="qSomos.php">¿Quienes somos?</a></li>
                <li><a href="ayuda.php">Ayuda</a></li>

                <li><a href="#top"><ion-icon name="notifications"></ion-icon></a></li>
                <li><a href="carritoCompras.php"><ion-icon name="cart"></ion-icon></a></li>
            </ul>
            <br style="clear: both;">
        </div>
