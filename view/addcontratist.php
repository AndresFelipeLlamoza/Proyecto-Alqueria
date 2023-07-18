<?php 
session_start();
 if(!isset($_SESSION['usuario'])){
        echo '<script>alert("Debes iniciar sesion en la pagina web");window.location="/"</script>';
        session_destroy();
        die();
    }
    error_reporting(0)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <link rel="stylesheet" href="../view/css/newcontrat.css">
    <script src="./js/hidesidebar.js"></script>
    <title>Nuevo contratista</title>
</head>
<body>
    <div id="overlay"></div>
    <?php 
    include ("./template/sidebar.php");
    include ("../model/conection.php");
    ?>
    <div id="cuerpocontainer">
        <div id="navcontainer">
            <h2>Agregar un nuevo contratista</h2>
            <?php 
            include('./template/bellnotification.php');
            ?>
        </div>
        <div class="formbody">
            <form class="formcontainer" id="contenedoradduser" enctype="multipart/form-data" action="../model/newcontrat.php" onsubmit="spinner()" method="post">
                <div class="rowimg">
                    <div class="column">
                        <center><img class="addimg" src="../view/img/add-group.png" alt="" srcset=""></center>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <p>Nombre <span style="color:red">*</span></p>
                        <input class="forminput" type="text" name="nombre" id="name" class="form-control" placeholder="Nombre completo" required>
                    </div>
                    <div class="column">
                        <p>Celular <span style="color:red">*</span></p>
                        <input class="forminput" type="number" name="celular" id="celular" class="form-control" placeholder="Numero celular" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <p>Numero de cedula <span style="color:red">*</span></p>
                        <input class="forminput" type="number" name="cedula" id="address" class="form-control" placeholder="Cedula" required>
                    </div>
                    <div class="column">
                        <p>Placa del vehiculo <span style="color: red">*</span></p>
                        <input class="forminput" type="text" name="placa" id="" placeholder="Placa del vehiculo del contratista" required pattern="\w{6,6}">
                    </div>
                    <div class="column">
                        <p>Ruta <span style="color:red">*</span></p>
                        <select name="routeselect" id="" class="routesopt">
                            <option value="--">--</option>
                            <?php foreach($conex->query('SELECT * FROM rutas') as $routes){?>
                                <option value="<?php echo $routes['id_ruta']?>"><?php echo $routes['nombre_ruta']?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="column">
                        <p>Subir una foto de perfil <span style="color:red">*</span></p>
                        <input class="forminput" type="file" onchange="preview()" name="perfil" id="" placeholder="Su imagen aqui" required>
                    </div>
                    <div class="column" >
                        <p>Vista Previa</p>
                        <img style="border: solid 1px black;" src="" id="thumb" width="150px" alt="">
                        <script>
                            function preview(){
                                thumb.src = URL.createObjectURL(event.target.files[0]);
                            }
                        </script>
                    </div>
                </div>
                
                <!-- <div id="loader"></div>
                <script>
                    function spinner(){
                        var spin = setTimeout(containerform, 10);
                    }
                    function containerform(){
                        document.getElementById("loader").style.display = "block"
                        document.getElementById("")
                    }
                </script> -->
                <div class="row">
                    <div class="column">
                        <input class="gridbutton" type="submit" onsubmit="spinner()" value="Subir" style="display:grid; grid-template-columns: 20%;justify-content: center">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>