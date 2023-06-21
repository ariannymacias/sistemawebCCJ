<?php
	
	require "conexion.php";
	
	session_start();
	
	if($_POST){
		
		$email = $_POST['email'];
		$clave = md5($_POST['clave']);
		
		$sql = "SELECT id_usuario , clave, email, nombre_usuario, status, id_nivel FROM usuarios WHERE email='$email'";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['clave'];
			
			$pass_c = ($clave);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id_usuario'] = $row['id_usuario'];
				$_SESSION['nombre_usuario'] = $row['nombre_usuario'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['status'] = $row['status'];
                $_SESSION['id_nivel'] = $row['id_nivel'];
				
				header("Location: lista_de_habitante.php");
				
			} else {
			
			echo "La contraseña no coincide";
			
			}
			
			
			} else {
			echo "NO existe usuario";
		}
		
		
		
	}
	
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="styles.css">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
	<link href="estilo_ojo.css" rel="stylesheet" />
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    
</head>
<body>
    <section class="Login">
        <h5>Bienvenidos</h5>
        <form method= "POST" action= "<?php echo $_SERVER [ 'PHP_SELF']; ?>">
            <div class="form-floating mb-3">
                 <input class="controls" id="email" name="email" type="email" placeholder="correo electronico" />
                
           </div>
            <div class="form-floating mb-3 wrapp-input">
			
            <input class="controls" id="inputPassword" name="clave" type="password" placeholder="Password" />
                
                                                
           
                                                
             <button type="submit" href="" class="buttons ">Acceder</button>
			 <br>

			 <br>
			 <div class="text-center">
			 <a href="recuperar.php"><h6>Recuperar Contraseña</h6></a>
			 </div>
			 <?php 
			 if(isset($_GET['message'])){

			 ?>
			 <div class="alert alert-primary" role="alert">

			 <?php 
			 
			 switch($_GET['message']){

			case 'ok';
			echo 'Por favor, revisa tu correo electronico';
			break;

			case 'success_password';
			echo 'Ingresa con tu nueva contraseña';
			break;


			default;
				echo 'Algo salio mal, intenta de nuevo';
			break;


			 }
			
			 ?>
			
			</div> 
			

			 <?php 
			 
			}
			 ?>


			 
     </div>
      
        
    </section>


	

	
</body>
</html>