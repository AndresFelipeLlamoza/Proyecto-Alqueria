<?php 
    date_default_timezone_set("America/Bogota");
    include ("../view/template/sidebar.php");
    include ("../model/conection.php");
    
    if(!isset($_SESSION['usuario'])){
        echo '<script>alert("Debes iniciar sesion en la pagina web");window.location="/"</script>';
        session_destroy();
        die();
    }
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./js/hidesidebar.js"></script>
    
    <link rel="stylesheet" href="./css/control.css">
    <title>Portal de operaciones</title>
</head>
<body onload="spinner()" id="contratbody">
<div id="overlay"></div>
    <div id="cuerpocontainer" > 
    <script>
        function spinner(){
            var spin = setTimeout(showPage, 1000);
        }
        function showPage(){
            document.getElementById("loader").style.display="none";
            document.getElementById("contenedor").style.display="block";
            document.getElementById("contratbody").style.backgroundColor="#ffffffd7"
        }
    </script>
    <div style="background-color: black">
        <div id="loader">
    </div>
    </div>
        <div class="navcontainer">
            <h2>Contratistas</h2>
            <?php 
            include ('./template/bellnotification.php');
            ?>
        </div>
        <div class="contratcardbody" id="contenedor" style="display: none">
            <div class="actions">
                <div class="active"><a class="actionbtns" href="../view/addcontratist.php">Añadir contratista <i class='bx bx-sm bx-user-plus'></i></a></div>
            </div>
            <br><br>
            <!------------------ACTIVOS------------------------------------->
            <div class="activecards">
                <div class="navcard">
                <div><h2>Contratistas activos</h2></div>
                <form>
                    <div class="searchcontainer">
                        <input class="searchbar" type="search" name="busqueda" id="searchbarid" placeholder="buscar...">
                        <button type="submit"><box-icon name='search' color="#ffffff"></box-icon></button>
                    </div>
                </form>
                </div>
                <div class="cardbody">
                    <?php
                    $contrat = mysqli_query($conex, "SELECT contratistas.*, rutas.nombre_ruta FROM contratistas LEFT JOIN rutas ON contratistas.id_ruta = rutas.id_ruta WHERE estado = 'Activo'");
                    foreach($contrat as $cont) {
                        ?>
                        <div class="cardscontainer" id="listsearch">
                            <div class="item">
                            <?php
                            if (file_exists($cont['Perfil'])){
                                echo "<center><img class='cardimg' src='". $cont['Perfil']."' alt=''/></center>";
                            }else if($cont['Perfil'] == '../view/profiles/' || !file_exists($cont['perfil'])){
                                echo "<center><img class='cardimg' src='../view/profiles/empty-user.png' alt=''/></center>";
                            }
                            echo '<h3>'.$cont["Nombre"].'</h3>';
                            echo '<p>'.$cont["Celular"].'</p>';
                            echo '<p> CC.'.$cont["Cedula"].'</p>';
                            echo '<p>'.$cont["nombre_ruta"].'</p>';
                            echo '<a class="changestat" href="../model/delete.php?id=' . $cont['id'] . '&Nombre=' . $cont['Nombre'] . '" onclick="return confirm(\'Seguro que desea eliminar a este contratista?, esta accion es IRREVERSIBLE\');"><i class="bx bxs-trash bx-sm" style="color:#fffff"></i></a>';

                            echo '<a class="seedetail" href="../view/updtcontratist.php?id='.$cont['id'].'"><i class="bx bx-refresh bx-sm"></i></a>';
                            ?>
                            </div>
                        </div>
                        <?php } ?>
                </div>
                <script>
                function buscarv() {
                    var input, filtro, div, listsearch, item, txtValue, h3;
                    input = document.getElementById("searchbarid");
                    filtro = input.value.toUpperCase();
                    div = document.querySelectorAll("#listsearch");
                    cardscontainer = document.querySelectorAll(".cardscontainer");
                    item = document.querySelectorAll(".item");
                    for (var i = 0; i < item.length; i++) {
                        h3 = cardscontainer[i].querySelector("h3");
                        txtValue = h3.textContent || h3.innerText;
                        if (txtValue.toUpperCase().indexOf(filtro) > -1){
                            cardscontainer[i].style.display = "";
                        } else{
                            cardscontainer[i].style.display = "none";
                            
                        }
                    }
                }
                document.querySelector('form').addEventListener('keyup', function(event) {
                    event.preventDefault(); 
                    buscarv(); 
                });
                </script>
            </div>
            <!------------------RETIRADOS------------------------------------->
            <BR><BR></BR></BR>
            <div class="inactivecards">
                <div class="navcard">
                    <div><h2>Contratistas Retirados</h2></div>
                    <form action="" class="forminactives">
                        <div class="searchcontainer">
                            <input class="searchbar" type="search" name="busqueda" id="" placeholder="buscar...">
                            <button type="submit" class="inactivesearch2"><box-icon name='search' color="#ffffff"></box-icon></button>
                        </div>
                    </form>
                </div>
                <div class="cardbody">
                <?php 
                $retired = "SELECT contratistas.*, rutas.nombre_ruta FROM contratistas LEFT JOIN rutas ON contratistas.id_ruta = rutas.id_ruta WHERE estado = 'Retirado'";
                $result = mysqli_query($conex, $retired);
                foreach($result as $rdata) { ?>
                    <div class="cardscontainer2">
                        <div class="item2">
                            <?php
                            if (file_exists($rdata['Perfil'])){
                                echo "<center><img class='cardimg' src='". $rdata['Perfil']."' alt=''/></center>";
                            }else{
                                echo "<center><img class='cardimg' src='/view/img/empty-user.png' alt=''/></center>";
                            }
                            echo "<h3>".$rdata["Nombre"]."</h3>";
                            echo "<p>".$rdata["Celular"]."</p>";
                            echo "<p>CC.".$rdata["cedula"]."</p>";
                            echo "<p>".$rdata["nombre_ruta"]."</p>";
                            echo "<a class='seedetail' style='font-size: 15px' href='../view/contratistdetail.php?id=".$rdata['id']."'><i class='bx bx-info-circle'></i></a>";
                            ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <script>
                function buscarv2() {
                    var input, filtro, div, cardscontainer2, item, txtValue, h3;
                    input = document.getElementById("inactivesearch");
                    filtro = input.value.toUpperCase();
                    div = document.querySelectorAll("#listsearch");
                    cardscontainer2 = document.querySelectorAll(".cardscontainer2");
                    item = document.querySelectorAll(".item");
                    for (var i = 0; i < item.length; i++) {
                        h3 = cardscontainer2[i].querySelector("h3");
                        txtValue = h3.textContent || h3.innerText;
                        if (txtValue.toUpperCase().indexOf(filtro) > -1){
                            cardscontainer2[i].style.display = "";
                        } else{
                            cardscontainer2[i].style.display = "none";
                        }
                    }
                }
                document.querySelector('.forminactives').addEventListener('keyup', function(event) {
                    event.preventDefault(); 
                    buscarv2(); 
                });
                </script>  
            </div>
        </div>
    </div>
</body>
</html>