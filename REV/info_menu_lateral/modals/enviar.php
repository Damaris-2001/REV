<?php

/* RECLAMANDO VARIABLES PARA RECIBIR CADA VALOR DEL FORMULARIO */
$correo = $_POST ['correo'];
$mensaje = $_POST ['mensaje'];

$header = 'Form' . $correo . "\r \n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r \n";
$header .= "Mime-Version: 1.0 \r \n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $correo . "\r \n";
$mensaje .= "El mensaje es: " . $mensaje . "\r \n";
$mensaje .= "Mensaje para: " . $para . "\r \n";

$para = 'contacto@revolutio.com.mx';

correo($para, utf8_decode ($mensaje), $header);

header("Location: index.php");
?>