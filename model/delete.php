<?php 
include ("conection.php");
include ("notifications.php");
$id = $_GET["id"];
$Nombre = $_GET["Nombre"];
$deleteq = "UPDATE contratistas SET Estado='Retirado' WHERE id = '$id' AND Nombre = '$Nombre'";
$result = mysqli_query($conex, $deleteq);

if (isset($result)){
    echo "<script>alert('El contratista fue retirado de forma exitosa'); window.location='../view/contratists.php'</script>";
}else{
    echo "<script>alert('Error al retirar al contratista'); window.location='../view/contratists.php'</script>";
}
$message = "El contratista ".$Nombre." ha sido retirado como contratista de distribucion";
crearNotificacion($message);
?>