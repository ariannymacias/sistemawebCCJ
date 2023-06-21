<?php

include('db.php');

if (isset($_POST['guardar_vivienda'])) {
  $id_vivienda  = $_POST['id_vivienda'];
  $numero_casa	 = $_POST['numero_casa'];
  $ubicacion = $_POST['ubicacion'];
  $color_casa = $_POST['color_casa'];
  $habitaciones  = $_POST['habitaciones'];
  $baños  = $_POST['baños'];
  
  $observacion  = $_POST['observacion'];
  
  $query = "INSERT INTO vivienda (id_vivienda , numero_casa, ubicacion, color_casa, 
  habitaciones,baños,  observacion) 
  VALUES ('$id_vivienda', '$numero_casa', '$ubicacion', '$color_casa', 
  '$habitaciones', '$baños', '$observacion' )";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_vivienda.php');

}

?>