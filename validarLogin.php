<?php
$datos = file_get_contents("usuarios.json");
$usuarios = json_decode($datos, true);


    $password = $_POST["password"];
    $usuario = $_POST["username"];
    // VALIDACION Y CASO CORRECTO MANDA A INDEX
  foreach ($usuarios as $user => $info){
      if($info["usuario"] === $usuario && $info["contrasena"] === $password){
        $bandera = true;
        echo "<script>
                alert( 'Bienvenido');
                window.location=  'index.php'
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
            window.location=  'login.html'
          </script>";
  };
