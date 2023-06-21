<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;
	
	require '../PHPMailer/Exception.php';
	require '../PHPMailer/PHPMailer.php';
	require '../PHPMailer/SMTP.php';
	
	require_once "../conexion.php";
	
	
		
		$email = $_POST['email'];
		
		
		$sql = "SELECT id_usuario , clave, email, nombre_usuario, id_status, id_nivel FROM usuarios WHERE email='$email'";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		$row = $resultado->fetch_assoc();
		
    if ($resultado->num_rows >0 ){

		//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'escalonah12@outlook.com';                     //SMTP username
    $mail->Password   = 'Gabriela.16';                               //SMTP password
    
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('escalonah12@outlook.com', 'Mailer');
    //$mail->addAddress('escalonah12@gmail.com');     //Add a recipient
    $mail->addAddress($email);               //Name is optional
    
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña';
    $mail->Body    = 'Este es un mensaje para recuperar contraseña, por favor, ingrese a la 
	pagina <a href="localhost/practica/clave.php?id='.$row['id_usuario'].'">Recuperacion de contraseña </a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
	header("Location:../loginyura.php?message=ok");
} catch (Exception $e) {
    header("Location:../loginyura.php?message=error");
}

		


    }else{
		header("Location:../loginyura.php?not_found");
    }
		
?>

