<?php
require_once './vendor/autoload.php';
include ('conection.php');
use PHPMailer\PHPMailer\PHPMailer;
$query = 'SELECT documentos.*, contratistas.Nombre FROM documentos LEFT JOIN contratistas ON documentos.id = contratistas.id WHERE Vigencia <= NOW()';
$documents = mysqli_query($conex, $query);
$fecha_actual = time();

while ($row = mysqli_fetch_assoc($documents)) {
    if (strtotime($row['Vigencia']) < $fecha_actual && $row['Vigencia'] != null) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'llamozafelipe@gmail.com';
        $mail->Password = 'mmjsimenmmqlvlwv';
        $mail->SMTPSecure = 'tls';

        $mail->setFrom('llamozafelipe@gmail.com');
        $mail->addAddress('andres.llamoza@misena.edu.co', 'Andres Felipe Llamosa');
        $mail->Subject = 'Documentos por renovar';
        $body = 'Cordial saludo, los siguientes contratistas reportan documentos vencidos:' . "\n\n";

        while ($key = mysqli_fetch_assoc($documents)) {
            $body .= $key['Nombre'] . ':' . $key['Nombre_doc'] . "\n";
        }

        $body .= "\nPor favor, su colaboración actualizandolos. Gracias.";
        $mail->Body = $body;
        if ($mail->send()) {
            echo 'Notificación de correo enviada';
        } else {
            echo 'Error al enviar la notificación de correo:';
        }
    } else if (strtotime($row['Vigencia']) > $fecha_actual && $row['Vigencia']) {
        echo 'No hay documentos vencidos!, no se precisa enviar recordatorio';
    }
}
?>