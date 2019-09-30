<?php $cates = [
"0" => [
              "ruta" => "electronicaAudioYVideo",
              "nombre" => "Electrónica, Audio y Video ",
              "subCategorias" => [
                "TV" => ["nombre" => "TV", "ruta" => "televisores"],
                "ComponentesElectronicos" => ["nombre" => "Componentes Electronicos", "ruta" => "componentesElectronicos"],
                "Audio" => ["nombre" => "Audio", "ruta" => "audio"],
                "Cables" =>["nombre" => "Cables", "ruta" => "cables"]]
                            ],
"1" => [
              "ruta" => "celularesTelefonos",
              "nombre" => "Celulares y Teléfonos",
              "subCategorias" => [
                "AccesoriosCelulares" => ["nombre" => "Accesorios Para Celulares", "ruta" => "acceCelulares"],
                "Celulares" => ["nombre" => "Celulares", "ruta" => "celulares"],
                "Otros" => ["nombre" => "Otros", "ruta" => "otros"]]
                        ],
"3" => [
              "ruta" => "computacion",
              "nombre" => "Computacíon",
              "subCategorias" => [
                "Alamacenamiento" => ["nombre" => "Almacenamiento", "ruta" => "almacenamiento"],
                "USB" => ["nombre" => "USB", "ruta" => "usb"],
                "ComponentesDePC" => ["nombre" => "Componentes De PC", "ruta" => "componentesPC"],
                "Laptops" => ["nombre" => "Notebooks", "ruta" => "notebooks"],
                "Monitores" => ["nombre" => "Monitores", "ruta" => "monitores"],
                "Mouses" => ["nombre" => "Mouses", "ruta" => "mouses"]]
                 ],
"4" => [
              "ruta" => "hogar",
              "nombre" => "Hogar",
              "subCategorias" => [
                "AdornosYDecoracion" => ["nombre" => "Adornos y Decoracion", "ruta" => "adornosDeco"],
                "BazarYCocina" => ["nombre" => "Bazar y Cocina", "ruta" => "bazarCocina"],
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
                echo "<li class='subs hassubs''><a href='#'>$nombrecat</a>
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
                <li><a href="#">Canjear cupon</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">¿Quienes somos?</a></li>
                <li><a href="#">Ayuda</a></li>

                <li><a href="#top"><ion-icon name="notifications"></ion-icon></a></li>
                <li><a href="#top"><ion-icon name="cart"></ion-icon></a></li>
            </ul>
            <br style="clear: both;">
        </div>
