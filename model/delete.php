<?php 
include ("conection.php");

$id = $_GET["id"];

$deleteq = "DELETE FROM contratistas WHERE id = '$id'";
$result = mysqli_query($conex, $deleteq);

if (isset($result)){
    echo "<script>alert('El contratista fue eliminado de forma exitosa'); window.location='../view/contratists.php'</script>";
}else{
    echo "<script>alert('Error al eliminar al contratista'); window.location='../view/contratists.php'</script>";
}
?>