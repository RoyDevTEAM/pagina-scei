<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "tucorreo@gmail.com"; // Reemplaza con tu dirección de correo real
    $asunto = "Mensaje de contacto desde tu sitio web";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo Electrónico: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    $cabeceras = "From: $email" . "\r\n" .
                 "Reply-To: $email" . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();

    // Configura las credenciales de Gmail (OAuth2)
    $client_id = "tuiddeclientdeoauth";
    $client_secret = "tusecreto";
    $refresh_token = "tutokenrefresh";
    
    $url = "https://www.googleapis.com/gmail/v1/users/me/messages/send";
    
    $mensaje_base64 = base64_encode($contenido);
    
    $data = [
        "raw" => $mensaje_base64
    ];
    
    $data = json_encode($data);
    
    $access_token = "tuaccess_token";
    
    $headers = [
        "Authorization: Bearer $access_token",
        "Content-Type: application/json"
    ];
    
    // Envía el correo utilizando Gmail API y cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    if ($response) {
        // El correo se envió con éxito
        echo "Correo enviado con éxito";
    } else {
        // Error al enviar el correo
        echo "Hubo un error al enviar el correo. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si se intenta acceder al archivo directamente, redirige al formulario de contacto
    header("Location: contacto.php");
    exit;
}
?>
