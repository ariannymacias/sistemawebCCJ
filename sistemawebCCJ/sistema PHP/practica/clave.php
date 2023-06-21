<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="css/styles.css" rel="stylesheet" />
    
	<link rel="stylesheet" href="styles.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    
</head>
<body>

<form method= "POST" class="form-group" action="listas/clave.php">

<section class="Login">
       <h2 class="h3 mb-3 fw-normal"for="">Nueva clave</h2>
 
            <div class="form-floating mb-3">
                 <input class="controls form-control form-control-lg" id="email" name="new_password" type="password" width="100px"  />
                <input type="hidden" name="id_usuario" value="<?php echo $_GET['id'];?>" >
           </div>
                  
           
           <br>
             <button type="submit" href="" class="buttons btn btn-primary">Nueva Clave</button>
             
             <br>
             

             <br>
			 <div class="text-center">
			 <a href="loginyura.php"><h6>Volver</h6></a>
			 </div>
     </div>
      
        
    </section>
</form>
    
</body>
</html>