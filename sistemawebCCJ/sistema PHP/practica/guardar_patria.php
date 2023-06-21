<?php

include ("Conexiones.php");


$id_habitantes= $_POST['id_habitantes'];

$codigo = $_POST['codigo'];
$serial = $_POST['serial'];

$observ = $_POST['observ'];
$carnets = $_POST['carnets'];
$status = $_POST['status'];
$sql = "INSERT INTO habitantes_to_sistema_patrias ( id_habitantes,  codigo, serial,  observ, carnets, status) 
VALUES ( '$id_habitantes', '$codigo', '$serial',  '$observ', '$carnets', '$status')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_patria.php');

