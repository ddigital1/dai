<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = test_input($_POST["nombre"]);
	$direccion = test_input($_POST["direccion"]);
	$telefono = test_input($_POST["telefono"]);
$email = test_input($_POST["email"]);
$asunto = test_input($_POST["asunto"]);
$mensaje = test_input($_POST["mensaje"]);

$destinatario = "daicompresores@directoslp.com"; // Reemplazar con tu correo electrónico
$asunto_email = "Formulario de contacto";
$mensaje_email = "Nombre: " . $nombre . "\n" .
				 "Dirección: " . $direccion . "\n" .
				 "Teléfono: " . $telefono . "\n" .
				 "Email: " . $email . "\n" .
				 "Asunto: " . $asunto . "\n\n" .
				 $mensaje;

$headers = "From: " . $email . "\r\n" .
		   "Reply-To: " . $email . "\r\n" .
		   "X-Mailer: PHP/" . phpversion(8.1);

if (mail($destinatario, $asunto_email, $mensaje_email, $headers)) {
	echo "Gracias por su mensaje. Nos pondremos en contacto con usted pronto.";
} else {
	echo "Lo sentimos, hubo un error al enviar su mensaje. Por favor, inténtelo de nuevo más tarde.";
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>