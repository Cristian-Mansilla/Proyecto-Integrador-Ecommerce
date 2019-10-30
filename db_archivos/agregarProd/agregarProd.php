<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="agregarProdDB.php" method="post" enctype="multipart/form-data">

    Titulo <input type="text" name="titulo" value="">
    <br>
    <br>
    Precio <input type="number" name="precio" value="">
    <br>
    <br>
    Stock <input type="number" name="stock" value="">
    <br>
    <br>
    Imagen <input type="file" name="img">
    <br>
    <br>
    Categorias <select class="" name="categoria">
                <option selected value="0"> Elige una opción </option>
                 <optgroup label="Tecnologia">
                   <option value="1">Televisores</option>
                   <option value="2">Celulares</option>
                 </optgroup>
               </select>
              <br>
              <br>
    Marcas <select name="marca">
              <option selected value="0"> Elige una opción </option>

               <optgroup label="Televisores">
                 <option value="1">Phillips</option>
                 <option value="2">Lenovo</option>
               </optgroup>
               <optgroup label="Celulares">
                 <option value="3">Motorola</option>
                 <option value="4">Samsung</option>
                 <option value="5">Xiaomi</option>
                 <option value="6">Nokia</option>
                 <option value="7">Apple</option>
                 <option value="8">LG</option>
               </optgroup>


            </select>
            <br><br>
            <input type="submit" value="Upload Product" name="submit">
    </form>
  </body>
</html>
