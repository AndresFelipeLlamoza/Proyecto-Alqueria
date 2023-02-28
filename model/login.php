<?php
date_default_timezone_set("America/Bogota");
session_start();
include ("conection.php");

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$read = mysqli_query($conex, "SELECT * FROM especialistas WHERE Usuario = '".$usuario."' and Clave = '".$clave."'");
$nr = mysqli_fetch_array($read);

if(isset($nr)){
    $_SESSION["usuario"] = $usuario;
    header("Location: /proyectoalqueria/view/dshb_control.php");
}else{
    echo "<script>alert('Usuario o contraseña incorrecta');window.history.go(-1)</script>";
    die();
}


?>