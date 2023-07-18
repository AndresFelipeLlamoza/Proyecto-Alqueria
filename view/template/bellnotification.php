<?php 
include ('../model/conection.php');
include ('../model/notifications.php');
$fecha_actual = time();
$outdated = mysqli_query($conex, "SELECT documentos.*, contratistas.Nombre, rutas.nombre_ruta FROM 
documentos LEFT JOIN contratistas ON documentos.id = contratistas.id LEFT JOIN rutas ON
contratistas.id_ruta = rutas.id_ruta");
foreach ($outdated as $row){
    if (strtotime($row['Vigencia']) < $fecha_actual && $row['Vigencia'] != null){
        $message = "El documento ".$row['Nombre_doc']." del contratista ".$row['Nombre']." de la ruta ".$row['nombre_ruta']." esta vencido";
        if (!checkExistingNotification($message)){
            crearNotificacion($message);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bell.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="contain-notifications">
        <div class="desplegable-notificacion">
        <div class="bar-notifications">Notificaciones</div>
        <p class="no-notifications">Sin notificaciones</p>
            <ul class="lista-notificacion"></ul>
        </div>
        <a class="bellcontainer" href="../model/notifications.php">
            <i class='bx bxs-bell'></i><span class="contador-notificaciones">0</span>
        </a>
    </div>

    <script>
        $(document).ready(function(){
            function contadorNotificacion(){
                $.ajax({
                    url: '../model/sinleer.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        var contar = response.contar;
                        $('.contador-notificaciones').text(contar);
                    },
                    error: function(){
                        console.log('error al obtener el conteo de numero de notificaciones')
                    }
                });
            }

            function cargarNotificaciones(){
                $.ajax({
                    url: '../model/obtenernotificaciones.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        var notifications = response.notificaciones;
                        var $notificationList = $('.lista-notificacion');
                        $notificationList.empty();
                        if(notifications.length > 0){
                            $('.no-notifications').hide();
                            for (var i=0; i < notifications.length; i++){
                                var notification = notifications[i];
                                var listenItem = '<li data-id_notificacion="'+ notification.id_notificacion +'">' + notification.mensaje + '</li>';
                                $notificationList.append(listenItem);
                            }
                        }else{
                            $('.no-notifications').show();
                        }
                    },
                    error: function(){
                        console.log("error al mostrar las notificaciones");
                    }
                });
            }

            function marcarNotificacionesComoLeidas() {
                var notificationIds = [];
                $('.lista-notificacion li').each(function() {
                    notificationIds.push($(this).data('id_notificacion'));
                });

                $.ajax({
                    url: '../model/marcarleidas.php',
                    type: 'POST',
                    data: { 
                        notificationIds: notificationIds
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function() {
                        console.log('Error al marcar notificaciones como leídas');
                    },
                });
            }

            contadorNotificacion();

            $('.bellcontainer').on('click', function(e){
                e.preventDefault();
                cargarNotificaciones();
                $('.desplegable-notificacion').toggle();
                marcarNotificacionesComoLeidas();
            });
        });
        
    </script>
</body>
</html>