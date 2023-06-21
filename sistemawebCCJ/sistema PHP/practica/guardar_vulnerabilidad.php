<?php

include('db.php');

if (isset($_POST['guardar_vulnerabilidad'])) {
  $id_vulnerabilidad = $_POST['id_vulnerabilidad'];
  $vulnerabilidad = $_POST['vulnerabilidad'];
  $observacion = $_POST['observacion'];
  
  $query = "INSERT INTO vulnerabilidad (id_vulnerabilidad, vulnerabilidad, observacion) VALUES 
  ('$id_vulnerabilidad', '$vulnerabilidad', '$observacion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_vulnerabilidad.php');

}

?>
