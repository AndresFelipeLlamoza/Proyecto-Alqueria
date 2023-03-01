<?php 
date_default_timezone_set("America/Bogota");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyectoalqueria/view/css/contratists.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("/template/sidebar.php");
    include ("../model/conection.php")
    ?>
    <div class="navcontainer">
        <div class="navitems">
            <a href="index.php" class="active">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="contact.php" class="active">Contact</a>
        </div>
    </div>
    <div class="contratistable">
        
        <br>
        <br>
        <table class="datostabla">
            <tr>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Cedula</th>
                <th>Ruta</th>
            </tr>
            <?php foreach($conex -> query("SELECT * FROM contratistas") as $row){?>
            <tr>
                <td><?php echo $row ["Nombre"]?></td>
                <td><?php echo $row ["Celular"]?></td>
                <td><?php echo $row ["Cedula"]?></td>
                <td><?php echo $row ["Ruta"]?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="tool">

    </div>
</body>
</html>