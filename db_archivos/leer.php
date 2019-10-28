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

  $stmtProductos = $dbh->prepare("SELECT * FROM imagenes; ");

  // Especificamos el fetch mode antes de llamar a fetch()
  $stmtProductos->setFetchMode(PDO::FETCH_ASSOC);
  // Ejecutamos
  $stmtProductos->execute();

  while ($rowProd = $stmtProductos->fetch()) {

    $datos = $rowProd["imagen"];
    $datos = base64_decode($datos);
    echo $datos;
  }
