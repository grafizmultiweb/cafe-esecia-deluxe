<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Correo de destino
    $to = "desing.grafiz@gmail.com";

    // Asunto del correo
    $subject = "Nuevo mensaje de contacto";

    // Cuerpo del correo
    $body = "Nombre: $name\n";
    $body .= "Correo Electrónico: $email\n";
    $body .= "Mensaje:\n$message";

    // Cabeceras del correo
    $headers = "From: $email";

    // Envía el correo
    mail($to, $subject, $body, $headers);
}
try {
    // ...
    mail($to, $subject, $body, $headers);
    echo "Correo enviado con éxito";
} catch (Exception $e) {
    echo "Error al enviar el correo: " . $e->getMessage();
}

?>


