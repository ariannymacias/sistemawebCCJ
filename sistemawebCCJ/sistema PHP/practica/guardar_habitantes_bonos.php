<?php

include ("Conexiones.php");


$id_habitante= $_POST['id_habitante'];

$id_bono = $_POST['id_bono'];

$status = $_POST['status'];
$obse = $_POST['obse'];
$sql = "INSERT INTO habitantes_to_bonos ( id_habitante,  id_bono,  status, obse) 
VALUES ( '$id_habitante', '$id_bono', '$status', '$obse')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_habitantes_bonos.php');

