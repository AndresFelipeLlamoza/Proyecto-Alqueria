<?php 
include ('conection.php');
include ('notifications.php');
$notificaciones = notificacionesNoLeidas($conex);
echo json_encode(['notificaciones' => $notificaciones]);
?>