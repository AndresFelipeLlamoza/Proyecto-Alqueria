<?php 
include ('notifications.php');
include ('conection.php');

$noleido = 'SELECT COUNT(*) as contar FROM notificaciones WHERE leido = 0';
$stmt = $conex->prepare($noleido);
$stmt->execute();
$stmt->bind_result($contar);
$stmt->fetch();

echo json_encode(['contar' => $contar]);

?>