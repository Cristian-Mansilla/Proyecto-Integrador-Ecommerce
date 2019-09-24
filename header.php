<?php session_start();
?>
<!-- HEADER ESCRITORIO -->


<header class="container-fluid h-200 backg-header d-lg-block d-md-none d-sm-none d-none" >
  <!--Header 1  -->
  <div class="container">
    <div class="row d-flex justify-content-between p-2 col-md-12 col-lg-12">
      <a href="index.php" class="col-md-2 col-lg-2"><img src="img/index/logo-medio.png" class="rounded-circle w-md-10 h-md-10 w-lg-25 h-lg-100" alt="LOGO"></a>
      <form class="form-inline row my-2 my-lg-0 col-md-6 col-lg-6">
       <input class="form-control mr-sm-2 col-md-8 col-lg-9" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0 col-md-3 col-lg-2 text-white borde-blanco" type="submit">Search</button>
     </form>
      <div class="col-lg-3 row pt-lg-3 d-lg-block d-sm-none d-xs-none d-md-none">
        <?php
          if(isset($_SESSION["usuarioLogueado"])){
              if($_SESSION["usuarioLogueado"]==true){
                  echo "Hola " . $_SESSION["usuario"];
                  echo "<a href='desloguear.php' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center color-lightBlue'>Desloguear</a>";

              }else{
                echo "<a href='login.php' class=' borde-blanco pt-1   rounded col-7 m-1 p-2 text-center text-white'>Iniciar sesion</a>";
                echo "<a href='registro.php' class='borde-blanco border-none pt-1 p-2 bg-white rounded col-4 m-1 text-center color-lightBlue'>Registro</a>";
              }
            }
         ?>
        </div>

    </div>
      <!-- Header 2  -->
      <div class="row  justify-content-between p-2 col-12 d-lg-block d-xs-none d-sm-none d-md-none">
        <div class="dropdown col-10 d-flex justify-content-between">
          <button class="btn btn-secondary dropdown-toggle col-2 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Hogar</a>
            <a class="dropdown-item" href="#">Tecnologia</a>
            <a class="dropdown-item" href="#">Deportes</a>
          </div>
          <div class="col-8 row justify-content-between">
            <a href="#top" class="text-center text-white pt-2 bg-dark col-3 rounded p-1">Canjear cupon</a>
            <a href="#top" class="text-center text-white pt-2 bg-dark col-3 rounded p-1">Ofertas</a>
            <a href="#top" class="text-center text-white pt-2 bg-dark col-3 rounded p-1">¿Quienes somos?</a>
            <a href="#top" class="text-center text-white pt-2 bg-dark col-2 rounded p-1">Ayuda</a>
          </div>
          <div class="col-2 row">
            <a href="#top" class="col-4 p-1 m-1 bg-dark text-center text-white rounded"><ion-icon name="notifications"></ion-icon></a>
            <a href="#top" class="col-4 p-1 m-1 bg-dark text-center text-white rounded"><ion-icon name="cart"></ion-icon></a>
          </div>
        </div>


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
          <button class="dropdown-item" type="button"><a href="login.php" class="text-center pt-2 col-12 rounded p-1 ">Iniciar sesion</a></button>
          <button class="dropdown-item backg-header" type="button"><a href="registro.php" class="text-center pt-2 col-12 rounded text-white p-1">Registro</a></button>
          <button class="dropdown-item" type="button"><a href="#top" class="text-center pt-2 col-12 rounded p-1">Canjear cupon</a></button>
          <button class="dropdown-item" type="button"><a href="#top" class="text-center pt-2 col-12 rounded p-1">Ofertas</a></button>
          <button class="dropdown-item" type="button"><a href="#top" class="text-center pt-2 col-12 rounded p-1">¿Quienes somos?</a></button>
          <button class="dropdown-item" type="button"><a href="#top" class="text-center pt-2 col-12 rounded p-1">Ayuda</a></button>

        </div>

    </div>
    <div class="col-3 py-2 text-center">
      <a href="index.php" class=""><img src="img/index/logo-medio.png" height="35" width="35" class="rounded-circle" alt="LOGO"></a>
    </div>
    <div class="row col-5 justify-content-between py-2 text-center">
      <a href="#top" class="col-4 bg-dark p-2  text-white rounded"><ion-icon name="notifications"></ion-icon></a>
      <a href="#top" class="col-4  bg-dark p-2 text-white rounded"><ion-icon name="cart"></ion-icon></a>
    </div>
  </div>
  <div class="container">
    <form class="form-inline row my-2 col-12 ml-1">
     <input class="form-control col-10 col-md-11" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success col-2 col-md-1 text-center text-white borde-blanco" type="submit"><ion-icon name="search"></ion-icon></button>
   </form>
  </div>

</header>
