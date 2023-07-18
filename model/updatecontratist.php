<?php
date_default_timezone_set("America/Bogota");
include ("conection.php");
include ("notifications.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$cedula = $_POST['cedula'];
$placa = $_POST['placa'];
$routeselect = $_POST['routeselect'];
$documentname = $_FILES['document']['name'];
$documentpath = "../view/profiles/" . $documentname;
move_uploaded_file($_FILES['document']['tmp_name'],$documentpath);

$update = "UPDATE contratistas SET Nombre= ?, Celular=?, Cedula=?, Perfil=?, id_ruta=?, Placa=? WHERE id = ?";
$stmt = mysqli_prepare($conex, $update);
if (!$stmt) {
    printf("Error: %s\n", mysqli_error($conex));
    exit();
}
mysqli_stmt_bind_param($stmt, "siisisi", $nombre, $celular, $cedula, $documentpath, $routeselect, $placa, $id);
$result = mysqli_stmt_execute($stmt);

if (isset($result)){
    echo "<script>alert('Datos del contratista actualizados con exito'); window.location='../view/contratists.php'</script>";
}else{
    echo "<script>alert('Error al crear al contratista'); window.history.go(-1)</script>";
}

mysqli_stmt_close($stmt);
$mensaje = 'los datos personales del contratista '.$nombre.' han sido actualizados ';
crearNotificacion($mensaje)
?>