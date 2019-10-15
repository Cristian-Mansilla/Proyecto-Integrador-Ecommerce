<?php




$datos = file_get_contents("productos.json");
$productos = json_decode($datos, true);

$catexiste = false;
$cate = $_GET["categoria"];

function imprimirPorCategorias($productos, $catexiste, $cate){
    foreach ($productos as $producto) {
      $categorias = $producto["categorias"];
      $ruta = $producto["ruta"];
      $titulo = $producto["titulo"];
      $precio = $producto["precio"];
      foreach ($categorias as $categoria) {
        if($cate == $categoria){
          echo "<div class='zoom col-lg-3  m-1 col-sm-5 mt-2 mb-5 p-3' style='height:300px;'>
                  <a href='#top'zoom class='text-decoration-none'><div class='card p-5' style='width: 19rem; height:300px;'>
                    <img src='$ruta' class='card-img-top' height='150' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>$titulo</h5>
                      <p class='card-text'>$precio</p>
                      </div>
                    </div>
                  </a>
                </div>
              ";
                $catexiste=true;
        }

      }

    }
    return $catexiste;
  }

$cat = $_GET["categoria"];
if(imprimirPorCategorias($productos, $catexiste, $cate) == false){
  echo "<h1>No se encontraron productos con el nombre $cat</h1>";
}




function imprimirPorCantidad($cate, $cantidad, $productos){
  $array = [];
    foreach ($productos as $producto) {
      $categorias = $producto["categorias"];
      $ruta = $producto["ruta"];
      $titulo = $producto["titulo"];
      $precio = $producto["precio"];
      foreach ($categorias as $categoria) {
        if($cate == $categoria){
            $array[] = [$producto];

          }
        }

      }
    $contador = 0;

    foreach ($array as $productoFiltrado) {

      $ruta = $productoFiltrado[0]["ruta"];
      $titulo = $productoFiltrado[0]["titulo"];
      $precio = $productoFiltrado[0]["precio"];
      echo "<div class='zoom col-lg-3  m-1 col-sm-5 mt-2 mb-5 p-3' style='height:300px;'>
              <a href='#top' class='text-decoration-none'><div class='card p-5' style='width: 19rem; height:300px;'>
                <img src='$ruta' class='card-img-top' height='150' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>$titulo</h5>
                  <p class='card-text'>$precio</p>
                  </div>
                </div>
              </a>
            </div>
          ";
      $contador++;
      if ($contador == $cantidad) {
        break;
      }

    }


}


// foreach ($productos as $producto) {
//   $ruta = $producto["ruta"];
//   $titulo = $producto["titulo"];
//   $precio = $producto["precio"];
//
//
//   echo "<a href='#top' class='text-decoration-none'><div class='card' style='width: 18rem;'>
//           <img src='$ruta' class='card-img-top' alt='...'>
//           <div class='card-body'>
//             <h5 class='card-title'>$titulo</h5>
//             <p class='card-text'>$precio</p>
//           </div>
//       </div></a>";
// )
  // echo "<a href='#top' class='col-lg-3 col-md-6 mt-md-6 col-sm-6 col-12'><img src='$ruta' class=' rounded-circle'></a>";



?>
