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

$stmtUsuario = $dbh->prepare("SELECT * FROM usuarios,provincias,ciudad,pais WHERE usuarios.idUsuarios LIKE 2 ");
// Especificamos el fetch mode antes de llamar a fetch()
$stmtUsuario->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$stmtUsuario->execute();

$rowUsuario = $stmtUsuario->fetch();
echo "<pre>";
print_r ($rowUsuario);
echo "</pre>";

// while () {
//   $nom = $rowUsuario["Nombre"];
//   $ape = $rowUsuario["Apellido"];
//   $pass = $rowUsuario["Contrasena"];
//   $user = $rowUsuario["Usuario"];
//   $photo = $rowUsuario["ImgPerfil"];
//   $email = $rowUsuario["Email"];
//   $ubicacion=[
//     "ciudad" => $rowUsuario["NombreCiudad"],
//     "provincia" => $rowUsuario["nombreProvincia"],
//     "pais" => $rowUsuario["nombrePais"]
//   ];
//
//   $array[] = [
//     "nombre" => $nom,
//     "apellido" => $ape,
//     "contraseña" => $pass,
//     "user" => $user,
//     "email" => $email,
//     "img perfil" => $photo,
//     "ubicacion" => $ubicacion
//
//   ];
// }
//
// echo "<pre>";
// print_r($array);
// echo "</pre>";
