<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyectoalqueria/view/css/newcontrat.css">
    <script src="./js/hidesidebar.js"></script>
    <title>Nuevo contratista</title>
</head>
<body>
    <?php 
    include ("./template/sidebar.php");

    if(!isset($_SESSION['usuario'])){
        echo '<script>alert("Debes iniciar sesion en la pagina web");window.location="/proyectoalqueria"</script>';
    }
    error_reporting(0)

    ?>
    <div id="cuerpocontainer">
        <div id="navcontainer">
            <h2>Agregar un nuevo contratista</h2>
        </div>
        <div class="formbody">
            <form class="formcontainer" enctype="multipart/form-data" action="/proyectoalqueria/model/newcontrat.php" method="post">
                <div class="rowimg">
                    <div class="column">
                        <center><img class="addimg" src="/proyectoalqueria/view/img/add-group.png" alt="" srcset=""></center>
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
                        <p>Ruta <span style="color:red">*</span></p>
                        <input class="forminput" type="text" name="ruta" id="" placeholder="ruta" required>
                    </div>
                    <div class="column">
                        <p>Subir una foto de perfil <span style="color:red">*</span></p>
                        <input class="forminput" type="file" onchange="preview()" name="perfil" id="" placeholder="Su imagen aqui" >
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
                <div class="row">
                    <div class="column">
                        <input class="gridbutton" type="submit" value="Subir" style="display:grid; grid-template-columns: 20%;justify-content: center">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>