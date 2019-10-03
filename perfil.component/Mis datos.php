<?php require_once("datosUsuarioLogeado.php"); ?>
<div class="border-left mt-4 px-4">
  <h1>Mis Datos</h1>
  <form class="" action="" method="post">
    <div class="form-group">
      <h2>Datos de cuenta</h2>
      <input class="form-control border-br" type="text" name="username" value="<?=$nombreUsuario?>" placeholder="Usuario">
      <button class="btn btn-secondary btn-block" type="button" name="changePassword">Cambiar contraseña</button>
    </div>
    <div class="form-group">
      <h2>Datos personales</h2>
      <input class="form-control border-br" type="text" name="name" value="<?=$nombrePropio?>" placeholder="Nombre">
      <input class="form-control border-br" type="text" name="lastname" value="<?=$apellido?>" placeholder="Apellido">
      <input class="form-control border-br" type="email" name="email" value="<?=$correo?>" placeholder="E-mail">
    </div>
    <button class="btn btn-success mx-auto d-block inflate"  type="submit" name="guardar">Guardar</button>
  </form>
</div>
