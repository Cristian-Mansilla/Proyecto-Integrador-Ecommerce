<?php require_once("datosUsuarioLogeado.php"); ?>
<div class="border-left mt-4 px-4">
  <form class="" action="" method="post">
    <div class="d-flex">
      <h1 class="titulo">Mis Datos</h1>
      <button class="btn btn-link ml-auto inflate" type="button" name="edit">
        <i class="fa fa-edit"></i>
      </button>
    </div>
    <h2>Datos de cuenta</h2>
    <div class="form-group row border-bottom mb-2">
      <div class="col-12 col-md-2">
        <label class="animatedLabel" for="username">
          <span>Usuario</span>
        </label>
      </div>
      <div class="col-12 col-md-10">
        <input class="form-control border-0 bg-transparent" id="username" type="text" name="username" value="<?=(isset($nombreUsuario)?$nombreUsuario:"")?>" placeholder="Usuario">
      </div>
    </div>
    <div class="form-group row border-bottom mb-2">
      <button class="btn-block pulsador" type="button" name="changePassword">Cambiar contraseña</button>
    </div>
    <h2>Datos personales</h2>
    <div class="form-group row border-bottom mb-2">
      <div class="col-12 col-md-2">
        <label class="animatedLabel" for="name">
          <span>Nombre</span>
        </label>
      </div>
      <div class="col-12 col-md-10">
        <input class="form-control border-0 bg-transparent" id="name" type="text" name="name" value="<?=(isset($nombrePropio)?$nombrePropio:"")?>" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group row border-bottom mb-2">
      <div class="col-12 col-md-2">
        <label class="animatedLabel" for="lastname">
          <span>Apellido</span>
        </label>
      </div>
      <div class="col-12 col-md-10">
        <input class="form-control border-0 bg-transparent" id="lastname" type="text" name="lastname" value="<?=(isset($apellido)?$apellido:"")?>" placeholder="Apellido">
      </div>
    </div>
    <div class="form-group row border-bottom mb-2">
      <div class="col-12 col-md-2">
        <label class="animatedLabel" for="email">
          <span>Email</span>
        </label>
      </div>
      <div class="col-12 col-md-10">
        <input class="form-control border-0 bg-transparent" id="email" type="email" name="email" value="<?=(isset($correo)?$correo:"")?>" placeholder="E-mail">
      </div>
    </div>
  </form>
</div>
