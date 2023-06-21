<?php

include ("Conexiones.php");


$id_habitantes = $_POST['id_habitantes'];

$id_vulnerabilidad = $_POST['id_vulnerabilidad'];

$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO habitantes_vul ( id_habitantes,  id_vulnerabilidad,  observaciones) 
VALUES ( '$id_habitantes', '$id_vulnerabilidad',  '$observaciones')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_habitantes_vul.php');

