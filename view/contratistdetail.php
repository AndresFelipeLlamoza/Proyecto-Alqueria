<?php 
include ("../model/conection.php");
include ("../model/notifications.php");
session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>alert("Debes iniciar sesion para ingresar en el aplicativo");window.location="/"</script>';
    session_destroy();
    die();
}

error_reporting(0);
$id = $_GET['id'];
$Nombre = $_GET['Nombre'];
$selcontrat = "SELECT * FROM contratistas WHERE id = '$id'";
$fecha_actual = time();
$seldoc = "SELECT Contenido_doc FROM documentos WHERE id_documentos = '$id'";
$exec = mysqli_query($conex, $seldoc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentacion contratista</title>
    <link rel="stylesheet" href="./css/contratistdocs.css">
    <script src="./js/hidesidebar.js"></script>
    <!-- <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://apis.google.com/js/api.js?onload=initPicker"></script>
</head>
<body>
    <div id="overlay"></div>
    <?php 
    include ("./template/sidebar.php");
    ?>
    <div id="cuerpocontainer">
        <div class="navcontainer">
            <h2 class='color-primary' >Documentacion Contratista</h2>
            
        </div>
        <div class="detailscontainer" id="page" >
            <div class="details" id="contdeta">
                <?php foreach ($conex -> query("SELECT contratistas.*, rutas.nombre_ruta FROM contratistas LEFT JOIN rutas ON contratistas.id_ruta = rutas.id_ruta WHERE id = '$id'")as $row){ ?>
                <h2 style="text-align: center"><?php echo $row['Nombre']?></h2>
                    <div class="detailcontrat">
                        <div>
                            <img class="cardimg" src="<?php echo $row['Perfil']?>" alt="">
                        </div>
                        <div>
                            <p>Ruta: <span style="color: red;"><?php echo $row['nombre_ruta']?></span></p>
                            <p>Celular: <?php echo $row['Celular']?></p>
                            <p>Cedula: <?php echo $row['Cedula']?></p>
                            <p>Placa: <?php echo $row['Placa']?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="listado">
                <h2>Documentos Maestra</h2>
                <table id="documentlist">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nombre del documento</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($conex -> query("SELECT listadocs.*, documentos.Nombre_doc
                        FROM listadocs LEFT JOIN documentos ON listadocs.nom_doc = documentos.nombre_doc AND IFNULL(id, '$id') = '$id'")as $data){?>
                        <tr>
                            <td><?php echo $data['id_nomdoc']?></td>
                            <td><?php echo $data['nom_doc']?></td>
                            <td><?php 
                            if(isset($data['Nombre_doc']) || !empty($data['Nombre_doc'])){
                                echo "<p style='color: green'>Subido</p>";
                            }else{
                                echo "<p style='color: red'>No subido</p>";
                            }
                            ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <script>
                    $(document).ready(function(){
                        $('#documentlist').DataTable({
                            "language": {
                                "url": 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
                            },
                            responsive: true
                        })
                    })
                </script>
            </div>
            <div class="docontainer">
                <div class="containdocs"></div>
                    <div class="btndocupload">
                        <div><button class="uploadmodal">Subir Documentos<i class='bx bx-upload bx-sm'></i></button></div>
                    </div>
                    <br>
                    <div class="docsdetails">
                        <table id="tabladocumentos" style="width: 100%">
                            <thead>
                                <tr>
                                    <th hidden>No.</th>
                                    <th>Nombre Documento</th>
                                    <th hidden>Document</th>
                                    <th>Estado de vigencia</th>
                                    <th>Fecha de vigencia</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($conex -> query("SELECT * FROM documentos WHERE id = '$id'")as $row) { ?>
                                <tr data-target="idoc" id="<?php echo $row['id_documento']?>">
                                    <td data-target="iddocument" hidden><?php echo $row["id_documento"]?></td>
                                    <td data-target="nombre"><?php echo $row['Nombre_doc']?></td>
                                    <td data-target="contenido" hidden><?php echo $row['Contenido_doc']?></td>
                                    <td><?php 
                                    if(strtotime($row['Vigencia']) > $fecha_actual){
                                        echo '<p style="color: green">Esta vigente</p>';
                                    }else if(strtotime($row['Vigencia']) < $fecha_actual && $row['Vigencia'] != null){
                                        echo '<p style="color:red">Por renovar</p>';
                                    }
                                    if(strtotime($row['Vigencia']) == null) {
                                        echo '<p style="color: #f7d00c">No aplica</p>';
                                    }
                                    
                                    ?>
                                    </td>
                                    <td data-target="vigencia">
                                        <?php
                                        if (($row['Vigencia'] == null)){
                                            echo '<p>No aplica</p>';
                                        }else{
                                            echo $row['Vigencia'];
                                        }
                                        ?>
                                    </td>
                                    <td class="options">
                                        <button class="updatemodal" type="button" data-id="<?php echo $row['id_documento'];?>"><i class="bx bx-refresh bx-sm"></i></button>
                                        <a class="previewdoc" href="<?php echo $row['Contenido_doc']?>" download><i class='bx bxs-download bx-sm'></i></a>
                                        <div id="loader" style="display:none"></div>
                                        <a class="previewdoc" href="<?php echo $row['Contenido_doc']?>" target="_blank"><i class='bx bx-window-open bx-sm'></i></a>
                                        <!-- <form id="previewpdfbtn" onsubmit="spinner()" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                            <input type="hidden" name="pdfdoc" value="<?php echo $row['Contenido_doc']?>"></input>
                                            <input style="padding: 5px;" onsubmit="spinner()" type="submit" value="Previsualizar"></input>
                                        </form> -->
                                        
                                        <script>
                                            function spinner(){
                                                var spin = setTimeout(showPage, 10);
                                            }
                                            function showPage(){
                                                document.getElementById("loader").style.display="block";
                                                document.getElementById("contdeta").style.backgroundColor="#00000086;";
                                            }
                                        </script>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                        <!-- Modal upload-->
                        <script>
                            $(document).ready(function() {
                                $('.uploadmodal').click(function() {
                                    $('.modal-overlay').fadeIn();
                                    $('.modalcontainer').fadeIn();
                                });

                                $('.modal-overlay').click(function() {
                                    $('.modal-overlay').fadeOut();
                                    $('.modalcontainer').fadeOut();
                                });
                            });
                        </script>
                        <div class="modal-overlay"></div>
                        <div class="modalcontainer">
                            <div class="modalbody">
                                <center><h2>Subir documentos</h2><br><p><span style="color: red">*</span>Los archivos no deben de superar los 30 megabytes <span style="color: red">*</span></p></center>
                                <form action="../model/savefiles.php?id=<?php echo $row['id']?>&Nombre=<?php echo $Nombre ?>" method="post" enctype="multipart/form-data">
                                    <div class="docvehiculo">
                                        <div class="row">
                                            <div class="column" hidden>
                                                <p>Nombre del documento<span style="color:red !important">*</span></p>
                                                <select name="docname" class="docname" id="listadocuments" required>
                                                    <option value="">--</option>
                                                <?php foreach($conex->query("SELECT * FROM listadocs")as $col){ ?>
                                                    <option value="<?php echo $col['nom_doc']?>"><?php echo $col['nom_doc']?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                            <input type="text" name="listadocsitem" id="changedinput" hidden>
                                            <div class="row">
                                                <div class="column">
                                                    <p>Aplica vigencia en este documento ? <span style="color:red !important">*</span></p>
                                                        <select name="docdateaply" class="docname" id="selectopt" required>
                                                            <option value="">--</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                </div>
                                                <div class="column" id="datecontainer">
                                                <p>Fecha de vigencia del documento <span style="color:red !important">*</span></p>
                                                    <input class="docdate" type="date" name="docdate" id="fielddate" disabled required>
                                                </div>
                                            </div>
                                            <script>
                                                function updateInputValue() {
                                                    var changeitem = document.getElementById("changedinput");
                                                    var listdocs = document.getElementById("listadocuments");
                                                    listdocs.addEventListener("change", function(e){
                                                        changeitem.value = event.target.value;
                                                    });
                                                }
                                                // Call the function after the input element is created
                                                document.addEventListener("DOMContentLoaded", updateInputValue);
                                            </script>
                                        </div>
                                            <center><div class="choseimgcontainer">
                                                <label for="inputTag" style="color: white">
                                                    Selecciona el archivo <span style="color:red !important">*</span>
                                                    <br>
                                                    <i class="bx bx-sm bx-upload"></i>
                                                    <input id="inputTag" type="file" name="document" required/>
                                                    <br/>
                                                </label>
                                                <span id="imageName"></span>
                                                
                                            </div></center>
                                        <script>
                                            var combobox = document.getElementById('selectopt');
                                            var docdate = document.getElementById('fielddate');
                                            combobox.addEventListener('change', function(){
                                                if(combobox.value === 'No'){
                                                    docdate.disabled = true;
                                                }else if(combobox.value === 'Si'){
                                                    docdate.disabled = false;
                                                }
                                            })
                                        </script>
                                        <script>
                                            let input = document.getElementById("inputTag");
                                            let imageName = document.getElementById("imageName")

                                            input.addEventListener("change", ()=>{
                                                let inputImage = document.querySelector("input[type=file]").files[0];

                                                imageName.innerText = inputImage.name;
                                            })
                                        </script>
                                    </div>
                                    <br>
                                    <center><input type="submit" value="Subir Documentos" class="uploadsubmit"></center>
                                </form>
                            </div>
                        </div>
                        </div>
                        <!---Modal update------->
                            <script>
                                $('.updatemodal').on('click', function(){
                                    $('.updatemodal').click(function() {
                                        $('.modal-overlay2').fadeIn();
                                        $('.modalcontainer2').fadeIn();
                                    });

                                    $('.modal-overlay2').click(function() {
                                        $('.modal-overlay2').fadeOut();
                                        $('.modalcontainer2').fadeOut();
                                    });
                                })
                                $(document).ready(function(){
                                    $(document).on('click', '.updatemodal', function() {
                                        var id = $(this).data('id');
                                        var iddocument = $('#'+id).children('td[data-target=iddocument]').text()
                                        var name = $('#'+id).children('td[data-target=nombre]').text();
                                        var vigencia = $('#'+id).children('td[data-target=vigencia]').text();
                                        var contenido = $('#'+id).children('td[data-target=contenido]').text();
                                        $('#iddocument').val(iddocument)
                                        $('#nombre').val(name);
                                        $('#vigencia').val(vigencia);
                                    })
                                })
                            </script>
                        
                        <div class="modal-overlay2"></div>
                        <div class="modalcontainer2">
                            <div class="modalbody2">
                                <center><h2> Actualizar:  <br><input type="text" readonly id="nombre" style="border: none; font-size: 20px; font-weight: bold;text-align: center"/></h2></center>
                                <form action="../model/updtdoc.php?id=<?php echo $row['id']?>&Nombre=<?php echo $Nombre ?>&Nombre_doc=<?php echo $row['Nombre_doc']?>&id_documento=<?php echo $row['id_documento']?>" method="post" enctype="multipart/form-data">
                                <div class="column">
                                    <input type="text" name="iddocument" id="iddocument" hidden>
                                    <p>Aplica vigencia ?</p>
                                    <select name="ifvigencia" id="selectif" class="docname" required>
                                        <option value="">--</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                    <div class="column">
                                        <p>Vigencia del documento</p>
                                        <input type="date" class="docdate" name="vigenciadate" id="dateselector">
                                    </div>
                                    <div class="column">
                                    <center><div class="recordcontainer">
                                        <label for="contenido" style="color: white" >
                                        Selecciona el archivo <span style="color:red !important">*</span>
                                            <br>
                                                <i class="bx bx-sm bx-upload"></i>
                                                <input id="contenido" class="dateinput" type="file" name="filecontent" style="display: none;" required/>
                                            <br/>
                                        </label>
                                        <Span id="nomfile" style="color: greenyellow"></Span>
                                        </div></center>
                                    </div>
                                    <center><input type="submit" value="renovar" class="updateaform"></center>
                                </form>
                                <script>
                                    var applyselect = document.getElementById('selectif');
                                    var datecontent = document.getElementById('dateselector');
                                    applyselect.addEventListener("change", function(){
                                        if (applyselect.value === "No"){
                                            datecontent.readOnly = true;
                                        }else if (applyselect.value === "Si"){
                                            datecontent.readOnly = false;
                                        }else if (applyselect.value === "--"){
                                            datecontent.readOnly = true
                                        }
                                    })
                                </script>
                                <script>
                                        var inputname = document.getElementById("contenido");
                                        var filename = document.getElementById("nomfile")

                                        inputname.addEventListener("change", ()=>{
                                            let filepdf = document.getElementById("contenido").files[0];
                                            filename.innerText = filepdf.name;
                                        })
                                </script>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#tabladocumentos").DataTable({
                                "language":{
                                    "url": 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
                                },
                                responsive: true
                            })
                        });
                    </script>
                </div>
        </div>
            
            
            
            <!-- <div id="preview">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pdfdoc'])) {?>
                <?php $prev = $_POST["pdfdoc"]?>
                <div><object id='pdfprev' style='display:block' type='application/pdf' data='<?php echo $prev?>' width='550' height='600'></object></div>
            </div> -->
            
            <?php echo "<script>hideLoading();</script>" ?>
            <?php } ?>
        
    </div>
</body>
</html>