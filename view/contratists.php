<?php 
date_default_timezone_set("America/Bogota");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/proyectoalqueria/view/css/contratists.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("/template/sidebar.php");
    include ("../model/conection.php")
    ?>
    <div class="navcontainer">
        <h1>Control Documental Contratistas</h1>
    </div>
    <div class="contratistable">
    <div class="navitems">
         <a href="addcontratist.php" title="Ingresar un nuevo documento de contratista" id="add" class="active">Agregar <i class='bx bx-sm bxs-file-plus'></i></a>
         <a href="contact.php" class="active" title="Registrar un nuevo contratista" class="Active">Nuevo Contratista <i class='bx bx-sm bx-upload'></i></a>
         
    </div>
        <br>
        <br>
        <table class="datostabla">
            <tr>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Cedula</th>
                <th>Ruta</th>
                <th>Operaciones</th>
            </tr>
            <?php foreach($conex -> query("SELECT * FROM contratistas") as $row){?>
            <tr>
                <td><?php echo $row ["Nombre"]?></td>
                <td><?php echo $row ["Celular"]?></td>
                <td><?php echo $row ["Cedula"]?></td>
                <td><?php echo $row ["Ruta"]?></td>
                <td>
                    <a href="about.php" class="operation1"><i class='bx bx-sm bx-refresh'></i></a>
                    <a href="contact.php" class="operation2"> <i class='bx bx-sm bxs-trash'></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="tool">

    </div>
</body>
</html>