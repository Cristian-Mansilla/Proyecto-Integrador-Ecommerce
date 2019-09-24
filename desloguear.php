<?php
  session_start();
  $_SESSION["usuarioLogueado"] = false;
  header("location:index.php");


 ?>
