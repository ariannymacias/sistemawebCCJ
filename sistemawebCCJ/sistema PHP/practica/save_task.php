<?php

include('db.php');
include('conex.php');

if (isset($_POST['save_task'])) {
  $id_usuario = $_POST['id_usuario'];
  $nombre_usuario	 = $_POST['nombre_usuario'];
  $clave = $_POST['clave'];
  $id_status = $_POST['id_status'];
  $id_nivel  = $_POST['id_nivel'];
  $query = "INSERT INTO usuarios (id_usuario, nombre_usuario, clave, id_status, id_nivel ) VALUES ('$id_usuario', '$Nombre_usuario',
   '$clave', '$id_status', '$id_nivel')";  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: usuarios.php');

}

?>
