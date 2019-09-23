<?php
  require_once("./validarLogin.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce | Iniciar Sesión</title>
    <link rel="shortcut icon" href="img/login.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body class="bg-login">
    <!--inicia formulario iniciar seción-->
    <div class="container">
      <div class="row justify-content-md-center margin-top">
        <div class="col-12 col-md-8 col-lg-6 p-4 bg-blue box-shadow position-relative">
          <img class="logo-user box-shadow" src="img/user.jpg" alt="">
          <form action="login.php" method="post">
            <h1>Iniciar Sesión</h1>
            <hr>
            <div class="form-group">
              <input class="form-control" type="text" name="username" value="" placeholder="Usuario">
              <?php if (!empty($errores["errorUsername"])): ?>
                <div class="error">
                  <ion-icon name="close-circle-outline"></ion-icon>
                  <?=$errores["errorUsername"] ?>
                </div>
              <?php else: ?>
                <?php if (isset($errores)): ?>
                  <div class="ok">
                    <ion-icon name="checkmark"></ion-icon>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" value="" placeholder="Contraseña">
              <?php if (!empty($errores["errorPassword"])): ?>
                <div class="error">
                  <ion-icon name="close-circle-outline"></ion-icon>
                  <?=$errores["errorPassword"] ?>
                </div>
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="button">Iniciar Sesión</button>
            <div class="form-group form-check">
              <input id="checkRecordar" class="form-check-input" type="checkbox" name="recordarme" value="">
              <label for="checkRecordar" class="form-check-label">Recordarme</label>
            </div>
            <p>¿No tienes una cuenta?<a href="registro.php">Registrarme ahora</a></p>
            <p>¿Olvidaste tu contraseña?<a href="recuperar_pass.php">Recuperar contraseña</a></p>
          </form>
        </div>
      </div>
    </div>
    <!--finaliza formulario iniciar seción-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
