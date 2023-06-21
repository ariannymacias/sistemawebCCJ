


<?php

include ("Conexiones.php");


$bono = $_POST['bono'];
  $status = $_POST['status'];
$observacion = $_POST['observacion'];

$sql = "INSERT INTO bonos (bono, status, observacion) VALUES 
( '$bono', '$status', '$observacion')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_bonos.php');

