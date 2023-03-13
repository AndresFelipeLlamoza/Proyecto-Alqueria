<?php 

$destino = $_POST["correo"];
$nombre = $_POST["nombre"];
$mensaje = "Envio de mensaje de prueba de la funcion mail con php";

$contenido = "Nombre: " . $nombre . "\nCorreo: " .$correo. "\nMensaje: " .$mensaje;
mail($destino, "Contacto", $contenido);
header ("Location: ../view/account.php")
?>