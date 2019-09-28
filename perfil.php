<?php
  $compras = [
    ["name" => "Favoritos", "id" => "favoritos-tab", "href" => "#favoritos", "aria-control" => "favoritos"],
    ["name" => "Compras", "id" => "compras-tab", "href" => "#compras", "aria-control" => "compras"],
    ["name" => "Preguntas", "id" => "preguntas-tab", "href" => "#preguntas", "aria-control" => "preguntas"]
  ];
  $config = [
    ["name" => "Mis datos", "id" => "misDatos-tab", "href" => "#misDatos", "aria-control" => "misDatos"],
    ["name" => "Seguridad", "id" => "seguridad-tab", "href" => "#seguridad", "aria-control" => "seguridad"],
    ["name" => "E-mails", "id" => "eMails-tab", "href" => "#eMails", "aria-control" => "eMails"]
  ];
  $tabContent = [
    ["id" => "resumen", "aria-labelledby" => "resumen-tab", "pagina" => "pagina externa?"],
    ["id" => "facturacion", "aria-labelledby" => "facturacion-tab", "pagina" => "pagina externa?"],
    ["id" => "favoritos", "aria-labelledby" => "favoritos-tab", "pagina" => "pagina externa?"],
    ["id" => "compras", "aria-labelledby" => "compras-tab", "pagina" => "pagina externa?"],
    ["id" => "preguntas", "aria-labelledby" => "preguntas-tab", "pagina" => "pagina externa?"],
    ["id" => "misDatos", "aria-labelledby" => "misDatos-tab", "pagina" => "Mis datos.php"],
    ["id" => "seguridad", "aria-labelledby" => "favoritos-tab", "pagina" => "pagina externa?"],
    ["id" => "eMails", "aria-labelledby" => "eMails-tab", "pagina" => "pagina externa?"],
  ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce | Perfil</title>
    <link rel="stylesheet" href="css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="bg-perfil">

    <?php require_once("header.php"); ?>

    <!--inicia seccion perfil-->
    <div class="row">
      <div class="col-12 col-md-3">
        <section class="navbar-perfil">
          <nav class="navbar sticky-top navbar-light bg-celeste d-flex flex-column align-items-center icon-size rounded-right shadow-sm">
            <img class="logo-perfil" src="img/user.jpg" alt="">
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
              <a class="navbar-brand" href="#"><i class="fa fa-bars"></i>Mi cuenta</a>
            </button>
            <span>¡Hola Usuario!</span>
            <div class="collapse show" id="navbarNavDropdown">
              <ul class="nav navbar-nav" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="resumen-tab" href="#resumen" data-toggle="tab" role="tab" aria-controls="resumen" aria-selected="true">
                    <i class="fa fa-list-alt"></i>Resumen
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="facturacion-tab" href="#facturacion" data-toggle="tab" role="tab" aria-controls="facturacion" aria-selected="false">
                    <ion-icon name="card"></ion-icon>Facturación
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-bag"></i>Compras
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php foreach ($compras as $item) : ?>
                      <a class="dropdown-item" id="<?=$item["id"]?>" href="<?=$item["href"]?>" data-toggle="tab" role="tab" aria-controls="<?=$item["aria-controls"]?>" aria-selected="false">
                        <?=$item["name"]?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog"></i>Configuración
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php foreach ($config as $item) : ?>
                      <a class="dropdown-item" id="<?=$item["id"]?>" href="<?=$item["href"]?>" data-toggle="tab" role="tab" aria-controls="<?=$item["aria-controls"]?>" aria-selected="false">
                        <?=$item["name"]?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </section>
      </div>
      <!--contenido para los nav-items-->
      <div class="col-12 col-md-9">
        <section class="tab-content">
          <?php foreach ($tabContent as $content): ?>
            <?php if ($content["id"] == "resumen"): ?>
              <div class="tab-pane fade show active" id="<?=$content["id"]?>" role="tabpanel" aria-labelledby="<?=$content["aria-labelledby"]?>">
                Contenido de <?=$content["id"]?> en construcción!
              </div>
            <?php else: ?>
              <div class="tab-pane fade show" id="<?=$content["id"]?>" role="tabpanel" aria-labelledby="<?=$content["aria-labelledby"]?>">
                <?php include_once("./perfil.component/".$content["pagina"]); ?>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </section>
      </div>
    </div>
    <!--finaliza seccion perfil-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php require_once("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
