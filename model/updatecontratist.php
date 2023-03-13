<?php
date_default_timezone_set("America/Bogota");
include ("conection.php");
$id = $_POST['id'];
$Nombre = $_POST['nombre'];
$Celular = $_POST['celular'];
$Cedula = $_POST['cedula'];
$Ruta = $_POST['ruta'];
$Imagen = file_get_contents($_FILES['Imagen']['tmp_name']);

$update = "UPDATE contratistas SET nombre='$Nombre' AND celular='$Celular' AND cedula='$Cedula' AND ruta='$Ruta' AND perfil='$Imagen' WHERE id='$id'";
$result = mysqli_query($conex, $update);

if (isset($result)){
    echo "<script>alert('Datos del contratista actualizados con exito'); window.location='../view/contratists.php'</script>";
}else{
    echo "<script>alert('Error al crear al contratista'); window.history.go(-1)</script>";
}

?>