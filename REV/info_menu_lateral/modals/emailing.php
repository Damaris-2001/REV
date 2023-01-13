<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //Obtain many usermail and password from https://myaccount.google.com/lesssecureapps

    
    //Este es un ejemplo de envio de correo con PHPMailer
    $mail->Username = 'dama.mendoza456@gmail.com';
    $mail->Password = 'zdlnjnxokafdjoit'; 
    

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->CharSet = 'UTF-8';
    $mail->Port = 587;


    $mail->addAddress($correo, $mensaje);
    //$mail->addCC('@gmail.com');

    //PARA MANDAR DOCUMENTACION
    //$mail->addAttachment('docs/dashboard.png', 'Dashboard.png');

    $mail->isHTML(true);
    $mail->Subject = 'Recuperacion de contraseña ISOTROL-CERCOER';
    
    //$mail->Body = 'Hola, <br/>Tu contraseña de CERCOER es <b>Gmail</b>.';
    $mail->msgHTML('El correo de usuario es: '.$correo.' y su mensaje es: '.$mensaje.'. La nueva URL es <a href=""></a>');
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
    //$mail->send();

    echo 'Correo enviado';
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}
?>