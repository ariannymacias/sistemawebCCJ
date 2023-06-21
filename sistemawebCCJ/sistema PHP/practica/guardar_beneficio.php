<?php

include('db.php');

if (isset($_POST['guardar_beneficio'])) {
  $id_beneficios = $_POST['id_beneficios'];
  $nombre_beneficio	 = $_POST['nombre_beneficio'];
  $status = $_POST['status'];
  
  $query = "INSERT INTO beneficios (id_beneficios, nombre_beneficio, status) VALUES 
  ('$id_beneficios', '$nombre_beneficio', '$status')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_beneficios.php');

}

?>







<?php

include ("Conexiones.php");


$nombre_beneficio	 = $_POST['nombre_beneficio'];
  $status = $_POST['status'];
$observacion = $_POST['observacion'];

$sql = "INSERT INTO beneficios ( nombre_beneficio, status, observacion) VALUES 
( '$nombre_beneficio', '$status', '$observacion')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_beneficios.php');


