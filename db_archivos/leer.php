<?php
/* Se conecta con la base de datos elegida. */
	// $conexion = new PDO('mysql:host=localhost;dbname=db_4Buy;charset=UTF8', 'root', '04232905');
	// $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //
	// $consulta = "SELECT * FROM imagenes WHERE id=1;";
	// $hacerConsulta = $conexion->prepare($consulta); // Se crea un objeto PDOStatement.
	// $hacerConsulta->execute(); // Se ejecuta la consulta.
	// $datos = $hacerConsulta->fetch(PDO::FETCH_ASSOC)["imagen"]; // Se recuperan los resultados.
	// $hacerConsulta->closeCursor(); // Se libera el recurso.
  //
	// $datos = base64_decode($datos);
  //
  // echo $datos;
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
