<?php
include ("conection.php");
include ("notifications.php");
$id = $_GET["id"];
$Nombre = $_GET['Nombre'];
$id_documento = $_GET['id_documento'];
$Nombre_doc = $_GET['Nombre_doc'];
$iddocument = $_POST["iddocument"];
$vigenciadate = $_POST["vigenciadate"];
$vigenciadateformat = date('Y-m-d', strtotime($vigenciadate));
$filecontent = $_FILES['filecontent']['name'];
$filecontentpath = "../view/documents/".$filecontent."";
move_uploaded_file($_FILES['filecontent']['tmp_name'],$filecontentpath);

if(isset($_POST["vigenciadate"]) && !empty($_POST["vigenciadate"])){
    $sql = "UPDATE documentos SET Vigencia = ? , Contenido_doc = ? WHERE id_documento = ? AND id = ?";
    $stmt = mysqli_prepare($conex, $sql);
    mysqli_stmt_bind_param($stmt, "ssii", $vigenciadate, $filecontentpath, $iddocument, $id);
}else if(!isset($_POST["vigenciadate"]) || $_POST['vigenciadate'] == ""){
    $sql = "UPDATE documentos SET Contenido_doc = ?, Vigencia = NULL WHERE id_documento = ? AND id = ?";
    $stmt = mysqli_prepare($conex, $sql);
    mysqli_stmt_bind_param($stmt, 'sii', $filecontentpath, $iddocument, $id);
}

$exec = mysqli_stmt_execute($stmt);

if(isset($exec)){
    echo "<script>alert('exito al renovar el documento');window.location='../view/contratistdetail.php?id=".$id."'</script>";
}else{
    echo "<script>alert('Hubo un problema al renovar el documento');window.location='../view/contratistdetail.php?id=".$id."'</script>";
}
mysqli_stmt_close($stmt);

$message = "El documento ".$Nombre_doc." del contratista ".$Nombre." ha sido actualizado";
crearNotificacion($message);
?>