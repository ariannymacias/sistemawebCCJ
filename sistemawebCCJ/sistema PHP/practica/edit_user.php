<?php

include("connection.php");
$con = connection();

$id_usuario=$_POST["id_usuario"];
$nombre_usuario = $_POST['nombre_usuario'];
$clave =md5($_POST['clave'];) 
$email = $_POST['email'];
$id_status = $_POST['id_status'];
$id_nivel = $_POST['id_nivel'];
$observacion = $_POST['observacion'];

$sql="UPDATE usuarios SET  nombre_usuario='$nombre_usuario', clave='$clave',
 email='$email', id_status='$id_status', id_nivel='$id_nivel', observacion='$observacion' WHERE id_usuario='$id_usuario'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: lista_de_usuarios.php");
};
?>