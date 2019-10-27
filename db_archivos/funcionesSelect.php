<?php
function traerTodosLosUsuarios($dbh){
  //RECIBIR DATOS USUARIOS
  // FETCH_ASSOC
  $stmtUsuario = $dbh->prepare("SELECT * FROM usuarios ");
  // Especificamos el fetch mode antes de llamar a fetch()
  $stmtUsuario->setFetchMode(PDO::FETCH_ASSOC);
  // Ejecutamos
  $stmtUsuario->execute();

  while ($rowUsuario = $stmtUsuario->fetch()){
    // DEFINO LAS VARIABLES CON LA INFO DEL USUARIO
    $nom = $rowUsuario["nombre"];
    $ape = $rowUsuario["apellido"];
    $pass = $rowUsuario["contrasena"];
    $user = $rowUsuario["usuario"];
    $photo = $rowUsuario["imgPerfil"];
    $email = $rowUsuario["email"];

    // TRAIGO LAS CIUDADES DE LA TABLA CIUDAD QUE SEAN IGUAL A LA FOREIGN KEY "id_Ciudad" DE LA TABLA USUARIOS
    $ciu = $rowUsuario["id_ciudad"];
    $stmtCiudad = $dbh->prepare("SELECT * FROM ciudad WHERE idCiudad LIKE $ciu ");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmtCiudad->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmtCiudad->execute();

    $rowCiudad = $stmtCiudad->fetch();

  // TRAIGO LAS PROVINCIAS DE LA TABLA PROVINCIAS QUE SEAN IGUAL A LA FOREIGN KEY "id_Provincia" DE LA TABLA CIUDAD
    $prov = $rowCiudad['id_provincia'];
    $stmtProvincia = $dbh->prepare("SELECT * FROM provincias WHERE idprovincias LIKE $prov ");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmtProvincia->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmtProvincia->execute();

    $rowPorvincia = $stmtProvincia->fetch();

    // TRAIGO EL PAIS DE LA TABLA PAIS QUE SEAN IGUAL A LA FOREIGN KEY "id_pais" DE LA TABLA PROVINCIA
    $pais = $rowPorvincia["id_pais"];
    $stmtPais = $dbh->prepare("SELECT * FROM pais WHERE idpais LIKE $pais ");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmtPais->setFetchMode(PDO::FETCH_ASSOC);

    $stmtPais->execute();

    $rowPais = $stmtPais->fetch();

  // SE CREA EL ARRAY CON TODA LA INFO DE UBICACION DEL USUARIO
    $ubicacion=[
      "ciudad" => $rowCiudad["nombreCiudad"],
      "provincia" => $rowPorvincia["nombreProvincia"],
      "pais" => $rowPais["nombrePais"]
    ];

  // SE CREA EL ARRAY CON TODA LA INFO DEL USUARIO
    $array[] = [
      "nombre" => $nom,
      "apellido" => $ape,
      "contraseña" => $pass,
      "user" => $user,
      "email" => $email,
      "img perfil" => $photo,
      "ubicacion" => $ubicacion

    ];
  }
  return $array;
}


function traerProductosPorCategorias($categoria, $dbh){


  //RECIBIR DATOS PRODUCTOS
  // FETCH_ASSOC
  $stmtProductos = $dbh->prepare("SELECT * FROM productos WHERE productos.id_categorias=$categoria ");
  // Especificamos el fetch mode antes de llamar a fetch()
  $stmtProductos->setFetchMode(PDO::FETCH_ASSOC);
  // Ejecutamos
  $stmtProductos->execute();
  while ($rowProd = $stmtProductos->fetch()) {
    $array[] = [
      "Titulo" => $rowProd["titulo"],
      "Precio" => $rowProd["precio"],
      "Stock" => $rowProd["stock"],
      "Img" => $rowProd["imgProducto"]
    ];
  }

  return $array;
}
