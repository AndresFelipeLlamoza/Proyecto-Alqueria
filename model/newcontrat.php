<?php 
date_default_timezone_set("America/Bogota");
include ("conection.php");

$nombre = $_POST["nombre"];
$celular = $_POST["celular"];
$cedula = $_POST["cedula"];
$ruta = $_POST["ruta"];
$perfil = $_FILES["perfil"]['name'];

$insert = "INSERT INTO contratistas (Nombre,Celular,Cedula,Ruta,Perfil) VALUES ('$nombre','$celular','$cedula','$ruta', '$perfil')";
$result = mysqli_query($conex, $insert);

if(isset($result)){
    echo "<script>alert('El contratista ha sido creado exitosamente');window.location='/proyectoalqueria/view/contratists.php'</script>";
}else{
     echo "<script>alert('Error al crear al contratista')</script>";
}
?>