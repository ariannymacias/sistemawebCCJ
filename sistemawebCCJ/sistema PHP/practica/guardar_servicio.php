<?php

include('db.php');

if (isset($_POST['guardar_servicios'])) {
  $id_servicio = $_POST['id_servicio'];
  $servicios = $_POST['servicios'];
  $status = $_POST['status'];
  $observacion = $_POST['observacion'];
  
  $query = "INSERT INTO servicios (id_servicio, servicios, status, observacion) VALUES 
  ('$id_servicio', '$servicios', '$status', '$observacion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_servicios.php');

}

?>
