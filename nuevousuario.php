<?php
$email_to = "paoladf.it@gmail.com";
$email_subject = "Contacto desde el sitio web";

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Apellido: " . $_POST['apellido'] . "\n";
$email_message .= "Tipo Documento: " . $_POST['tipodoc'] . "\n";
$email_message .= "Documento: " . $_POST['num'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}