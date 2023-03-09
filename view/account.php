<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/account.css">
    <script src="./js/showforms.js"></script>
    <script src="/proyectoalqueria/view/js/hidesidebar.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("America/Bogota");
    include ("../model/conection.php");
    include ("./template/sidebar.php");
    ?>
    <div id="cuerpocontainer">
        <div class="navcontainer">
            <h2>Informacion de la cuenta</h2>
        </div>
        <div class="accountcontainer">
            <div class="itemscontainer">
                <button class="updatebtns" onclick="email()">Cambiar correo electronico</button>
                <button class="updatebtns" onclick="password()">Cambiar Contraseña</button>
                <button class="updatebtns" onclick="username()">Cambiar nombre de usuario</button>
                <button class="updatebtns" onclick="profile()">Añadir una foto de perfil</button>
            </div>
            <div class="changeformscontainer">
            <div id="changemail">
                <form action="" method="post">
                    <center><i class='bx bx-envelope bx-border bx-lg'></i></center>
                    <p>Introduzca el correo electronico actual</p>
                    <input class="inputmod" type="text" name="correo">
                    <p>Introduzca el nuevo correo electronico</p>
                    <input class="inputmod" type="email" name="nuevocorreo" id="">
                    <br>
                    <br>
                    <center><input class="updatesubmit" type="submit" value="Cambiar correo"></center>
                </form>
            </div>
            <div id="changepassword" >
                <form action="" method="post">
                    <center><i class='bx bx-key bx-border bx-lg'></i></center>
                    <p>Introduzca la contraseña</p>
                    <input class="inputmod" type="password" name="contraseña" id="">
                    <p>Introduzca la nueva contraseña</p>
                    <input class="inputmod" type="password" name="nuevacontraseña" id="">
                    <br>
                    <br>
                    <center><input class="updatesubmit" type="submit" value="Cambiar contraseña"></center>
                </form>
            </div>
            <div id="changeusername">
                <form action="" method="post">
                    <center><i class='bx bxs-user bx-border bx-lg'></i></center>
                    <p>Introduzca su nombre de usuario</p>
                    <input class="inputmod" type="text" name="usuario" id="">
                    <p>Introduzca el nuevo nombre de usuario</p>
                    <input class="inputmod" type="text" name="nuevousuario" id="">
                    <br>
                    <br>
                    <center><input class="updatesubmit" type="submit" value="Cambiar nombre de usuario"></center>
                </form>
            </div>
            <div id="uploadphoto">
                <form action="updatefoto" method="post">
                    <center><i class='bx bxs-file-find bx-border bx-lg' ></i></center>
                    <p>Cargue el archivo de imagen son la foto de perfil</p>
                    <input class="inputmod" type="file" name="image" id="">
                    <br><br>
                    <center><input class="updatesubmit" name="submit" type="submit" value="Subir foto de perfil"></center>
                </form>
            </div>
            <div class="sendemail">
                <form action="/proyectoalqueria/model/sendemail.php" method="post">
                    <center><i class='bx bxs-file-find bx-border bx-lg' ></i></center>
                    <p>Enviar mensaje a un correo electronico</p>
                    <input class="inputmod" type="email" name="correo" id=""></input>
                    <br><br>
                    <center><input class="updatesubmit" type="submit" value="Enviar mensaje"></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>