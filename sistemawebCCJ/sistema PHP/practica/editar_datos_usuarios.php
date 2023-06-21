<?php
include("connection.php");

$id_usuario = $_GET['id_usuario'];
$nombre_usuario= $_POST['nombre_usuario'];
$clave = md5($_POST['clave']);
$email = $_POST['email'];
$id_nivel = $_POST['id_nivel'];
$id_status = $_POST['id_status'];
$observacion = $_POST['observacion'];

$sql = "UPDATE usuarios SET 
nombre_usuario= '".$nombre_usuario."',
clave = md5('".$clave."'),
email = '".$email."',
id_nivel = '".$id_nivel."',
id_status = '".$id_estatus."',
observacion = '".$observacion."' WHERE  id_usuario = '".$id_usuario."";

if($row = mysqli_fetch_array($result)){

    header:("location:lista_de_usuarios.php");
}