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

require_once("../funciones/funcionesAgregar.php");
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
$id_imagen=agregarImagenProducto($dbh);
$titulo = $_POST["titulo"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];
$id_marca = $_POST["marca"];
$id_categorias = $_POST["categoria"];
agregarDatosTablaProducto($titulo, $precio, $stock, $id_marca, $id_categorias,$id_imagen, $dbh);
header("location:agregarProd.php");
