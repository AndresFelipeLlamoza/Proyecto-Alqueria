<?php  

date_default_timezone_set("America/Bogota");
include ("../model/conection.php");

$id = $_GET["id"];
$query = "SELECT * FROM contratistas WHERE id = '$id'";
$result = mysqli_query($conex, $query )


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyectoalqueria/view/css/updatecontratist.css">
    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    <?php  
    include ("/template/sidebar.php")
    ?>
    <div class="cuerpocontainer">
        <div class="navcontainer">
            <h2>Actualizar Contratista</h2>
        </div>
        
        <div class="modalbody" id="modalupdate">
            <form method="post" action="/proyectoalqueria/model/updatecontratist.php">
                <?php foreach($conex -> query("SELECT * FROM contratistas WHERE id = '$id'") as $row) { ?>
                <div class="modalcontainer">
                    <div class="row">
                        <div class="column">
                        <center><img style="width: 10vh"src="/proyectoalqueria/view/img/user-avatar.png" alt="" srcset=""></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <p>Nombre <span style="color:red">*</span></p>
                            <input type="text" name="nombre" value="<?php echo $row["Nombre"]?>" class="input-field" required></input>
                        </div>
                        <div class="column">
                            <p>Celular <span style="color:red">*</span></p>
                            <input type="number" name="celular" value="<?php echo $row["Celular"]?>" class="input-field" required></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <p>Cedula <span style="color:red">*</span></p>
                            <input type="number" name="cedula" value="<?php echo $row["Cedula"]?>" class="input-field" required></input>
                        </div>
                        <div class="column">
                            <p>Ruta <span style="color:red">*</span></p>
                            <input type="text" name="ruta" value="<?php echo $row["Ruta"]?>" class="input-field" required></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <p>Foto de perfil (Opcional)</p>
                            <input type="file" name="perfil" id="">
                        </div>
                    </div>
                    <br>
                    <div class="column">
                        <input name="Actualizar" class="butonupdt" type="submit" value="Actualizar">
                    </div>
                </div>
            <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>