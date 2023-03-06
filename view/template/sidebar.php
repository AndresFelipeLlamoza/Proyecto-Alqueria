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
    <script src="/proyectoalqueria/view/js/hidesidebar.js"></script>
    <title>Portal de operaciones</title>
</head>
<body>
   <div id="sidebar" >
    <div class="buttonhideside">
        <button id="hidecont" onclick="hideside()"><i class='bx bx-left-arrow-alt'></i></button>
    </div>
    <div>
        <ul class="sideitems">
            <center><div class="imgcontain"> <img id="sideimg" src="./img/logo.webp" alt=""><li></li></div></center>
            <a class="sidelinks" href="/proyectoalqueria/view/contratists.php"><li id="link"><i class='bx bx-group bx-sm'></i> <p id="sidelinktext1"> Contratistas</p></li></a>
            <a class="sidelinks" href="/proyectoalqueria/view/dshb_control.php"><li id="link"><i class='bx bx-paperclip bx-sm'></i><p id="sidelinktext2"> Control Documental</p></li></a>
            <a class="sidelinks" href="#"><li id="link"><i class='bx bxs-t-shirt bx-sm'> </i><p id="sidelinktext3"> Entrega de dotacion</p></li></a>
            <a class="sidelinks" href="#"><li id="link"><i class='bx bx-stats bx-sm'></i><p id="sidelinktext4"> Graficas</p></li></a>
        </ul>
    </div>

    <div>
    <hr >
        <ul class="sideitems">
        <a class="sidelinks" href="#"><li id="link"><i class='bx bx-user bx-sm'></i><p id="sidelinktext5"><h3><?php echo $_SESSION["usuario"]?></h3> </p></li></a>
        <a class="sidelinks"href="/proyectoalqueria/view/account.php"><li id="link"><i class='bx bx-sm bx-info-circle' ></i><p id="sidelinktext6"> Mi cuenta</p></li></a>
        <a class="sidelinks" href="/proyectoalqueria/model/closesion.php"><li id="link"><i class='bx bx-exit bx-sm' ></i><p id="sidelinktext7"> Cerrar Sesion</p></li></a>
        </ul>
    </div>
   </div> 
</body>
</html>