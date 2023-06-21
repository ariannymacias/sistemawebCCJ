<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">agregar usuario</h1>


    <div class="container">

    <form action="guardar.php" method="POST">
  <div class="mb-3">
    <label  class="form-label">nombre</label>
    <input type="text" name="nombre_usuario"class="form-control">
    
  </div>

  <div class="mb-3">
    <label  class="form-label">clave</label>
    <input type="text" name="clave" class="form-control">
    
  </div class="mb-3"> 

   <div class="mb-3">

   <label for="">Niveles</label>
  <select class="form-select mb-3" name="id_nivel">
  <option selected disable>--seleccionar nivel--</option>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM niveles");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_nivel'].">
    ".$resultado['nivel']."</option>";
  }
  
  ?>
   </div>
 
</select>

  <div class="mb-3">
  <label for="">Status</label>
  <select class="form-select mb-3" name="id_status">
  <option selected disable>--seleccionar status--</option>

  <?php 
  
  include("Conexiones.php");

  $sql = $conexion->query("SELECT * FROM status");
  while ($resultado = $sql->fetch_assoc()) {
    echo "<option value=".$resultado['id_status'].">
    ".$resultado['nombre_statu']."</option>";
  }
  
  ?>
   </div>
 
</select>
  </div>

  <div class="text-center">
    
  <button type="submit" class="btn btn-primary ">enviar</button>
  <a href="relacional.php" class="btn btn-dark"> regresar</a>
  </div>
 
  
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>