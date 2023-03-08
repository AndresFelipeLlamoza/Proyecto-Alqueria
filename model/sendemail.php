<?php 

$correo = $_POST['correo'];

$to = $correo;
$subject = "Mensaje";
$message = "This is a notification email from PHP. Enjoy ";
$headers = "From: llamozafelipe@gmail.com\r\n" .
           "Reply-To: llamozafelipe@gmail.com \r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Notification email sent successfully.";
} else {
    echo "Failed to send notification email.";
}


?>