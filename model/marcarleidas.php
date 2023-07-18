<?php 
include ('conection.php');

if (isset($_POST['notificationIds'])) {
    $notificationIds = $_POST['notificationIds'];
    
    if (!is_array($notificationIds)) {
        $notificationIds = array($notificationIds);
    }

    $marcarLeidas = "UPDATE notificaciones SET leido = 1 WHERE id_notificacion = ?";
    $stmt = $conex->prepare($marcarLeidas);

    foreach ($notificationIds as $notificationId) {
        $stmt->bind_param('i', $notificationId);
        $stmt->execute();
    }

    $stmt->close();
    $conex->close();
}
?>
