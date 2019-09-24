<?php

$datos = file_get_contents("usuarios.json");
$usuarios = json_decode($datos, true);
$passNueva = $_POST["password"];
$pasNueva2 = $_POST["password2"];
$token = $_POST["token"];
$cant = (count($usuarios));


for ($i=0; $i < $cant ; $i++) {
  if ($token === $usuarios[$i]["contrasena"]) {
      if ($pasNueva2 === $passNueva) {
        $usuarios[$i]["contrasena"] = $pasNueva2;
        echo "Contraseña cambiada correctamente";
        $jsonFinal = json_encode($usuarios);
        file_put_contents("usuarios.json", $jsonFinal);
        header("location: index.php");
      }else {
        echo "Las contraseñas ingresadas no son iguales";
      }
    }else {
      echo "El token ingresado es incorrecto";
    }


}






 ?>
