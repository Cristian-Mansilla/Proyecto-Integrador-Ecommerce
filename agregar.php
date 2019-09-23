<?php



  if(isset($_POST["enviar"])) {
    echo "Hola";
    $datos = file_get_contents("usuarios.json");
    $usuarios = json_decode($datos, true);
    $usuario = $_POST["username"];
    $apellido = $_POST["lastname"];
    $email = $_POST["email"];
    $contrasena = $_POST["password"];
    $usuarios[] = [
      "usuario" => $usuario,
      "apellido" => $apellido,
      "email" => $email,
      "contrasena" => $contrasena
    ];
    var_dump($usuarios);
    $jsonFinal = json_encode($usuarios);
    file_put_contents("usuarios.json", $jsonFinal);
    header("location:index.php");
  } else {
    echo "Debe llenar todos los campos.";
  }
?>
