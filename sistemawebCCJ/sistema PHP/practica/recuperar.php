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
    <section class="Login">
       <h6 class="h3 mb-3 fw-normal"for="">Recuperar clave</h6>
       <label for="">Ingrese correo electronico registrado</label>
        <form method= "POST" action="listas/mail.php">
            <div class="form-floating mb-3">
                 <input class="controls form-control form-control-lg" id="email" name="email" type="email" width="100px" placeholder="name@example.com" />
                
           </div>
                                                
             <button type="submit" href="" class="buttons btn btn-primary">Recuperar Clave</button>
             
             <br>
             <br>
			 <div class="text-center">
			 <a href="loginyura.php"><h6>Volver</h6></a>
			 </div>
     </div>
      
        
    </section>
</body>
</html>