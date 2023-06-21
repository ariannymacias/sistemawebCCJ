<?php

include ("Conexiones.php");


$nombre_usuario= $_POST['nombre_usuario'];
$clave = md5($_POST['clave']);
$email = $_POST['email'];
$id_nivel = $_POST['id_nivel'];
$status = $_POST['status'];
$observacion = $_POST['observacion'];
$sql = "INSERT INTO usuarios ( nombre_usuario, clave, email, status, id_nivel, observacion ) VALUES ( '$nombre_usuario',
'$clave', '$email' ,'$status', '$id_nivel', '$observacion')";


$resultado = mysqli_query($conexion, $sql);

if(!$resultado) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_usuarios.php');

