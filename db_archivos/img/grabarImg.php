<?php
/* Se conecta con la base de datos elegida. */
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

require_once("../funcionesAgregar.php");
$id_imagen=agregarImagenProducto($dbh);
agregarDatosTablaProducto("Celular", 200, 2, 1, 2,$id_imagen, $dbh);
