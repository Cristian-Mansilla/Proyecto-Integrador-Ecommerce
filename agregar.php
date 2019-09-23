<?php



  if(isset($_POST["enviar"])) {
    // llamo al archivo json usuarios
    $datos = file_get_contents("usuarios.json");
    $usuarios = json_decode($datos, true);

    // determino los valores de los post del formulario
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
    // vuelvo a codificar y enviar los datos al archivo json
    $jsonFinal = json_encode($usuarios);
    file_put_contents("usuarios.json", $jsonFinal);

    // Envio al index si el registro esta completado
    header("location:index.php");
  } else {
    echo "Debe llenar todos los campos.";
  }
?>
