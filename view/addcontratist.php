<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyectoalqueria/view/css/newcontrat.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("/template/sidebar.php")
    ?>
    <div class="navcontainer">
        <h1>Agregar un nuevo contratista</h1>
    </div>
    <form class="formcontainer" action="/proyectoalqueria/model/newcontrat.php" method="post">
        <div class="form-group">
            <p>Nombre</p>
            <input class="forminput" type="text" name="name" id="name" class="form-control" placeholder="Nombre completo del contratista">
            <p>Celular</p>
            <input class="forminput" type="email" name="email" id="email" class="form-control" placeholder="Numero celular">
        </div>
        <div class="form-group">
            <p>Numero de cedula</p>
            <input class="forminput" type="text" name="address" id="address" class="form-control" placeholder="Cedula">
            <p>Ruta</p>
            <input class="forminput" type="text" name="ruta" id="" placeholder="ruta que manejara el contratista">
        </div>
    </form>
    
</body>
</html>