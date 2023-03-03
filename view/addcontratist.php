<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyectoalqueria/view/css/newcontrat.css">
    <title>Nuevo contratista</title>
</head>
<body>
    <?php 
    include ("/template/sidebar.php")
    ?>
    <div class="navcontainer">
        <h2>Agregar un nuevo contratista</h2>
    </div>
    <div class="formbody">
        <form class="formcontainer" action="/proyectoalqueria/model/newcontrat.php" method="post">
            <div class="form-group">
                <p>Nombre</p>
                <input class="forminput" type="text" name="nombre" id="name" class="form-control" placeholder="Nombre completo">
                <p>Celular</p>
                <input class="forminput" type="number" name="celular" id="celular" class="form-control" placeholder="Numero celular">
            </div>
            <div class="form-group">
                <p>Numero de cedula</p>
                <input class="forminput" type="number" name="cedula" id="address" class="form-control" placeholder="Cedula">
                <p>Ruta</p>
                <input class="forminput" type="text" name="ruta" id="" placeholder="ruta">
            </div>
            <input class="gridbutton" type="submit" value="Subir" style="display:grid; grid-template-columns: 20%;justify-content: center">
        </form>
    </div>
</body>
</html>