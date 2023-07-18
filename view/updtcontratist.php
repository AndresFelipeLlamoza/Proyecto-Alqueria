<?php  

date_default_timezone_set("America/Bogota");
include ("../model/conection.php");
session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>alert("Debes iniciar sesion en la pagina web");window.location="/"</script>';
}
error_reporting(0);

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
    <link rel="stylesheet" href="../view/css/updatecontratist.css">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/hidesidebar.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="overlay"></div>
    <?php  
    include ("./template/sidebar.php")
    ?>
    <div id="cuerpocontainer">
        <div class="navcontainer">
            <h2>Actualizar Contratista</h2>
            <?php 
            include('./template/bellnotification.php');
            ?>
        </div>
        
        <div class="modalbody" id="modalupdate">
            <form method="post" action="../model/updatecontratist.php" enctype="multipart/form-data">
                <?php foreach($conex -> query("SELECT * FROM contratistas WHERE id = '$id'") as $row) { ?>
                <div class="modalcontainer">
                <input type="text" name="id" value="<?php echo $row["id"]?>" class="input-field" hidden></input>
                    <div class="row">
                        <div class="column">
                        <center><img style="width: 10vh"src="../view/img/user-avatar.png" alt="" srcset=""></center>
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
                            <p>Placa <span style="color:red">*</span></p>
                            <input type="text" name="placa" value="<?php echo $row["Placa"]?>" class="input-field" required></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <p>Ruta <span style="color:red">*</span></p>
                            <select class="input-field" name="routeselect" id="">
                            <?php foreach ($conex -> query("SELECT * FROM rutas")as $ruta){?>    
                                <option value="<?php echo $ruta['id_ruta']?>"><?php echo $ruta['nombre_ruta']?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <p>Foto de perfil (Opcional)</p>
                            <center><div class="recordcontainer">
                                <label for="inputTag" style="color: white">
                                    Selecciona el archivo <span style="color:red !important">*</span>
                                    <br>
                                        <i class="bx bx-sm bx-upload"></i>
                                        <input id="inputTag" type="file" onchange="preview()" name="document" hidden/>
                                    <br/>
                                </label>
                            </div></center>
                            <script>
                                function preview() {
                                 thumb.src = URL.createObjectURL(event.target.files[0]);   
                                }
                            </script>
                        </div>
                        <div class="column">
                            <p>Vista Previa</p>
                            <center><img width="150px" id="thumb" src="<?php echo $row['Perfil']?>" alt="" srcset=""></center>
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