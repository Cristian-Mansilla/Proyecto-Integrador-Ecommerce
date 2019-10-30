<?php
//  AGREGAR USUARIO
function agregarDatosTablaUsuario($nombre, $apellido, $contrasena, $usuario, $imgPerfil, $email, $ciudad, $dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `usuarios` (`idUsuarios`, `nombre`, `apellido`, `contrasena`, `usuario`, `email`, `imgPerfil`, `id_ciudad`, `productos`) VALUES (NULL, :nombre, :apellido, :contrasena, :usuario, :email, :imgPerfil, :id_ciudad, NULL);");
  // Bind
  $stmt->bindParam(':nombre', $nombre);
  $stmt->bindParam(':apellido', $apellido);
  $stmt->bindParam(':contrasena', $contrasena);
  $stmt->bindParam(':usuario', $usuario);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':imgPerfil', $imgPerfil);
  $stmt->bindParam(':id_ciudad', $ciudad);
  // Excecute
  $stmt->execute();
}

// AGREGAR PAIS
function agregarDatosTablaPais($nombrePais, $dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `pais` (`idpais`, `nombrePais`) VALUES (NULL, :nombrePais);");
  // Bind
  $stmt->bindParam(':nombrePais', $nombrePais);
  // Excecute
  $stmt->execute();
}

// AGREGAR PROVINCIA
function agregarDatosTablaProvincias($nombreProvincia, $idPais ,$dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `provincias` (`idProvincias`, `nombrePais`, `id_pais`) VALUES (NULL, :nombreProvincia, :id_paiss);");
  // Bind
  $stmt->bindParam(':nombreProvincia', $nombreProvincia);
  $stmt->bindParam(':id_pais', $idPais);
  // Excecute
  $stmt->execute();
}

  // AGREGAR CIUDAD
function agregarDatosTablaCiudad($nombreCiudad, $idProvincia ,$dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `ciudad` (`idCiudad`, `nombreCiudad`, `id_provincia`) VALUES (NULL, :nombreCiudad, :id_provincia);");
  // Bind
  $stmt->bindParam(':nombreCiudad', $nombreCiudad);
  $stmt->bindParam(':id_provincia', $idProvincia);
  // Excecute
  $stmt->execute();
}

// AGREGAR PRODUCTO

function agregarImagenProducto($dbh){
  $datos = base64_encode(file_get_contents($_FILES['img']['tmp_name']));

  $stmt = $dbh->prepare("INSERT INTO `imagenes` (`id`, `imagen`) VALUES (NULL, :imagen);");
  // Bind
  $stmt->bindParam(':imagen', $datos);
  // Excecute

  $stmt->execute();
  $lastInsertId = $dbh->lastInsertId();
    return  $lastInsertId;

}



function agregarDatosTablaProducto($titulo, $precio, $stock, $id_marca, $id_categorias,$id_imagen, $dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `productos` (`idProductos`, `titulo`, `precio`, `stock`, `imgProducto`, `id_marca`, `id_categorias`) VALUES (NULL, :titulo, :precio, :stock, :imgProducto, :id_marca, :id_categorias);");
  // Bind
  $stmt->bindParam(':titulo', $titulo);
  $stmt->bindParam(':precio', $precio);
  $stmt->bindParam(':stock', $stock);
  $stmt->bindParam(':imgProducto', $id_imagen);
  $stmt->bindParam(':id_marca', $id_marca);
  $stmt->bindParam(':id_categorias', $id_categorias);
  // Excecute
  $stmt->execute();
}

// AGREGAR MARCA
function agregarDatosTablaMarca($marca ,$dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `Marcas` (`idMarca`, `marca`) VALUES (NULL, :marca);");
  // Bind
  $stmt->bindParam(':marca', $marca);
  // Excecute
  $stmt->execute();
}

// AGREGAR CATEGORIA
function agregarDatosTablaCategorias($nombreCategoria, $ruta, $idSubcategoria, $dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `categorias` (`idCategorias`, `nombreCategoria`, `ruta`, `id_subcategorias`) VALUES (NULL, :nombreCategoria, :ruta, :id_subcategorias);");
  // Bind
  $stmt->bindParam(':nombreCategoria', $nombreCategoria);
  $stmt->bindParam(':ruta', $ruta);
  $stmt->bindParam(':id_subcategorias', $idSubcategoria);
  // Excecute
  $stmt->execute();
}

// AGREGAR COMPRA
function agregarDatosTablaCompra($idUsuario, $idProducto, $cantidad, $dbh){
  // Prepare
  $stmt = $dbh->prepare("INSERT INTO `compra` (`idCompra`, `id_usuario`, `id_producto`, `cantidad`) VALUES (NULL, :id_usuario, :id_producto, :cantidad);");
  // Bind
  $stmt->bindParam(':id_usuario', $idUsuario);
  $stmt->bindParam(':id_producto', $idProducto);
  $stmt->bindParam(':cantidad', $cantidad);
  // Excecute
  $stmt->execute();
}
