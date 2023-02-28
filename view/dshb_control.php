<?php 
    date_default_timezone_set("America/Bogota");
    include ("../view/template/sidebar.php");
    session_start();
    if (isset($_SESSION["usuario"])){
        echo "ok";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Portal de operaciones</title>
</head>
<body>
    
</body>
</html>