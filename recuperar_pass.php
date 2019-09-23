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
          <br>
          <br>
          <br>
          <h1>Recuperar contraseña</h1>
          <form action="iniciarRecuperar.php" method="post">
            <hr>
            <div class="form-group">
              <input class="form-control" type="email" name="email" value="" placeholder="Ingresa tu mail">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="button">Cambiar contraseña</button>


          </form>
        </div>
      </div>
    </div>
    <!--finaliza formulario iniciar seción-->
  </body>
</html>
