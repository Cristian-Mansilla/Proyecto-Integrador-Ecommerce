<?php
if(!isset($_SESSION)){
  session_start();
}?>
<!-- HEADER ESCRITORIO -->


<header class="container-fluid h-200 backg-header d-lg-block d-md-none d-sm-none d-none" >
  <!--Header 1  -->
  <div class="container">
    <div class="row d-flex justify-content-between p-2 col-md-12 col-lg-12">
      <a href="index.php" class="col-md-2 col-lg-2"><img src="img/index/logo-medio.png" class="rounded-circle w-md-10 h-md-10 w-lg-25 h-lg-100" alt="LOGO"></a>
      <form class="form-inline row my-2 my-lg-0 col-md-6 col-lg-6" action ="categorias.php" method="get">
       <input class="form-control mr-sm-2 col-md-8 col-lg-9" type="search" placeholder="Search" name="categoria" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0 col-md-3 col-lg-2 text-white text-decoration-none borde-blanco" type="submit" >Search</button>
     </form>

      <div class="col-lg-3 row pt-lg-3 d-lg-block d-sm-none d-xs-none d-md-none">
        <?php

          if(isset($_SESSION["usuarioLogueado"])){

              if($_SESSION["usuarioLogueado"] == true){
                  $username = $_SESSION["usuario"];
                  $rutaindex = $_SESSION["imgPerfil"];
                  echo  "<a href='perfil.php' class='rounded col-7 m-1 p-2 text-center text-white text-decoration-none'><img style='height:50px; width:50px'  src='$rutaindex' alt='imgPerfil'></a>";
                  echo "<a href='desloguear.php' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none color-lightBlue'>Desloguear</a>";

              } else{
                echo "<a href='RegistroYLogin/login.php' class=' borde-blanco pt-1   rounded col-7 m-1 p-2 text-center text-decoration-none text-white'>Iniciar sesion</a>";
                echo "<a href='RegistroYLogin/registro.php' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none color-lightBlue'>Registro</a>";
              }
          }else{
            echo "<a href='RegistroYLogin/login.php' class=' borde-blanco pt-1   rounded col-7 m-1 p-2 text-center text-white text-decoration-none'>Iniciar sesion</a>";
            echo "<a href='RegistroYLogin/registro.php' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center text-decoration-none color-lightBlue'>Registro</a>";

          }


         ?>
        </div>

    </div>

      <!-- Header 2  -->
      <?php require("barraNav.php"); ?>



      </div>
  </div>
</header>




<!-- HEADER MEDIUM Y SMALL -->
<header class="container-fluid backg-header d-lg-none" >
  <div class="container d-flex justify-content-between pb-3">
    <div class="dropdown col-3 pt-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <ion-icon name="menu"></ion-icon>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <?php

            if(isset($_SESSION["usuarioLogueado"])){

                if($_SESSION["usuarioLogueado"] == true){
                    $rutaindex = $_SESSION["imgPerfil"];
                    echo "<button class='dropdown-item' type='butto'><a href='perfil.php' class='text-center pt-2 col-12 rounded p-1 '>Perfil</a></button>";
                    echo "<button class='dropdown-item' type='butto'><a href='desloguear.php' class='text-center pt-2 col-12 rounded p-1 '>Desloguear</a></button>";

                } else{
                  echo "<button class='dropdown-item' type='butto'><a href='login.php' class='text-center pt-2 col-12 rounded p-1 '>Iniciar sesion</a></button>";
                  echo "<button class='dropdown-item backg-header' type='button'><a href='registro.php' class='text-center pt-2 col-12 rounded text-white p-1'>Registro</a></button>";
                }
            }else{
              echo "<button class='dropdown-item' type='butto'><a href='login.php' class='text-center pt-2 col-12 rounded p-1 '>Iniciar sesion</a></button>";
              echo "<button class='dropdown-item backg-header' type='button'><a href='registro.php' class='text-center pt-2 col-12 rounded text-white p-1'>Registro</a></button>";
            }


           ?>
          <button class="dropdown-item" type="button"><a href="canjearCupon.php" class="text-center pt-2 col-12 rounded p-1">Canjear cupon</a></button>
          <button class="dropdown-item" type="button"><a href="categorias.php?categoria=oferta" class="text-center pt-2 col-12 rounded p-1">Ofertas</a></button>
          <button class="dropdown-item" type="button"><a href="qSomos.php" class="text-center pt-2 col-12 rounded p-1">¿Quienes somos?</a></button>
          <button class="dropdown-item" type="button"><a href="ayuda.php" class="text-center pt-2 col-12 rounded p-1">Ayuda</a></button>
          <button class="dropdown-item" type="button"><a href="categorias.php?categoria=oferta" class="text-center pt-2 col-12 rounded p-1">Categorias</a></button>

        </div>

    </div>
    <div class="col-3 py-2 text-center">
      <a href="index.php" class=""><img src="img/index/logo-medio.png" height="35" width="35" class="rounded-circle" alt="LOGO"></a>
    </div>
    <div class="row col-5 justify-content-between py-2 text-center">
      <a href="#top" class="col-4 bg-dark p-2  text-white rounded"><ion-icon name="notifications"></ion-icon></a>
      <a href="carritoCompras.php" class="col-4  bg-dark p-2 text-white rounded"><ion-icon name="cart"></ion-icon></a>
    </div>

  </div>
  <div class="container">
    <form class="form-inline row my-2 col-12 ml-1">
     <input class="form-control col-10 col-md-11" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success col-2 col-md-1 text-center text-white borde-blanco" type="submit"><ion-icon name="search"></ion-icon></button>
   </form>


  </div>
  <br>




</header>
