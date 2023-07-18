<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/sidebar.css">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../view/js/hidesidebar.js"></script>
    <title>Portal de operaciones</title>
</head>
<body>
   <div id="sidebar" >
    <div class="buttonhideside">
        <button id="hidecont" onclick="hideside()"><i class='bx bx-left-arrow-alt'></i></button>
    </div>
    <div>
        <ul class="sideitems">
            <center><div class="imgcontain"> <img id="sideimg" src="./img/iconwrapped.png" alt=""><li></li></div></center>
            <a class="sidelinks" href="../view/contratists.php"><li id="link" class="linkcenter"><i class='bx bx-group bx-sm'></i> <p id="sidelinktext"> Contratistas</p></li></a>
            <a class="sidelinks" href="../view/dshb_control.php"><li id="link" class="linkcenter"><i class='bx bx-paperclip bx-sm'></i><p id="sidelinktext"> Documentacion</p></li></a>
            <a class="sidelinks" href="#"><li id="link" class="linkcenter"><i class='bx bxs-t-shirt bx-sm'> </i><p id="sidelinktext"> Dotacion</p></li></a>
            <a class="sidelinks" href="../view/dashboard.php"><li id="link" class="linkcenter"><i class='bx bx-stats bx-sm'></i><p id="sidelinktext"> Graficas</p></li></a>
        </ul>
    </div>

    <div>
    <hr >
        <ul class="sideitems">
        <a class="sidelinks" href="#"><li id="link" class="linkcenter"><i class='bx bx-user bx-sm'></i><p id="sidelinktext"><?php echo $_SESSION["usuario"]?></p></li></a>
        <a class="sidelinks" href="../model/closesion.php"><li id="link" class="linkcenter"><i class='bx bx-exit bx-sm' ></i><p id="sidelinktext"> Cerrar Sesion</p></li></a>
        </ul>
        </ul>
    </div>
   </div> 
</body>
</html>