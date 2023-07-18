<?php 
function crearNotificacion($mensaje){
    include ('conection.php');
    $creamensaje = 'INSERT INTO notificaciones (mensaje) VALUES (?)';
    $stmt = $conex -> prepare($creamensaje);
    $stmt->bind_param('s', $mensaje);

    return $stmt->execute();
}
function notificacionesNoLeidas($conex){
    include ('conection.php');
    $noleidas = "SELECT * FROM notificaciones WHERE leido = 0 ORDER BY creado DESC";
    $stmt = $conex->prepare($noleidas);
    $stmt->execute();

    $result = $stmt->get_result();
    $notificaciones = [];

    while ($row = $result->fetch_assoc()){
        $notificaciones[] = $row;
    }
    return $notificaciones;
} 
function checkExistingNotification($message){
    include ('conection.php');
    $comprobar = "SELECT COUNT(*) AS count FROM notificaciones WHERE mensaje = ?";
    $stmt = $conex->prepare($comprobar);
    $stmt->bind_param('s', $message);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    $conex->close();
    return $data['count'] > 0;
}
?>