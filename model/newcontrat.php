<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("conection.php");
include ("notifications.php");
$nombre = $_POST["nombre"];
$celular = $_POST["celular"];
$cedula = $_POST["cedula"];
$placa = $_POST["placa"];
$routeselect = $_POST["routeselect"];
$perfilname = $_FILES['perfil']['name'];
$perfilpath = "../view/profiles/" . $perfilname;
move_uploaded_file($_FILES['perfil']['tmp_name'],$perfilpath);

$maxSize = 20971520;
$allowedTypes = array('jpg', 'png', 'gif');
if ($_FILES['perfil']['error'] !== UPLOAD_ERR_OK){
    echo "<script>alert('Error al subir el archivo.');window.history.go(-1)</script>";
    die();
}
$fileType = strtolower(pathinfo($_FILES['perfil']['name'], PATHINFO_EXTENSION));
if (!in_array($fileType, $allowedTypes)) {
    echo "<script>alert('Error al subir el archivo: formato no permitido');window.history.go(-1)</script>";
    die();
}

if ($_FILES['perfil']['size'] > $maxSize) {
    echo "<script>alert('Error al subir el archivo: tamaño máximo excedido');window.history.go(-1)</script>";
    die();
}

$insert = "INSERT INTO contratistas (Nombre,Celular,Cedula,Placa,Perfil,id_ruta) VALUES (?,?,?,?,?,?)";
$stmt = mysqli_prepare($conex, $insert);
mysqli_stmt_bind_param($stmt, 'siissi', $nombre, $celular, $cedula, $placa, $perfilpath, $routeselect);
$result = mysqli_stmt_execute($stmt);

if(isset($result)){
    echo "<script>alert('El contratista ha sido creado exitosamente');window.location='../view/contratists.php'</script>";
}else{
     echo "<script>alert('Error al crear al contratista')</script>";
}

$mensaje = 'El contratista '.$nombre.' ha sido creado en la plataforma';
crearNotificacion($mensaje)

?>

