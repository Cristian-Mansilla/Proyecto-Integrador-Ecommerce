<?php require_once("datosUsuarioLogeado.php"); ?>
<div class="border-left mt-4 px-4">
  <h1>Mis Datos</h1>
  <form class="" action="" method="post">
    <div class="form-group">
      <h2>Datos de cuenta</h2>
      <input class="form-control border-br" type="text" name="" value="<?=$nombreUsuario?>" placeholder="Usuario">
      <input class="form-control border-br" type="password" name="" value="" placeholder="Contraseña">
    </div>
    <div class="form-group">
      <h2>Datos personales</h2>
      <input class="form-control border-br" type="text" name="" value="<?=$nombrePropio?>" placeholder="Nombre">
      <input class="form-control border-br" type="text" name="" value="<?=$apellido?>" placeholder="Apellido">
      <input class="form-control border-br" type="email" name="" value="<?=$correo?>" placeholder="E-mail">
    </div>
    <button class="btn btn-success mx-auto d-block inflate"  type="submit" name="guardar">Guardar</button>
  </form>
</div>
