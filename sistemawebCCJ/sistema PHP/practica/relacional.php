<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"><h1 class="text-center">Listado de productos</h1></div>
    <br>
    <div class="container">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">clave</th>
      <th scope="col">estatus</th>
      <th scope="col">nivel</th>
      <th scope="col">accion</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    
    require ("Conexiones.php");

    $sql = $conexion->query("SELECT * FROM usuarios 
    INNER JOIN niveles ON usuarios.id_nivel = niveles.id_nivel
    INNER JOIN status ON usuarios.id_status = status.id_status");


    while ($resultado = $sql-> fetch_assoc()){

        ?> 
    <tr>
      <th scope="row"><?php echo $resultado ['id_usuario']?></th>
      <th scope="row"><?php echo $resultado ['nombre_usuario']?></th>
      <th scope="row"><?php echo $resultado ['clave']?></th>
      <th scope="row"><?php echo $resultado ['id_status']?></th>
      <th scope="row"><?php echo $resultado ['id_nivel']?></th>
      <th> <a href="edit.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary">
            <i class="fas fa-marker"></i> 
            </a>
            <a href="delete_task.php?id=<?php echo $row['id_usuario']?>" class="btn btn-danger">
           <i class="far fa-trash-alt"></i>
            </a> </th>
      
    </tr>



        <?php
    }
    
    
    ?>
   
   
  </tbody>
</table>

    <div class="container">

    <a href="insertar.php" class="btn btn-success">agregar usuario</a>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>




