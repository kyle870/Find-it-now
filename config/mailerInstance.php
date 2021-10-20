<?php
//Creación de nueva instancia del mailer
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = 'osmarquintero87@gmail.com'; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username = 'osmarquintero87@gmail.com'; //nombre usuario
$mail->Password = 'programacion6'; //contraseña
