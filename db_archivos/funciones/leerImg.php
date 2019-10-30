<?php

  $user = "root";
  $password = "04232905";
  $dbname = "db_4Buy";
try {
  $dsn = "mysql:host=localhost;dbname=$dbname";
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
  echo $e->getMessage();
}
  $id=$_GET["img"];

  $stmtProductos = $dbh->prepare("SELECT imagen FROM imagenes WHERE id=$id");
  $stmtProductos->execute();
    

  $rowProd = $stmtProductos->fetch();

    $datos = $rowProd["imagen"];
    $datos = base64_decode($datos);

    echo $datos;
