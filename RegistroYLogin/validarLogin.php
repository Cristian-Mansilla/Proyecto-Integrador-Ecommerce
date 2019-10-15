<?php
$datos = file_get_contents("usuarios.json");
$usuarios = json_decode($datos, true);




if ($_POST) {

  $password = trim($_POST["password"]);
  $usuario = trim($_POST["username"]);
  $errores = [];

  // Valido que la información de los campos tienen el dato correcto
  if (!empty($usuario)) {
    foreach ($usuarios as $user) {
      if ($user["usuario"] != $usuario) {

      }else{
        $userBander = true;
      }

    }
  } else {
    $errores["errorUsername"] = "¡El nombre de usuario está vacío!";
  }


  if($userBander == false){
    $errores["errorUsername"] = "¡El usuario no se encuentra registrado!";
  }



  if (!empty($password)) {
    foreach ($usuarios as $user) {
      if ($user["usuario"] == $usuario and !password_verify($password, $user["contrasena"])) {
        $errores["errorPassword"] = "¡Contraseña incorrecta!";
      }
    }
  } else {
    $errores["errorPassword"] = "¡La contraseña está vacía!";
  }

  // Si no hay errores
  if (empty($errores)) {
    // VALIDACION Y CASO CORRECTO MANDA A INDEX
    foreach ($usuarios as $user => $info){
      if($info["usuario"] == $usuario && password_verify($password, $info["contrasena"])){
        $bandera = true;
        session_start();
        $_SESSION["usuarioLogueado"] = true;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nombre"] = $info["nombre"];
        $_SESSION["apellido"] = $info["apellido"];
        $_SESSION["email"] = $info["email"];
        $_SESSION["imgPerfil"] = $info["imgPerfil"];
        echo "<script>
                alert( 'Bienvenido');
                window.location=  '../index.php'
              </script>";

        break;
      }else{
        $bandera = false;
      };
    };
    // MENSAJE DE ERROR Y VUELVE A LOGIN
    if($bandera == false){
      echo "<script>
              alert( 'Datos Incorrectos ');
              window.location=  '../login.php'
            </script>";
    };
  }
}
