<?php 

$para = 'relacionespublicas@museodelferrocarril.gob.mx'; 

$asunto = $_POST["asunto"]; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Nombre: ".$_POST["nombre"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Telefono: ".$_POST["telefono"]."<br>"; 
$MESSAGE_BODY .= "Asunto: ".$_POST["asunto"]."<br>";
$MESSAGE_BODY .= "Mensaje: ".nl2br($_POST["mensaje"])."<br>"; 
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Formulario !"); 



header('Status: 301 Moved Permanently', false, 301);
header('Location: /http://mueseodelferrocarril.gob.mx');
exit();
?>