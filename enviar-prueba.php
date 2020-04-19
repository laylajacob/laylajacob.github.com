<?php
$nombre=$POST["Nombre"];
$correo=$POST["Correo"];
$telefono=$POST["Telefono"];
$mensaje=$POST["Mensaje"];

$body="Nombre :" . $nombre . "<br>Correo: ". $correo . "<br>Telefono: ". $telefono . "<br>Mensaje: ". $mensaje .  . 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'andres.silyan@gmail.com';                     // SMTP username
    $mail->Password   = 'tony960715sy';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('andres.silyan@gmail.com', 'andressilva');
    $mail->addAddress('andres.silyan@gmail.com');     // Add a recipient
    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'prueba';
    $mail->Body    = 'esto es un correo de prueba';
   

    $mail->send();
    echo '<script>
      alert("mensaje enviado");
      windows.histroy.go(-1);
      </script>'
} catch (Exception $e) {
    echo "hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}