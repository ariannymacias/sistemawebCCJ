<?php
	
	require_once ('../conexion.php');
	
	
		
    $id_usuario = $_POST['id_usuario'];
		$clave = md5($_POST['new_password']);
		
		$sql = "UPDATE usuarios SET clave = '$clave' WHERE id_usuario= $id_usuario";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		
		
		
            header ("location:../lista_de_habitante.php?=success_password");

            

            ?>
        