<?php
  function validarRegistro() {
    $usuario = trim($_POST['username']);
    $nombre = trim($_POST['name']);
		$apellido = trim($_POST['lastname']);
		$email = trim($_POST['email']);
		$contrasenia = trim($_POST['password']);
    $errores = [];




    if (!empty($nombre)) {
      if (strlen($nombre) < 2) {
        $errores[] = "¡El nombre es muy corto!";
      }
    } else {
      $errores[] = "¡Su nombre está vacío!";
    }

    if (!empty($apellido)) {
      if (strlen($apellido) < 2) {
        $errores[] = "¡El apellido es muy corto!";
      }
    } else {
      $errores[] = "¡Su apellido está vacío!";
    }


    if (!empty($email)) {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Ingrese una dirección de correo valida";
      }
    } else {
      $errores[] = "¡Su correo electrónico está vacío!";
    }

    if (!empty($contrasenia)) {
      if (strlen($contrasenia) <= 4) {
        $errores[] = "¡Contraseña insegura!";
      }
    } else {
      $errores[] = "¡Necesita una contraseña!";
    }
  if($_FILES["imgPerfil"]["error"] == 0){
    $nombre = $_FILES["imgPerfil"]["name"];
    $path = pathinfo($nombre, PATHINFO_EXTENSION);
    if($path === "jpg" || $path === "jpeg" || $path == "png"){
      $nada = "nada";
    }else{
      $errores[] = "La imagen debe estar en formato jpg, jpeg o png";
    }
  }
  $datos = file_get_contents("../usuarios.json");
  $usuarios = json_decode($datos, true);
  foreach ($usuarios as $usuario) {
    if ($usuario["usuario"] === $usuario){
      $errores[] = "El usuario ingresado ya esta en uso";
      break;
    }

  }
  foreach ($usuarios as $usuario) {
    if ($usuario["email"] === $email){
      $errores[] = "El mail ingresado ya esta en uso";
      break;
    }

  }

    return $errores;
  }
?>
