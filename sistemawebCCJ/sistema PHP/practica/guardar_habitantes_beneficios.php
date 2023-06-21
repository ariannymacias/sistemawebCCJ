<?php

include ("Conexiones.php");


$id_habitante= $_POST['id_habitante'];

$id_beneficio = $_POST['id_beneficio'];
$id_vivienda  = $_POST['id_vivienda'];


$fecha_entrega = $_POST['fecha_entrega'];
$status = $_POST['status'];
$observacio = $_POST['observacio'];
$sql = "INSERT INTO habitantes_to_beneficios ( id_habitante,  id_beneficio, id_vivienda,  fecha_entrega, status, observacio) 
VALUES ( '$id_habitante', '$id_beneficio', '$id_vivienda ',  '$fecha_entrega', '$status', '$observacio')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: habitantes_beneficios.php');

