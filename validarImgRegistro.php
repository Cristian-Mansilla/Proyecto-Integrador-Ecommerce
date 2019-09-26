<?php
  if($_FILES["imgPerfil"]["error"] == 0){
    nombre = $_FILES["avatar"]["name"];
    $path = pathinfo($nombre, PATHINFO_EXTENSION);
    if($path === "jpg" || $path === "jpeg" || $path == "png"){
      move_uploaded_file($_FILES["imgPerfil"]["tmp_name"], "imgPerfiles/" . $_POST["email"] . "/perfil." . pathinfo($_FILES["imgPerfil"]["name"], PATHINFO_EXTENSION));
    }
  }









 ?>
