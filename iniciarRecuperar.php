<?php
  $rand_part = str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789".uniqid());

  $datos = file_get_contents("usuarios.json");
  $usuarios = json_decode($datos, true);
  var_dump($usuarios);
  $mailIncorrecto = true;
  $mail = $_POST["email"];

  $cant = (count($usuarios));

  for ($i=0; $i < $cant ; $i++) {
    if($usuarios[$i]["email"] == $mail){
      $usuarios[$i]["contrasena"] = $rand_part;
      echo "Hoola";
      echo $usuarios[$i]["email"];
      $to = $_POST["email"];
      $from = "From: nmorero00@gmail.com";
      $subject = "Recordar contraseña";
      $message = "Utiliza el siguiente codigo para recuperar tu cuenta: ". $rand_part;


      mail($to, $subject, $message, $from);
      $mailIncorrecto = false;




      $jsonFinal = json_encode($usuarios);
      file_put_contents("usuarios.json", $jsonFinal);
      header("location: cambiarPass.php");
      break;
  }
}
  if($mailIncorrecto == true){
    echo $_POST["email"];
    echo "El mail ingresado no esta registrado";
  }






 ?>
