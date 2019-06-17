
<!DOCTYPE html">
<html >
<head>
	<title>title</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>


<div class="container">
<?php

include 'nav-admin.php';

?>

<h1>Añadir plato</h1>
<p>Elige que orden tendran dentro del menú</p>
<form class='text-center' method='post' action='agregar-plato.php'>
<div class="form-group mx-sm-3 mb-2">
    <label for="nombre" class="sr-only">nombre del plato</label>
    <input name='nombre' type="text" class="form-control" id="nombre_plato" required placeholder="Nombre del Plato">
</div>
  <p>Elige que orden tendran dentro del menú</p>
<div class="form-group mx-sm-3 mb-2">
    <label for="precio_plato" class="sr-only">Precio Plato</label>
    <input name='precio' type="text" class="form-control" required value = 0.00 ='€' id="Precio_Plato" placeholder="Poner precio">
	<small>Poner precio sin palabra euros y con decimales con punto</small>
</div>

 <fieldset class="border border-secondary p-2">
  <p>Elige que orden tendran los platos en el menú</p>
  <div class="form-check form-check-inline">
  <input name='orden_plato' class="form-check-input" type="radio" id="primero" value="primeros">
  <label class="form-check-label" for="primeros">primeros</label>
  

<div class="form-check mt-2">
  <input name='orden_plato' class="form-check-input" type="radio" id="segundo" value="segundos">
  <label class="form-check-label" for="segundos">segundos</label>
</div>

<div class="form-check form-check-inline">
  <input name='orden_plato'  class="form-check-input" type="radio" id="postre" value="postres">
  <label class="form-check-label" for="postres">Postres</label>
 </div> 
</div>

</fieldset>
<div class="form-check form-check-inline">
  <input name='menu_activo' class="form-check-input" type="checkbox" id="activo" value=1 checked>
  <label class="form-check-label" for="inlineCheckbox1">Activo
  Activar dentro del menú
  </label>
</div>
<div class="form-check form-check-inline">
  <input name='menu_activo' class="form-check-input" type="radio" id="Inactivo" value="Inactivo">
  <label class="form-check-label" for="inlineCheckbox1">Inactivo</label>
</div>
<div>
 <button type="submit" class="btn btn-primary">Agregar nuevo plato</button>
</div>
</form>
