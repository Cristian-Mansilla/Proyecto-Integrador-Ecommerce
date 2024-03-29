<?php
if(!isset($_SESSION)){
  session_start();
  if(!isset($_SESSION["Carrito"])){
    $_SESSION["Carrito"] = array();
  }
}
if(isset($_GET["titulo"])){
  $arrayCarrito = [
    "titulo" => $_GET["titulo"],
    "precio" => $_GET["precio"],
    "ruta" => $_GET["img"]
  ];
  array_push($_SESSION["Carrito"], $arrayCarrito);
}

// echo "<pre>";
// print_r($_SESSION["Carrito"]);
// echo "</pre>";
$arrayCompras = $_SESSION["Carrito"];
?>
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
    <?php  require("header.php");
    if(isset($arrayCompras)){

      if(!empty($arrayCompras)){


        foreach ($arrayCompras as $carrito) {
          $ruta = $carrito['ruta'];
          $titulo = $carrito['titulo'];
          $precio = $carrito['precio'];
          echo "<br>
          <div class='container'>
            <div class=' row justify-content-around bg-white p-2'>
              <div class='col-3'>
                <img src='$ruta' alt='Imagen Producto' height='100'>
              </div>
              <div class='col-8 row justify-content-between'>
                <div class='col-8 p-4'>
                  <h2>Titulo del $titulo</h2>
                </div>
                <div class='col-3 row'>
                  <div class='col-12 '>
                    <h4>$precio</h4>
                  </div>

                    <div class='col-12'>
                      <a class='bg-primary text-white rounded p-2' href='eliminarCarrito.php?titulo=$titulo'>Eliminar</a>
                    </div>
                  </div>
                </div>
            </div>

          </div>
        </div>";
      }
      }else{
        echo "<h2 class='text-center'>No tiene productos en su carrito</h2>";
      }


    }else{
      echo "<h2 class='text-center'>No tiene productos en su carrito</h2>";
    }

    ?>


      <br><br><br><br><br><br><br><br><br><br>





    <?php  require("footer.php");  ?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
