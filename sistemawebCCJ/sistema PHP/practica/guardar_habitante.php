<?php

include('db.php');

if (isset($_POST['guardar_habitante'])) {
  $id_habitantes  = $_POST['id_habitantes'];
  $primer_nombre	 = $_POST['primer_nombre'];
  $segundo_nombre = $_POST['segundo_nombre'];
  $primer_apellido = $_POST['primer_apellido'];
  $segundo_apellido  = $_POST['segundo_apellido'];
  $nacionalidad  = $_POST['nacionalidad'];
  $cedula  = $_POST['cedula'];
  $fecha_nacimiento  = $_POST['fecha_nacimiento'];
  $correo  = $_POST['correo'];
  $telefono  = $_POST['telefono'];
  $sexo  = $_POST['sexo'];
  $observacion  = $_POST['observacion'];
  $codigo_telefono  = $_POST['codigo_telefono'];
  $query = "INSERT INTO habitantes (id_habitantes , primer_nombre, segundo_nombre, 	primer_apellido, segundo_apellido, nacionalidad, cedula, fecha_nacimiento, correo, telefono, sexo, observacion, codigo_telefono) 
  VALUES ('$id_habitantes', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$nacionalidad','$cedula', '$fecha_nacimiento', '$correo', '$telefono', '$sexo' , '$observacion', '$codigo_telefono' )";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: lista_de_habitante.php');

}

?>