<?php include 'header.php'?>
<?php include 'nav-admin.php'?>





<?php


if (isset($_GET['id'])){
$id= $_GET['id'];
//echo $id;
include '../includes/conexiondb.php';
$sql="DELETE FROM nombre_platos WHERE id ='$id'";
if (mysqli_query($conexion,$sql)){
	echo "El resgistro con ID=$id ha sido borrado";
}else{
	echo "El resgistro con ID=$id no ha podido ser borrado";
}
}

?>
<?php include 'footer.php'?>