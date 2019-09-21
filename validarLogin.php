<?php
  $users = [
    0 => ["nico", "123"],
    1 => ["cristian", "1234"],
    2 => ["fede", "12345"],
    3 => ["Marcos", "123456"]
           ];
    $password = $_POST["password"];
    $usuario = $_POST["username"];
    // VALIDACION Y CASO CORRECTO MANDA A INDEX
  foreach ($users as $usuarios => $info){
      if($info[0] === $usuario && $info[1] === $password){
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
