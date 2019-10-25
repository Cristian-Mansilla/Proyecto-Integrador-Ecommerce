<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
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

  transition: transform .4s;
}

.zoom:hover {
  z-index: 999;
  transform: scale(1.1);
}
.sombra:hover{
  box-shadow: 2px 2px 10px #666;
}
</style>

  </head>
  <body id="index">
    <?php require("header.php") ?>
    <!-- Contenido Principal -->
    <div class="container-fluid p-0  h-50 backg-grey">
      <!-- Carousel -->
      <!-- <div id="carouselExampleIndicators" class="carousel slide col-12 p-0" data-ride="carousel" data-delay="none">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" id="caroussel1">

          </div>
          <div class="carousel-item" id="caroussel2">

          </div>
          <div class="carousel-item" id="caroussel3">

          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->
      <div class="container-fluid">
        <!-- Bannerts Tarjetas -->
        <div class="container justify-content-between d-flex p-2">
          <img src="img/index/banner_tarjeta1.png" height="100" width="500" alt="Banert Tarjetas 1" class="col-lg-6 col-md-12">
          <img src="img/index/banner_tarjeta1.png" height="100" width="500" alt="Baner Tarjetas 2" class="col-lg-6 d-lg-block d-sm-none d-md-none d-none ">
        </div>
        <!-- Mas Vendidos -->
        <br><br><br><br><br>
        <div class="container justify-content-center">
          <h2 class="col-12 border-bottom border-secondary">Lo mas vendido</h2>
          <!-- <div class="row col-12  justify-content-center justify-content-lg-between text-center" > -->

            <?php
            require_once("./caroussel.php");
            require("imprimirProds.php");
            // imprimirPorCantidad("oferta", 3, $productos)?>

          <!-- </div> -->
          <br><br><br>
            <h2 class="col-12 border-bottom border-secondary">Segun tu ultima visita</h2>
            <div class="row col-12 justify-content-sm-center justify-content-lg-between text-center" >
            <?php
            $cate = $_COOKIE["ultimaVisita"];
            imprimirPorCantidad($cate, 3, $productos)?>
          </div>
          <br><br><br><br><br><br><br><br><br>
          <!-- CATEGORIAS MAS BUSCADAS -->
          <div class="row justify-content-center">
            <h2 class="text-center col-12">CATEGORIAS MAS BUSCADAS</h2>
            <br><br>

            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=computadoras"><img  src="img/index/categorias/Laptop.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Notebooks</p>
              </div></a>
            </div>
            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias" >
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=celulares"><img  src="img/index/categorias/Phone.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Celulares</p>
              </div></a>
            </div>
            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=videojuegos"><img  src="img/index/categorias/Juegos.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Videojuegos</p>
              </div></a>
            </div>
            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=herramientas"><img  src="img/index/categorias/Tools.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Herramientas</p>
              </div></a>
            </div>

            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=hogar"><img  src="img/index/categorias/House.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Hogar</p>
              </div></a>
            </div>
            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=autos"><img  src="img/index/categorias/Car.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Autos</p>
              </div></a>
            </div>
            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=colchonesSommiers"><img  src="img/index/categorias/Bed.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Colchones y Sommiers</p>
              </div></a>
            </div>
            <div class="zoom card p-lg-4 p-5  col-lg-2 col-md-5 col-sm-6 backg-categorias">
              <a class="text-decoration-none text-dark" href="categorias.php?categoria=televisor"><img  src="img/index/categorias/TV.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center ">Televisores</p>
              </div></a>
            </div>

        </div>

          <br><br><br>
      <!-- Bannerts ofertas esclusibas -->
        <div class="container p-2">
          <img src="img/index/ofertas.png"   class="h-lg-200 h-md-100 col-12 text-center rounded-pill" alt="Bannert Ofertas">
        </div>
        <br>
        <br>
        <br>
        <!-- Productos en ofertas -->

        <!-- Bannert mas productos -->
        <br>
        <br>
        <br>

        <div class="container">
          <h2 class="col-12 border-bottom border-secondary">Puede Interesarte</h2>
          <div class="col-12" id="banner-productos">
          </div>
        </div>
        <div class="col-12 row">
          <a class="col-md-2 col-lg-1 col-4 backg-header rounded text-white boton-prod" href="#">Mas productos</a>
        </div>
      </div>
    </div>
    <div class="container-fluid d-flex justify-content-center backg-grey">
      <div class="container d-flex justify-content-center">
        <a class="col-3 col-sm-2 col-lg-1 col-md-1 backg-header rounded text-center text-white" href="#top">Inicio</a>
      </div>
    </div>
    <?php require("footer.php") ?>






    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
