<?php 
include ("conection.php");
include ("notifications.php");
$id = $_GET['id'];
$Nombre = $_GET['Nombre'];
$docname = $_POST['docname'];
$document = $_FILES['document']['name'];
$documentsize = $_FILES['document']['size'];
$documentpath = "../view/documents/" . $document;
$docdate = $_POST['docdate'];
move_uploaded_file($_FILES['document']['tmp_name'], $documentpath);

if(strlen($document) > 35){
        echo "<script>alert('El nombre del documento es demasiado largo, acortelo para permitir ser subido');window.history.go(-1)</script>";
        die();
}
if (isset($_POST['docdate']) && !empty($_POST['docdate'])) {
        $docdate = $_POST['docdate'];
        $upldfile = "INSERT INTO documentos (Nombre_doc, Vigencia, Contenido_Doc, id, id_nomdoc) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $upldfile);
        mysqli_stmt_bind_param($stmt, "sssii", $docname, $docdate, $documentpath, $id, $listadocsitem);
} else if(!isset($_POST['docdate']) && empty($_POST['docdate'])){
        $upldfile = "INSERT INTO documentos (Nombre_doc, Vigencia, Contenido_Doc, id, id_nomdoc) VALUES (?, NULL, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $upldfile);
        mysqli_stmt_bind_param($stmt, "ssis", $docname, $documentpath, $id, $listadocsitem);
}

$exec = mysqli_stmt_execute($stmt);

if (isset($exec)) {
        echo "<script>alert('El documento fue subido con exito');window.location='../view/contratistdetail.php?id=".$id."'</script>";
} else {
        echo "<script>alert('Error al subir el documento');window.history.go(-1)</script>";
}

mysqli_stmt_close($stmt);
$mensaje = 'El documento: '.$docname.' del contratista '.$Nombre.' ha sido cargado en la plataforma';
crearNotificacion($mensaje)
?>