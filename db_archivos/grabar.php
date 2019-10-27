<?php
/* Se conecta con la base de datos elegida. */
	$conexion = new PDO('mysql:host=localhost;dbname=db_4Buy;charset=UTF8', 'root', '04232905');
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$datos = base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
// 	try{
// 		$consulta = "INSERT INTO imagenes (";
// 		$consulta .= "imagen";
// 		$consulta .= ") VALUES (";
// 		$consulta .= "'".$datos."');";
// 		$conexion->query($consulta);
// 	} catch (Exception $e) {
// 		die ("Se produjo un error");
// 	}
//
// 	echo "Imagen almacenada.";
//


$stmt = $conexion->prepare("INSERT INTO `imagenes` (`id`, `imagen`) VALUES (NULL, :imagen);");
// Bind
$stmt->bindParam(':imagen', $datos);
// Excecute
$stmt->execute();
