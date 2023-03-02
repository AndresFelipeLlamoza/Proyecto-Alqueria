<?php 
include ("conection.php");

$nombre = $_POST["nombre"];
$celular = $_POST["celular"];
$cedula = $_POST["cedula"];
$ruta = $_POST["ruta"];

$insert = "INSERT INTO contratistas (nombre,celular,cedula,ruta) VALUES ('$nombre','$celular','$cedula','$ruta')";
$result = mysqli_query($conex, $insert);

if(isset($result)){
    echo "<script>alert('El contratista ha sido creado exitosamente');window.location='/proyectoalqueria/view/contratists.php'</script>";
}else{
     echo "<script>alert('Error al crear al contratista')</script>";
}
?>