<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/index.css">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("America/Bogota");
    include ("./model/conection.php");
    ?>
    <div class="logincontainer">
        <div>
            <img class="loginimage" src="./view/img/formimage.jpg" alt="" srcset="" href="#">
        </div>
           <form action="./model/login.php" method="POST" class="loginform">
            <center><img class="iconsign" src="./view/img/logo.webp" alt="" srcset=""></center>
           <p>Nombre de usuario</p>
           <input class="usrinput" type="text" size="35px"name="usuario" id="">
            <br>
            <p>Contraseña</p>
            <input class="usrinput" type="password" size="35px" name="clave" id="">
            <br>
            <input type="checkbox" name="recordar" id="">
            <label for="checkbox">Recordar contraseña</label>
            <br>
            <br>
            <p style="text-align: center;">¿Olvido la contraseña? Haga click <span><a href="#">aqui</a></span></p>
            <center><button class="buttonsign" type="submit">Ingresar</button></center>
        </form>
    </div>
</body>
</html>