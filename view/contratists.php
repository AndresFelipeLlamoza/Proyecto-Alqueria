<?php 
date_default_timezone_set("America/Bogota");

session_start();

if(!isset($_SESSION['usuario'])){
    echo '<script>alert("Debes iniciar sesion en la pagina web");window.location="/proyectoalqueria"</script>';
}
error_reporting(0);

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
    include ("./template/sidebar.php");
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
                        <th>Foto de perfil</th>
                        <th>Operaciones</th>
                    </tr>
                    <?php foreach($conex -> query("SELECT * FROM contratistas") as $row){?>
                    <tr>
                        <td><?php echo $row ["Nombre"]?></td>
                        <td><?php echo $row ["Celular"]?></td>
                        <td><?php echo $row ["Cedula"]?></td>
                        <td><?php echo $row ["Ruta"]?></td>
                        <td class="contdataimg">
                            <div>
                                <center>
                                    <?php 
                                    if ($row ["Perfil"]>1){
                                        echo "<img style='width: 10vh;height: 10vh;border-radius: 150%;' src='/proyectoalqueria/view/img/empty-user.png' alt='sin foto de perfil'/>";
                                    }else{
                                        echo "<img style='width: 10vh;height: 10vh; border-radius: 150%;' src='data:image/jpg;base64,".base64_encode($row["Perfil"])."'>";           
                                    }
                                    ?>
                                </center>
                            </div>
                        </td>
                        <td class="operacont">
                            <a href="../view/updtcontratist.php?id=<?php echo $row["id"]?>&nombre=<?php echo $row["Nombre"]?>"class="operation1"><i class='bx bx-sm bx-refresh'></i></button>
                            <a href="/proyectoalqueria/model/delete.php?id=<?php echo $row["id"] ?>" class="operation2" > <i class='bx bx-sm bxs-trash'></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>