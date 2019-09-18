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
  </head>
  <body id="index">
    <?php require("header.php") ?>
    <!-- Contenido Principal -->
    <div class="container-fluid p-0  h-50 backg-grey">
      <!-- Carousel -->
      <div id="carouselExampleIndicators" class="carousel slide col-12 p-0" data-ride="carousel" data-delay="none">
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
      </div>
      <div class="container-fluid">
        <!-- Bannerts Tarjetas -->
        <div class="container justify-content-between d-flex p-2">
          <img src="img/index/banner_tarjeta1.png" height="100" width="500" alt="Banert Tarjetas 1" class="col-lg-6 col-md-12">
          <img src="img/index/banner_tarjeta1.png" height="100" width="500" alt="Baner Tarjetas 2" class="col-lg-6 d-lg-block d-sm-none d-md-none d-none ">
        </div>
        <!-- Mas Vendidos -->
        <h2 class="text-center color-lightBlue"></h2>
        <div class="container justify-content-center">
          <h2 class="col-12 border-bottom border-secondary">Lo mas vendido</h2>
          <div class="row col-12  justify-content-between" >
            <a href="#" class="zoom col-lg-3 col-md-6 col-sm-6 mt-md-2">
              <div class="" id="imagen">
                <div class="" id="info">
                  <p id="headline">$300</p>
                </div>
              </div>
            </a>
            <a href="#top" class="col-lg-3 col-md-6 mt-md-6 col-sm-6"><img src="img/index/celular.jpeg" class=" rounded-circle"  alt="Producto1"></a>
            <a href="#top" class="col-lg-3 col-md-6 mt-md-6 col-sm-6"><img src="img/index/televisor.jpeg" class="  rounded-circle" alt="Producto2"></a>
            <a href="#top" class="col-lg-3 col-md-6 mt-md-6 col-sm-6"><img src="img/index/computadora.jpeg" class=" rounded-circle" alt="Producto3"></a>

          </div>
          <br><br><br>
          <!-- CATEGORIAS MAS BUSCADAS -->
          <div class="">
            <h2 class="text-center">CATEGORIAS MAS BUSCADAS</h2>
            <br><br>
          <div class="row justify-content-between p-sm-5 p-lg-0 ">
            <a href="#" class="col-lg-2 col-md-5 sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2  pl-sm-5 m-sm-2  bg-dark"><ion-icon name="laptop"></ion-icon></a>
            <a href="#" class="col-lg-2 col-md-5 sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="phone-portrait"></ion-icon></a>
            <a href="#" class="col-lg-2 col-md-5 sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="home"></ion-icon></a>
            <a href="#" class="col-lg-2 col-md-5 sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="football"></ion-icon></a>
          </div>
          <div class="back-black">
            <div class="row justify-content-between p-sm-5 p-lg-0">
              <a href="#" class="col-lg-2 col-md-5  sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="bed"></ion-icon></a>
              <a href="#" class="col-lg-2 col-md-5  sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="bicycle"></ion-icon></a>
              <a href="#" class="col-lg-2 col-md-5  sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="car"></ion-icon></a>
              <a href="#" class="col-lg-2 col-md-5  sizezing aling-item-center justify-content-center text-white backg-categorias rounded pr-lg-5 pl-lg-2 pl-sm-5 m-sm-2  bg-dark"><ion-icon name="construct"></ion-icon></a>
            </div>
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
        <div class="container text-center p-2 justify-content-between">
          <img src="img/index/oferta1.jpeg" alt="Producto oferta 1" class="col-lg-4 col-md-4 col-12  rounded-circle"  height="200" width="200">
          <img src="img/index/oferta2.jpeg" alt="Producto oferta 2" class="col-lg-4 col-md-4 col-12 rounded-circle"  height="200" width="200">
          <img src="img/index/oferta3.jpeg" alt="Producto oferta 3" class="col-lg-4 col-md-4 col-12 rounded-circle"  height="200" width="200">
        </div>
        <!-- Bannert mas productos -->
        <br>
        <br>
        <br>

        <div class="container">
          <h2 class="col-12 border-bottom border-secondary">Puede Interesarte</h2>
          <div class="col-12" id="banner-productos">
          </div>
        </div>
        <div class="col-12 row d-sm-none d-lg-block d-none ">
          <h2 class="col-md-9 col-lg-10"></h2>
          <a class="col-md-2 col-lg-1  backg-header rounded text-white" id="boton-productos" href="#">Mas productos</a>
        </div>
      </div>
    </div>
    <div class="container-fluid d-flex justify-content-center backg-grey">
      <div class="container d-flex justify-content-center">
        <a class="col-1 col-sm-2 backg-header rounded text-center text-white" href="#top">Inicio</a>
      </div>
    </div>
    <footer class="container-fluid justify-content-between row backg-footer">
      <div class="col-lg-3 col-md-5">
        <h3 class="col-12 text-white">Comprar y vender</h3>
        <ul class="list-unstyled">
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Registro</a> </li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Marcas</a> </li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Como comprar y vender</a> </li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Productos populares</a> </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-5">
        <h3 class="text-white col-12">Metodos de pago</h3>
        <ul class="list-unstyled ">
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Metodos de pago</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Cupones especiales</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Promociones con tarjetas</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-5 backg-footer">
        <h3 class="text-white col-12">Mas sobre nosotros</h3>
        <ul class="list-unstyled">
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Acerca de nosotros</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Desarrolladores</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Politicas y reglas</a></li>

        </ul>
      </div>
      <div class="col-lg-3 col-md-5 backg-footer">
        <h3 class="text-white col-12">Ayuda</h3>
        <ul class="list-unstyled">
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Atencion al cliente</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Gestionar compras</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Contacto</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Reportar Problema</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Medios de pago</a></li>
          <li class="ml-3"><a class="text-white text-decoration-none" href="#">Ayuda</a></li>

        </ul>
      </div>

    </footer>






    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
