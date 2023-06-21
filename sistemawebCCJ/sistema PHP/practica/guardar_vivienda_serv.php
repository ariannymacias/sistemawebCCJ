<?php

include ("Conexiones.php");


$id_vivienda = $_POST['id_vivienda'];

$id_servicio = $_POST['id_servicio'];

$comentario = $_POST['comentario'];

$sql = "INSERT INTO servicio_to_vivienda ( id_vivienda,  id_servicio ,  comentario) 
VALUES ( '$id_vivienda', '$id_servicio',  '$comentario')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: servicios_vivienda.php');

