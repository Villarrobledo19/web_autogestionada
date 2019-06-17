<?php
// función para conectarnos con la base de datos
$host='localhost';
$usuario='root';
$clave ='';
$base ='webautogestionadamenudeldia';

$conexion = mysqli_connect($host,$usuario,$clave,$base) or die('No se ha podido conectar con la base de datos');
// Change character set to utf8
mysqli_set_charset($conexion,"utf8");

$sql1= "SELECT * FROM nombre_platos WHERE orden_plato = 'primeros' AND menu_activo = 1";
$sql2= "SELECT * FROM nombre_platos WHERE orden_plato = 'segundos' AND menu_activo = 1";
$sql3= "SELECT * FROM nombre_platos WHERE orden_plato = 'postres' AND menu_activo = 1";

// ejecutamos las consultas
$consulta1 = mysqli_query($conexion, $sql1);
$consulta2 = mysqli_query($conexion, $sql2);
$consulta3 = mysqli_query($conexion, $sql3);
?>