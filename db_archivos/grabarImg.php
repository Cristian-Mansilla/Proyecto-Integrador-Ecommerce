<?php
/* Se conecta con la base de datos elegida. */

$datos = base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));

$stmt = $dbh->prepare("INSERT INTO `imagenes` (`id`, `imagen`) VALUES (NULL, :imagen);");
// Bind
$stmt->bindParam(':imagen', $datos);
// Excecute
$stmt->execute();
