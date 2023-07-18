<?php
    include ("conection.php");
    
    $sql = "SELECT * FROM contratistas WHERE Estado = 'Activo'";
    $res = mysqli_query($conex, $data);
    
    $data = array();
    while ($row = $res->fetch_assoc()){
        $data[] = $row;
    }

    echo json_encode(array('data' => $data))

?>