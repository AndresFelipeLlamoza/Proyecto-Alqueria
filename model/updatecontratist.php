<?php
date_default_timezone_set("America/Bogota");
include ("conection.php");

$Nombre = $_POST['nombre'];
$Celular = $_POST['celular'];
$Cedula = $_POST['cedula'];
$Ruta = $_POST['ruta'];
$Perfil = $_POST['perfil'];
$filesdata = file_get_contents($_FILES['perfil']['tmp_name']);
move_uploaded_file($_FILES['image']['tmp_name'], "/proyectoalqueria/view/img/" ."perfil");


$update = "UPDATE contratistas SET nombre='$Nombre, celular='$Celular, cedula='$Cedula, ruta='$Ruta', perfil='$filesdata'";
$result = mysqli_query($conex, $update);

if (isset($result)){
    echo "Bien";
}else{
    echo "FATAL ERROR";
}

?>