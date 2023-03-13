<?php 
    date_default_timezone_set("America/Bogota");
    include ("../view/template/sidebar.php");
    error_reporting(0);
    if(!isset($_SESSION['usuario'])){
        echo '<script>alert("Debes iniciar sesion en la pagina web");window.location="/proyectoalqueria"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./js/hidesidebar.js"></script>
    <link rel="stylesheet" href="./css/control.css">
    <title>Portal de operaciones</title>
</head>
<body>
    <div id="cuerpocontainer">
        <div class="navcontainer">
        <h2>Control Documental Contratistas</h2>
        </div>
    </div>
</body>
</html>