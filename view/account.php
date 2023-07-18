<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/account.css">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <script src="./js/showforms.js"></script>
    <script src="/view/js/hidesidebar.js"></script>
    <title>Document</title>
</head>
<body onload="spinner()">
    <?php 
    date_default_timezone_set("America/Bogota");
    include ("../model/conection.php");
    include ("./template/sidebar.php");
    ?>
    <div id="cuerpocontainer">
        <div class="navcontainer">
        <div id="loader"></div>
            <script>
                function spinner(){
                    var spin = setTimeout(pagecontainer, 3000)
                }
                function pagecontainer(){
                    document.getElementById("loader").style.display="none";
                    document.getElementById("containerinfo").style.display="block"
                }
            </script>
            <h2>Informacion de la cuenta</h2>
            <?php 
            include('./template/bellnotification.php');
            ?>
        </div>
        <div class="accountcontainer" id="containerinfo" style="display: none">
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
            <a href="../model/sendemail.php" style="text-decoration: none; color: blue">Enviar un correo</a>
            <!-- <form action="../model/sendemail.php" method="post">
                <label for="recipient-email">Recipient Email:</label>
                <input type="email" name="recipient-email" id="recipient-email">
                <br>
                <label for="sender-name">Your Name:</label>
                <input type="text" name="sender-name" id="sender-name">
                <br>
                <label for="sender-email">Your Email:</label>
                <input type="email" name="sender-email" id="sender-email">
                <br>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject">
                <br>
                <label for="message">Message:</label>
                <textarea name="message" id="message"></textarea>
                <br>
                <button type="submit">Send Email</button>
            </form> -->
            </div>
        </div>
    </div>
</body>
</html>