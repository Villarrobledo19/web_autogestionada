<?php
include 'header.php'
?>

<div class="container"><?php
//recogemos los datos validandolos con isset 
if( isset($_POST['nombre'],$_POST['precio'],$_POST['orden_plato'],$_POST['menu_activo'])){
	//los datos recogidos los asociamos a una variable de manejo
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$orden_plato= $_POST['orden_plato'];
	$menu_activo = $_POST['menu_activo'];
	//abrimos conexion y ejecutamos la consulta
	include '../includes/conexiondb.php';
	// preparamos la orden sql
	$sql ="INSERT INTO nombre_platos(id,nombre,precio,orden_plato,menu_activo) VALUES('0','$nombre','$precio','$orden_plato','$menu_activo')";
	if(mysqli_query($conexion, $sql)){
		echo 'Plato agregado Volver al <a class="btn btn-success" href="admin-platos.php">formulario</a>';
		

	}else{
		echo 'Plato no agregado. Volver al <a class="btn btn-success" href="admin-platos.php">formulario</a>';
	}	


}else{
	echo 'rellene bien el <a class="btn btn-success" href="nuevo_plato.php">formulario</a>';
}

?></div>
<?php
include 'footer.php'?>