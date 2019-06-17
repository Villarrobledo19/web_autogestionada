<?php
// función para conectarnos con la base de datos
$host='localhost';
$usuario='root';
$clave ='';
$base ='webautogestionadamenudeldia';

$conexion = mysqli_connect($host,$usuario,$clave,$base) or die('No se ha podido conectar con la base de datos');
// Change character set to utf8
mysqli_set_charset($conexion,"utf8");

?>