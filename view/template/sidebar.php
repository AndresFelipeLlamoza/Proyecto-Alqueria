<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyectoalqueria/view/css/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
   <div class="sidebar">
    <div>
        <ul class="sideitems">
            <li><center><img class="sideimg" src="./img/logo.webp" alt=""></center></li>
            <li class="link"><a href="#">Contratistas <i class='bx bx-group bx-sm'></i></a></li>
            <li class="link"><a href="#">Control Documental <i class='bx bx-paperclip bx-sm'></i></a></li>
            <li class="link"><a href="#">Entrega de dotacion <i class='bx bxs-t-shirt bx-sm'></i></a></li>
            <li class="link"><a href="#">Graficas <i class='bx bx-stats bx-sm'></i></a></li>
        </ul>
    </div>
    <div>
        <ul class="sideitems">
            <li class="link"><a href="#">Bienvenido: <?php echo $_SESSION["usuario"]?></a></li>
            <li class="link"><a href="#">Informacion de la cuenta</a></li>
            <li class="link"><a href="/proyectoalqueria/model/closesion.php">Cerrar Sesion</a></li>
        </ul>
    </div>
   </div> 
</body>
</html>