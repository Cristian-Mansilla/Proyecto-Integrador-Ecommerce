<?php

function traerTodosLosUsuarios($dbh){
  //RECIBIR DATOS USUARIOS
  // FETCH_ASSOC
  $stmtUsuario = $dbh->prepare("
    SELECT A.nombre,A.apellido,A.contrasena,A.usuario,A.email,A.imgPerfil,B.nombreCiudad,C.nombreProvincia,D.nombrePais
    FROM usuarios A
    LEFT JOIN ciudad B
    ON B.idCiudad=A.id_ciudad
    LEFT JOIN provincias C
    ON B.id_provincia=C.idprovincias
    LEFT JOIN pais D
    ON C.id_pais=D.idpais

    ");
  // Especificamos el fetch mode antes de llamar a fetch()
  $stmtUsuario->setFetchMode(PDO::FETCH_ASSOC);
  // Ejecutamos
  $stmtUsuario->execute();

  while ($rowUsuario = $stmtUsuario->fetch()){
    $nom = $rowUsuario["nombre"];
    $ape = $rowUsuario["apellido"];
    $pass = $rowUsuario["contrasena"];
    $user = $rowUsuario["usuario"];
    $photo = $rowUsuario["imgPerfil"];
    $email = $rowUsuario["email"];
    $ubicacion=[
      "ciudad" => $rowUsuario["nombreCiudad"],
      "provincia" => $rowUsuario["nombreProvincia"],
      "pais" => $rowUsuario["nombrePais"]
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





// SELECT PARA productos


function traerProductosPorCategorias($categoria, $dbh){


  //RECIBIR DATOS PRODUCTOS
  // FETCH_ASSOC
  $stmtProductos = $dbh->prepare("
  SELECT A.titulo,A.precio,A.stock,B.nombreCategoria,C.imagen,D.marca FROM productos A
  LEFT JOIN categorias B
  ON A.id_categorias=B.idCategorias
  LEFT JOIN imagenes C
  ON C.id=A.imgProducto
  LEFT JOIN Marcas D
  ON A.id_marca=D.idMarca
  WHERE A.id_categorias=$categoria; ");

  // Especificamos el fetch mode antes de llamar a fetch()
  $stmtProductos->setFetchMode(PDO::FETCH_ASSOC);
  // Ejecutamos
  $stmtProductos->execute();

  while ($rowProd = $stmtProductos->fetch()) {
    $array[] = [
      "Titulo" => $rowProd["titulo"],
      "Precio" => $rowProd["precio"],
      "Stock" => $rowProd["stock"],
      "Marca" => $rowProd["marca"],
      "Img" => $rowProd["imagen"],
      "Categoria" => $rowProd["nombreCategoria"],

    ];
  }

  return $array;
}
