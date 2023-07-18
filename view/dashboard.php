<?php 
session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>alert("Debes iniciar sesion para ingresar en el aplicativo");window.location="/"</script>';
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
    <link rel="stylesheet" href="../view/css/dashboard.css">
    <link rel="shortcut icon" href="../view/img/favicon.ico" type="image/x-icon"/></link>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https:cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <title>Progreso | Procesos</title>
</head>
<body>
    <div id="overlay"></div>
    <?php 
    include ("../model/conection.php");
    include ("../view/template/sidebar.php");
    $curdate = date('Y-m-d');
    ////////////////////////////////////////CONTRATISTAS ACTIVOS////////////////////////////////////////////////////////////
    $conteocontrat = mysqli_query($conex, "SELECT Nombre, COUNT(*) AS activos FROM contratistas WHERE estado = 'Activo'");
    $execconteo = mysqli_fetch_assoc($conteocontrat);
    ////////////////////////////////////////CONTRATISTAST RETIRADOS/////////////////////////////////////////////////////////
    $conteoreti = mysqli_query($conex, "SELECT COUNT(*) AS retirados FROM contratistas WHERE estado = 'Retirado'");
    $execreti = mysqli_fetch_assoc($conteoreti);
    ////////////////////////////////////////DOCUMENTOS VIGENTES//////////////////////////////////////////////////////////////
    $conteodocs = mysqli_query($conex, "SELECT COUNT(*) AS documents FROM documentos WHERE Vigencia > '$curdate' AND vigencia IS NOT NULL");
    $execdocs = mysqli_fetch_assoc($conteodocs);
    ////////////////////////////////////////DOCUMENTOS SIN VIGENCIA//////////////////////////////////////////////////////////
    $conteonulls = mysqli_query ($conex, "SELECT COUNT(*) AS contnull FROM documentos WHERE Vigencia IS NULL");
    $execnulls = mysqli_fetch_assoc($conteonulls);
    ///////////////////////////////////DOCUMENTOS VENCIDOS///////////////////////////////////////////////////////////////////
    $conteoretidocs = mysqli_query($conex, "SELECT COUNT(*) AS retidocs FROM documentos WHERE Vigencia < '$curdate'");
    $execretidocs = mysqli_fetch_assoc($conteoretidocs);
    //////////////////////////////NUMERO DE DOCUMENTOS EN TOTAL//////////////////////////////////////////////////////////////
    $conteototal = mysqli_query($conex, "SELECT COUNT(*) AS totaldocs FROM documentos");
    $execconteototal = mysqli_fetch_assoc($conteototal);
    /////////////////////////////////GRAFICO CONSULTA////////////////////////////////////////////////////////////////////////
    $totalDocsQuery = mysqli_query($conex, "SELECT COUNT(*) AS total_docs FROM documentos");
    $totalDocsResult = mysqli_fetch_assoc($totalDocsQuery);
    $conteototal = (int) $totalDocsResult['total_docs'];
    ////////////////////////////////////////////////GRAFICAS/////////////////////////////////////////////////////////////////
    $grafica1prepare = mysqli_query($conex, "SELECT
    u.Nombre AS contratista, u.id_ruta AS ruta, COUNT(d.id) AS num_documentos,
    28 AS num_documentos_requeridos, ROUND(COUNT(d.id) / 28 * 100, 2) AS porcentaje_cumplimiento FROM contratistas u LEFT JOIN
    documentos d ON u.id = d.id WHERE d.Contenido_doc = 0 GROUP BY u.id, u.Nombre");
    
    $grafica1 = array();
     while ($row = mysqli_fetch_assoc($grafica1prepare)){
        $grafica1[] = $row;
     }
    $grafica2 = mysqli_query($conex, "SELECT DISTINCT Nombre_doc FROM documentos");
    $grafica2names = array();
    while ($row = mysqli_fetch_assoc($grafica2)){
        $grafica2names[] = $row['Nombre_doc'];
    }
    $grafica2counts = array();
    foreach ($grafica2names as $documentName){
        $graph2query = mysqli_query($conex, "SELECT COUNT(*) AS conteodoc FROM documentos WHERE nombre_doc = '$documentName'");
        $row = mysqli_fetch_Assoc($graph2query);
        $grafica2counts[$documentName] = $row['conteodoc'];
    }

    $grafica3 = mysqli_query($conex, "SELECT COUNT(*) AS necesariodocs FROM documentos");
    $row = mysqli_fetch_assoc($grafica3);
    $num_docs_necesarios = $row['necesariodocs'];
    $upldpercontratist = mysqli_query($conex, "SELECT id, COUNT(*) AS num_subidos FROM documentos GROUP BY id");

    $grafica3graph = array();
    while($row = mysqli_fetch_assoc($upldpercontratist)){
        $num_subidos = $row['num_subidos'];
        $porcentaje3 = round(($num_subidos / $num_docs_necesarios) * 100, 2);
        $porcentaje3res[$row['id']] = $porcentaje3;
    }

    ?>
    <div id="cuerpocontainer">
        <div class="navcontainer">
            <h2>Indicadores de progreso - control documental</h2>
            <?php 
            include('./template/bellnotification.php');
            ?>
        </div>
        <div class="progresscontainer">
            <a href="expired.php" class="dashconts">
                <div class="colbar">a</div>
                <div class="colcont">
                    <h2>Documentos vencidos</h2>
                    <h2 class="countext"><?php echo $execretidocs['retidocs']?> por renovar<i class='bx bx-md bxs-file-import'></i></h2>
                </div>
            </a>
            <a href="retired.php" class="dashconts">
                <div class="colbar">a</div>
                <div class="colcont">
                    <h2>Contratistas retirados</h2>
                    <h2 class="countext"><?php echo $execreti['retirados']?> contratistas<i class='bx bx-md bxs-user-x'></i></h2>
                </div>
            </a>
            <a href="" class="dashconts">
                <div class="colbar">a</div>
                <div class="colcont">
                    <h2>Documentos sin vigencia</h2>
                    <h2 class="countext"><?php echo $execnulls['contnull']?> documentos <i class='bx bx-md bxs-file-import'></i></h2>
                </div>
            </a>
            <a href="dshb_control.php" class="dashconts">
                <div class="colbar">a</div>
                <div class="colcont">
                    <h2>Contratistas activos</h2>
                    <h2 class="countext"><?php echo $execconteo['activos'] ?> contratistas<i class='bx bx-md bx-user-check'></i></h2>
                </div>
            </a>
            <a href="" class="dashconts">
                <div class="colbar">a</div>
                <div class="colcont">
                    <h2>Total conteo documentos</h2>
                    <h2 class="countext"><?php echo $execconteototal['totaldocs']?> documentos</h2>
                </div>
            </a>
            <a href="" class="dashconts">
                <div class="colbar">a</div>
                <div class="colcont">
                    <h2>Documentos Vigentes</h2>
                    <h2 class="countext"><?php echo $execdocs['documents']?> vigentes<i class='bx bx-md bxs-file'></i></h2>
                </div>
            </a>
        </div>
        <div class="progresscharts">
            <?php 
            $graficaCumplimiento = mysqli_query($conex, "SELECT u.Nombre AS contratista, u.id_ruta AS ruta, rutas.nombre_ruta, COUNT(d.id) AS num_documentos, 28 AS num_documentos_requeridos, ROUND(COUNT(d.id) / 28 * 100, 2) AS porcentaje_cumplimiento
            FROM contratistas u
            LEFT JOIN documentos d ON u.id = d.id
            INNER JOIN rutas ON u.id_ruta = rutas.id_ruta
            WHERE d.Contenido_doc = 0
            GROUP BY u.id, u.Nombre");

            $graficaToJson = json_encode($graficaCumplimiento);
            ?>
            <div>
                <center><h2>Cumplimiento Documental por ruta</h2></center>
                <div class="combobox-list">
                    <label for="listacontractor">Seleccione el contratista</label>
                    <select name="listacontractor" id="dataContratorSelector">
                        <option value="--">--</option>
                        <?php 
                        foreach ($graficaCumplimiento as $row){ 
                            $jsonData[] = $row ?>
                        <option value="<?php echo $row['contratista'] . '|' . $row['ruta']; ?>"><?php echo $row['contratista'] . ' - ' . $row['nombre_ruta']; ?></option>                    <?php } ?>
                    </select>
                    <canvas id="cumplimientoDocumental"></canvas>
                    <script>
                        var jsonData = <?php echo json_encode($jsonData); ?>;
                        if (!Array.isArray(jsonData)){
                            jsonData = [jsonData];
                        }
                        var contractors = jsonData.map(item => item.contratista);
                        var routes = jsonData.map(item => item.ruta);
                        var percentageCompliance = jsonData.map(item => item.porcentaje_cumplimiento);
                        var numDocuments = jsonData.map(item => item.num_documentos);
                        var percentageMissing = jsonData.map(item => item.num_documentos_requeridos);
                        
                        var ctx = document.getElementById('cumplimientoDocumental').getContext("2d");
                        var complianceValue = 100 - percentageCompliance;
                        var chart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: ["Documentacion faltante", "Tasa de cumplimiento"],
                                datasets: [{
                                    data: [complianceValue, percentageCompliance],
                                    backgroundColor: [
                                        "rgba(75, 192, 192, 0.2)",
                                        "rgba(255, 99, 132, 0.2)"
                                    ],
                                    borderColor: [
                                        "rgba(75, 192, 192, 1)",
                                        "rgba(255, 99, 132, 1)"
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        display: false,
                                    }
                                }
                            }
                        });

                        var selectElement = document.getElementById('dataContratorSelector');
                        selectElement.addEventListener('change', function(){
                        var selectedValue = selectElement.value;
                        var selectedValuesArray = selectedValue.split('|');
                        var selectedContractor = selectedValuesArray[0];
                        var selectedRoute = selectedValuesArray[1];

                        // Filter the data based on selected contractor and route
                        var filteredData = jsonData.filter(function(item){
                            return item.contratista === selectedContractor && item.ruta === selectedRoute;
                        });

                        // Update the chart with filtered data
                        var filteredPercentageCompliance = filteredData.map(function(item){
                            return item.porcentaje_cumplimiento;
                        });
                        var filteredMissingPercentage = filteredData.map(function(item){
                            return 100 - item.porcentaje_cumplimiento;
                        });

                        chart.data.labels = ['Documentacion faltante', 'Tasa de cumplimiento'];
                        chart.data.datasets[0].data = [filteredMissingPercentage, filteredPercentageCompliance];
                        chart.update();
                    });
                    </script>
                </div>
                </div>
            <div>
                <h2>Numero de documentos subidos por nombre</h2>
                <canvas id="myChart2" width="500px" height="500px"></canvas>
            </div>
            </div>
            <?php
            ///////////////////////////////////////grafica de cumplimiento documentacion maestra//////////////////////////////////
            $graph2data = json_encode(array(
                'labels' => $grafica2names,
                'datasets' => array(
                    array(
                        'label' => 'Listado documentos subidos por nombre',
                        'data' => $grafica2counts,
                        'backgroundColor' => array(
                            '#FF6384',
                            '#A69F02',
                            '#23AB90',
                            '#31FC38',
                            '#8E4757',
                            '#14903C',
                            '#C72335',
                            '#F7AF5D',
                            '#00B8A4',
                            '#474AAD',
                            '#1C6A6A',
                            '#0A3611',
                            '#36A2EB',
                            '#FFCE56',
                            '#8B008B',
                            '#FFD700',
                            '#ADFF2F',
                            '#3a83d0',
                            '#e63f73',
                            '#38a846',
                        ),
                    ) 
                ),
            ));
            
            echo 
            '<script>
                    var ctx = document.getElementById("myChart2").getContext("2d");
                    var myChart = new Chart(ctx, {
                        type: "bar",
                        data: ' . $graph2data . ',
                        options: {
                            responsive: true,
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
            </script>';
            ?>
        </div>
        </div>
    </div>
</body>
</html>
