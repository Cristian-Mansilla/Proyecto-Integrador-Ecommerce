<style media="screen">
/*
  code by Iatek LLC 2018 - CC 2.0 License - Attribution required
  code customized by Azmind.com
*/
body{
box-sizing: border-box;
}
@media (min-width: 768px) and (max-width: 991px) {
  /* Show 4th slide on md if col-md-4*/
  .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
      position: absolute;
      top: 0;
      right: -33.3333%;  /*change this with javascript in the future*/
      z-index: -1;
      display: block;
      visibility: visible;
  }
}
@media (min-width: 576px) and (max-width: 768px) {
  /* Show 3rd slide on sm if col-sm-6*/
  .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
      position: absolute;
      top: 0;
      right: -50%;  /*change this with javascript in the future*/
      z-index: -1;
      display: block;
      visibility: visible;
  }
}
@media (min-width: 576px) {
  .carousel-item {
      margin-right: 0;
  }
  /* show 2 items */
  .carousel-inner .active + .carousel-item {
      display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
      transition: none;
  }
  .carousel-inner .carousel-item-next {
      position: relative;
      transform: translate3d(0, 0, 0);
  }
  /* left or forward direction */
  .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
      position: relative;
      transform: translate3d(-100%, 0, 0);
      visibility: visible;
  }
  /* farthest right hidden item must be also positioned for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      display: block;
      visibility: visible;
  }
  /* right or prev direction */
  .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
      position: relative;
      transform: translate3d(100%, 0, 0);
      visibility: visible;
      display: block;
      visibility: visible;
  }
}
/* MD */
@media (min-width: 768px) {
  /* show 3rd of 3 item slide */
  .carousel-inner .active + .carousel-item + .carousel-item {
      display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
      transition: none;
  }
  .carousel-inner .carousel-item-next {
      position: relative;
      transform: translate3d(0, 0, 0);
  }
  /* left or forward direction */
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
      position: relative;
      transform: translate3d(-100%, 0, 0);
      visibility: visible;
  }
  /* right or prev direction */
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
      position: relative;
      transform: translate3d(100%, 0, 0);
      visibility: visible;
      display: block;
      visibility: visible;
  }
}
/* LG */
@media (min-width: 991px) {
  /* show 4th item */
  .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
      display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
      transition: none;
  }
  /* Show 5th slide on lg if col-lg-3 */
  .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
      position: absolute;
      top: 0;
      right: -25%;  /*change this with javascript in the future*/
      z-index: -1;
      display: block;
      visibility: visible;
  }
  /* left or forward direction */
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
      position: relative;
      transform: translate3d(-100%, 0, 0);
      visibility: visible;
  }
  /* right or prev direction //t - previous slide direction last item animation fix */
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
      position: relative;
      transform: translate3d(100%, 0, 0);
      visibility: visible;
      display: block;
      visibility: visible;
  }
}

</style>
<?php $datos = file_get_contents("productos.json");
$productos = json_decode($datos, true); ?>
        <!-- Top content -->
        <div class="top-content">
        	<div class="container-fluid">
        		<div id="carousel-example" class="carousel slide" data-ride="carousel" data-delay="none">
        			<div class="carousel-inner row w-100 mx-auto" role="listbox" style="height:350px">




      						<?php
                  $bandera=false;
                  foreach ($productos as $producto) {
                    $cate = "celulares";
                    $categorias = $producto["categorias"];
                    $ruta = $producto["ruta"];
                    $titulo = $producto["titulo"];
                    $precio = $producto["precio"];
                    foreach ($categorias as $categoria) {
                      if($cate == $categoria and $bandera==true){
                        echo "
                        <div class='carousel-item col-12 col-sm-6 col-md-4 col-lg-3 pt-2 rounded'>
        							      <a href='vistaProducto.php?img=$ruta&precio=$precio&titulo=$titulo' class='text-decoration-none text-dark rounded'>
                            <div class='bg-white text-center p-5 rounded'>
                              <img src='$ruta' class='img-fluid mx-auto d-block' alt='img1' height='200'>
                            </div>

                            <div class='bg-white text-center pb-2 rounded'>
                              <h4>$precio</h4>
                              <h8>$titulo</h8>
                            </div>
                            </a>
              						</div>";

                      }else if ($cate == $categoria and $bandera==false){
                        echo "  <div class='carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active pt-2 rounded '>
        							      <a href='vistaProducto.php?img=$ruta&precio=$precio&titulo=$titulo' class='text-decoration-none text-dark rounded'>
                            <div class='bg-white text-center p-5 rounded'>
                              <img src='$ruta' class='img-fluid mx-auto d-block' alt='img1' height='200'>
                            </div>

                            <div class='bg-white text-center pb-2 rounded'>
                              <h4>$precio</h4>
                              <h8>$titulo</h8>
                            </div>
                            </a>
              						</div>";
                        $bandera=true;
                      }

                    }

                  }

                ?>
        			</div>
        			<a class="carousel-control-prev bg-dark rounded-circle " href="#carousel-example" role="button" data-slide="prev" style="width:60px;height:60px;margin-top:130px">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next bg-dark rounded-circle" href="#carousel-example" role="button" data-slide="next" style="width:60px;height:60px;margin-top:130px">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
        		</div>
        	</div>
        </div>
