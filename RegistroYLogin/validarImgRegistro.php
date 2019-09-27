<?php

    $nombre = $_FILES["imgPerfil"]["name"];
    $path = pathinfo($nombre, PATHINFO_EXTENSION);
    $carpeta = "../imgPerfiles/" . $_POST["email"];
    if (!file_exists($carpeta)) {
      mkdir($carpeta, 0777, true);
    }
    move_uploaded_file($_FILES["imgPerfil"]["tmp_name"], "../imgPerfiles/" . $_POST["email"] . "/perfil." . $path);




 ?>
