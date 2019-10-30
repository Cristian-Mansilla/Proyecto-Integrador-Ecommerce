<?php require_once("./funciones/funcionesSelect.php");

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
$prods = traerProductosPorCategorias(2, $dbh);
echo $prods[0]["Img"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class='col-12 row border-bottom m-0' style='height:220px;'>
      <a href='vistaProducto.php?img=$ruta&titulo=$titulo&precio=$precio' class='col-12 row text-decoration-none text-dark'>
      <div class='col-4 p-4'>
        <img src='funciones/leerImg.php?img=<?php echo $prods[0]["Img"]; ?>' height='160' width='160'>
      </div>
      <div class='col-8 p-5 row'>
        <h4 class='col-12'><?php echo $prods[0]["Titulo"]; ?></h4>
        <h2 class='col-5'><?php echo $prods[0]["Precio"]; ?></h2>
        <h4 class='col-5'><?php echo $prods[0]["Stock"]; ?></h4>

      </div>
      </a>
    </div>
  </body>
</html>
