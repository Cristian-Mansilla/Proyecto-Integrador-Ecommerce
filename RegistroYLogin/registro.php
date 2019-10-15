<?php
  require_once ("validarRegistro.php");

  $usuario = "";
  $nombre = "";
  $apellido = "";
  $email = "";
  $contrasena = "";

//persistencia
  if($_POST){
    $usuario = $_POST["username"];
    $nombre = $_POST["name"];
    $apellido = $_POST["lastname"];
    $email = $_POST["email"];

  }

  if($_POST) {

    $errores = validarRegistro();

      

    if (empty($errores)) {
      // llamo al archivo json usuarios
      require_once("validarImgRegistro.php");
      $datos = file_get_contents("usuarios.json");
      $usuarios = json_decode($datos, true);
      // determino los valores de los post del formulario
      $usuario = $_POST["username"];
      $nombre = $_POST["name"];
      $apellido = $_POST["lastname"];
      $email = $_POST["email"];
      $imgPerfil = "imgPerfiles/" . $_POST["email"] . "/perfil." . $path;
      $contrasena = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $usuarios[] = [
        "usuario" => $usuario,
        "apellido" => $apellido,
        "nombre" => $nombre,
        "email" => $email,
        "contrasena" => $contrasena,
        "imgPerfil" => $imgPerfil
      ];
      // vuelvo a codificar y enviar los datos al archivo json
      $jsonFinal = json_encode($usuarios);
      file_put_contents("usuarios.json", $jsonFinal);
      // Envio al index si el registro esta completado
      header("location:index.php");
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
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body class="body-register">
    <div class="container">
      <div class="row justify-content-md-center margin-top">
      <div class="col-12 col-md-6 col-lg-8 box-register position-relative">
        <form action="registro.php" enctype="multipart/form-data" method="post">
          <?php if (!empty($errores)): ?>
            <ul>
              <?php foreach ($errores as $error): ?>
                <li><?=$error?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <div class="form-group">
            <input class="form-control" type="text" name="username" value="<?= $usuario ?>" placeholder="Usuario">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="<?= $nombre ?>" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="lastname" value="<?= $apellido ?>" placeholder="Apellido">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" value=" <?= $email ?>" placeholder="Correo electrónico">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" value="" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <input class="form-control" type="file" name="imgPerfil" value="">
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
