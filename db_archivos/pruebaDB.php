<?php

require_once("./funcionesAgregar.php");
require_once("./funcionesSelect.php");
// CONECTAR A DB

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


// AGREGAR A TABLA

// agregarDatosTablaMarca("Motorola" ,$dbh);
// agregarDatosTablaUsuario("ivan", "morero", "12345", "iamo", "perfil.jpeg", "iamorero@mail.com", 1, $dbh);
// agregarDatosTablaProducto("Moto G2", "3000", 1, "celular.jpeg", 3, 2, $dbh);




$usuarios = traerTodosLosUsuarios2($dbh);

// agregarDatosTablaUsuario("jose", "morero", "123456", "josemo", "perfil.jpeg", "jose@gmail.com", 1, $dbh);

// IMPRIMO TODA LA INFO DEL  USUARIO
echo "IMPRIMIR TODOS LOS USUARIOS";
echo "<pre>";
print_r($usuarios);
echo "</pre>";

echo "IMPRIMIR LOS PRODUCTOS SEGUN LA CATEGORIA INGRESADA";
$productos = traerProductosPorCategorias(2, $dbh);
echo "<pre>";
print_r($productos);
echo "</pre>";

?>
<img src='leer.php?id=2' border='0'>
