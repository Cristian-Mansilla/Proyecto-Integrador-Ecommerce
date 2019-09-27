<?php
  if(isset($_FILES)){
    if($_FILES["imgPerfil"]["error"] == 0){
      $nombre = $_FILES["imgPerfil"]["name"];
      $path = pathinfo($nombre, PATHINFO_EXTENSION);
      $todo = "imgPerfiles/" . "nmorero00@gmail.com" . "/perfil." . $path;
      echo $todo;
  }
}

?>
