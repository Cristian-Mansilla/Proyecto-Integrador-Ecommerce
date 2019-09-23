<?php


$rand_part = str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789".uniqid());




  if(isset($_POST["enviar"])) {
    echo "Hola";
    $datos = file_get_contents("usuarios.json");
    echo $datos;
    echo "<br>";
    $usuarios = json_decode($datos, true);
    var_dump($usuarios);
    $usuario = $_POST["username"];
    $apellido = $_POST["lastname"];
    $email = $_POST["email"];
    $contrasena = $_POST["password"];
    $usuarios[] = [
      "usuario" => $usuario,
      "apellido" => $apellido,
      "email" => $email,
      "contrasena" => $contrasena,
      "token" => $rand_part
    ];
    var_dump($usuarios);
    $jsonFinal = json_encode($usuarios);
    file_put_contents("usuarios.json", $jsonFinal);
    // header("location:index.php");
  } else {
    echo "Debe llenar todos los campos.";
  }
?>
