<?php 
date_default_timezone_set("America/Bogota");

session_start();

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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../view/css/contratists.css">
    <script src="../view/js/hidesidebar.js"></script>
    <script src="../view/js/updtmodal.js"></script>
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="../view/js/rendertable.js"></script>
    <title>Contratistas</title>
</head>
<body onload="spinner()">
<div id="overlay"></div>
    <?php 
    include ("./template/sidebar.php");
    include ("../model/conection.php");

    $data = "SELECT contratistas.*, rutas.id_ruta, rutas.nombre_ruta, COUNT(*) AS num_documentos FROM contratistas LEFT JOIN documentos ON contratistas.id = documentos.id LEFT JOIN rutas ON contratistas.id_ruta = rutas.id_ruta WHERE Vigencia <= NOW() GROUP BY contratistas.Nombre";
    $result = mysqli_query($conex, $data);
   
    ?>
    <div class="spincontainer">
        <div id="loader"></div>
    </div>
    <script>
        function spinner(){
            var spin = setTimeout(contpage, 1000)
        }

        function contpage(){
            document.getElementById("loader").style.display = "none";
            document.getElementById("dshbcontainer").style.display = "block"
        }
    </script>
        <div id="cuerpocontainer" >
            <div class="navcontainer">
                <h2>Contratistas con documentos por renovar</h2>
                <?php 
            include('./template/bellnotification.php');
            ?>
            </div>
            <div class="contratistable" style="display: none;" id="dshbcontainer">
            <div class="filteritems">
                <div class="sortby">
                </div>
                <div class="sortnumby">
                    <p style="font-size: 18px;">Mostrar
                        <select name="shownum" id="entradas" onchange="updateEntries()">
                            <option value="">--</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        rutas
                    </p>
                </div>
                
                <form>
                    <div class="searchbar">
                        <p style="font-size: 18px;">Buscar
                            <input type="text" onkeyup="buscar()" name="Buscar" id="searchcards">
                        </p>
                    </div>
                </form>
            </div>
                <div class="contratcontain" id="listcontratroute">
                    <?php 
                    foreach ($result as $row){
                        echo "
                        <a class='modalruta' href='../view/contratistdetail.php?id=".$row['id']."&id_ruta=".$row['nombre_ruta']."'>
                            <div class='cardsroutes' id='routesdinamic'>
                                <div class='item'>
                                    <img class='cardimg' src='../view/img/carpeta.png' alt=''>
                                    <h2 data-target='".$row['Nombre']."'>".$row['Nombre']."</h2>
                                    <h3 data-target='".$row['nombre_ruta']."'>".$row['nombre_ruta']."</h3>
                                </div>
                            </div>  
                        </a>
                        ";
                    }
                    ?>
                </div>
                <!-- route selection modal window -->
                <!-- <script>
                    $(document).ready(function(){
                        $('.modalruta').click(function(){
                            $('.modal-overlay').fadeIn();
                            $('.modalcontainer').fadeIn();
                        });
                        $('.modal-overlay').click(function(){
                            $('.modal-overlay').fadeOut();
                            $('.modalcontainer').fadeOut();
                        });
                    });
                    $(document).ready(function(){
                        $(document).on('click', '.modalruta', function() {
                            var id = $(this).data('id');
                            var nombreruta = $('#'+id).children('h3[data-target=nombre_ruta]').text();
                            $('#nombreruta').val(nombreruta);
                        })
                    })
                </script>
                <div class="modal-overlay"></div>
                <div class="modalcontainer">
                    <div class="modalbody">
                        <h2>Contenedor de ruta</h2>
                        <input type="text" name="nombreruta" id="nombreruta">
                    </div>
                </div> -->
                <script>
                   function updateEntries() {
                    var select = document.getElementById("entradas");
                    var numEntries = select.options[select.selectedIndex].value;
                    var cards = document.getElementsByClassName("modalruta");
                        for (var i = 0; i < cards.length; i++) {
                            if (i < numEntries) {
                                cards[i].style.display = "block";
                            } else {
                                cards[i].style.display = "none";
                            }
                        }       
                    }
                </script>
                 <script>
                    function buscar(){
                        var input, filtro, div, routesdinamic, item, txtValue, h2
                        input = document.getElementById("searchcards");
                        filtro = input.value.toUpperCase();
                        div = document.querySelectorAll('.contratcontain');
                        item = document.querySelectorAll('.item');
                        cardsroutes = document.querySelectorAll('.modalruta')

                        for (let i = 0; i < item.length; i++) {
                            h2 = cardsroutes[i].querySelector("h2");
                            txtValue = h2.textContent || h2.innerText;
                            if(txtValue.toUpperCase().indexOf(filtro) > -1){
                                cardsroutes[i].style.display = "";
                            }else{
                                cardsroutes[i].style.display = "none";
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </body>
</html>