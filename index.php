<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $datos = $_POST["datos"];
    $tiempo = $_POST["tiempo"];
    $num_personas = $_POST["num_personas"];

    $destinatario = "desing.grafiz@gmail.com"; // Reemplaza con tu dirección de correo

    $asunto = "Nuevo formulario de contacto";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Datos: $datos\n";
    $mensaje .= "Tiempo: $tiempo\n";
    $mensaje .= "Número de Personas: $num_personas\n";

    // Puedes personalizar el formato del mensaje según tus necesidades

    mail($destinatario, $asunto, $mensaje);

    // Puedes redirigir a una página de confirmación
    header("Location: confirmacion.html");
}
?>
