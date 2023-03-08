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
    <script src="/proyectoalqueria/view/js/hidesidebar.js"></script>
    <script src="/proyectoalqueria/view/js/updtmodal.js"></script>
    <title>Contratistas</title>
</head>
<body>
    <?php 
    include ("/template/sidebar.php");
    include ("../model/conection.php")
    ?>
    <div id="cuerpocontainer">
        <div class="navcontainer">
            <h2>Contratistas</h2>
        </div>
        <div class="contratistable">
        <div class="navitems">
            <a href="addcontratist.php" title="Ingresar un nuevo documento de contratista" id="add" class="active">Agregar <i class='bx bx-sm bxs-file-plus'></i></a>
            <a href="contact.php" class="active" title="Registrar un nuevo contratista" class="Active">Nuevo Contratista <i class='bx bx-sm bx-upload'></i></a>
            
        </div>
            <br>
            <br>
            <div class="tablecontainer">
                <table class="datostabla">
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
                        <td class="operacont">
                            <a href="../view/updtcontratist.php?id=<?php echo $row["id"]?>&nombre=<?php echo $row["Nombre"]?>"class="operation1"><i class='bx bx-sm bx-refresh'></i></button>
                            <a href="#" class="operation2" > <i class='bx bx-sm bxs-trash'></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>