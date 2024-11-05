<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    // Aquí puedes enviar el correo o guardar los datos en la base de datos
    $to = "tu-email@dominio.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Gracias por tu mensaje, $nombre. Te responderemos pronto.";
    } else {
        echo "Hubo un problema al enviar tu mensaje. Por favor, intenta de nuevo.";
    }
}
?>
