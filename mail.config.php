<?php
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	require 'src/Exception.php';
	require 'src/OAuth.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	
	# Datos del Servidor SMTP
	define("SERVIDOR", 'smtp.gmail.com');
	define("ENCRIPTACION", 'ssl');
	define("PUERTO", 465);
	
	# Datos de la cuenta de envio
	define("USUARIO", 'leandroserapio95@gmail.com');
	define("CLAVE", 'sferoflex098765');

	$mail = new PHPMailer();

	# Configuracion del sistema de envio
	$mail->isSMTP();
	$mail->Host = SERVIDOR;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = ENCRIPTACION;
	$mail->Port = PUERTO;
	$mail->Username = USUARIO;
	$mail->Password = CLAVE;
?>