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
  <body style="background-color: rgb(224, 235, 235);">
    <?php  require("header.php");  ?>


    <br><br><br><br>
      <div class="container">
        <div class=" row justify-content-around bg-white p-2">
          <div class="col-3">
            <img src="<?php echo $_GET["img"] ?>" alt="Imagen Producto">
          </div>
          <div class="col-6 row justify-content-between">
            <div class="col-12 p-2">
              <h2>Titulo del <?php echo $_GET["titulo"] ?></h2>
            </div>
            <div class="col-12">
              <h2><?php echo $_GET["precio"] ?></h2>
            </div>
            <div class="col-7 row">
              <h8 class="col-7">12 cuotas sin interes</h8>
              <div class="col-3">

              </div>
              <img class="col-3" src="img/tarjeta-mastercard.png" alt="">
              <img class="col-3" src="img/visa.png" alt="">
              <img class="col-3" src="img/amex.png" alt="">
            </div>

            <div class="col-12 row">
              <div class="col-8">

              </div>
              <div class="col-4 bg-primary text-center rounded p-2">
                <?php
                $ruta = $_GET['img'];
                $titulo = $_GET['titulo'];
                $precio = $_GET['precio'];
                echo "<a class='text-decoration-none text-white' href='carritoCompras.php?img=$ruta&precio=$precio&titulo=$titulo'>Agregar al carrito</a>";
                ?>
              </div>
            </div>


            </div>


        </div>
        <br><br><br><br>
        <div class="text-center bg-white">
          <h1>Descripccion</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>


      </div>
      <br><br><br><br><br><br><br><br><br><br>
    </div>




    <?php  require("footer.php");  ?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
