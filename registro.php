<?php
  require_once ("validarRegistro.php");

  if($_POST) {

    $errores = validarRegistro();

    if (empty($errores)) {
      header("location: agregar.php"); exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce | Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body class="body-register">
    <div class="container">
      <div class="row justify-content-md-center margin-top">
      <div class="col-12 col-md-6 col-lg-8 box-register position-relative">
        <form action="registro.php" method="post">
          <?php if (!empty($errores)): ?>
            <ul>
              <?php foreach ($errores as $error): ?>
                <li><?=$error?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <div class="form-group">
            <input class="form-control" type="text" name="username" value="" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="lastname" value="" placeholder="Apellido">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" value="" placeholder="Correo electrónico">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" value="" placeholder="Contraseña">
          </div>
          <button type="submit" class="btn btn-primary" name="enviar" value="Enviar">Crear cuenta</button>
        </form>
            <h1>Completá tus datos</h1>
            <div class="form-group form-check">
            <br>
            <p>Al completar este registro declara ser mayor de 18 años y acepta nuestros <a href="#">términos y cóndiciones</a></p>
            <br>
            <p>¿Ya tienes una cuenta? <a href="login.html">Iniciá sesión</a></p>
            </div>


      </div>
    </div>
</div>
  </body>
