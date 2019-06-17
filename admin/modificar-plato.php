<?php
if(isset($_GET['id'])){
$id= $_GET['id'];
//echo $id;
include "../includes/conexiondb.php";
$sql="SELECT * FROM nombre_platos WHERE id='$id' ";
if($consulta =mysqli_query($conexion,$sql)){
while ($fila = mysqli_fetch_array($consulta)) {
?>
<form>
<input name='id' type='text' value='<?php echo $fila['id'] ?>' disabled >
<input name='nombre' type='text' value='<?php echo $fila['nombre'] ?>'  >
<input name='precio' type='text' value='<?php echo $fila['precio'] ?>'  >
</form>

<form  class ='text-center' method='post' action='agregar-plato.php'>
<div class="form-group">
   <label for="id">id del Plato</label>
   <input  value ='<?php echo $fila['id'] ?>' name='id' type="text" class="form-control" id="id" disabled>
 </div>
 <div class="form-group">
   <label for="nombre">Nombre del Plato</label>
   <input name='nombre' type="text" class="form-control" id="nombre" value='<?php echo $fila['nombre'] ?>'>
 </div>
 <div class="form-group">
   <label for="precio">Precio Plato</label>
   <input  name='precio' type="text" class="form-control"  required value= <?php echo $fila['precio']; ?> id="precio" >
 </div>

<fieldset class="border border-secondary p-2 " >
 <legend>Elige que orden tendrán en el menú</legend>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="orden_plato" id="primeros" value="primeros" <?php if($fila['orden_plato']==='primeros'){ echo 'checked';} ?>>
 <label class="form-check-label" for="primero">Primeros</label>
</div>
<div class="form-check form-check-inline">
 <input class="form-check-input" type="radio" name="orden_plato" id="segundos" value="segundos" <?php if($fila['orden_plato']==='segundo'){ echo 'checked';} ?>>
 <label class="form-check-label" for="segundo">segundos</label>
</div>
<div class="form-check form-check-inline">
 <input required class="form-check-input" type="radio" name="orden_plato" id="postres" value="postres" <?php if($fila['orden_plato']==='postres'){ echo 'checked';} ?>>
 
<label class="form-check-label" for="postre">postre</label>
</div>
</fieldset>
<div class="form-check mt-2">
 <input class="form-check-input" type="checkbox"  id="menu_activo" value=<?php echo $fila['menu_activo'] ;?> <?php if($fila['menu_activo']==='1'){ echo 'checked';} ?> name='menu_activo'>
 <label class="form-check-label" for="menu_activo">
   Activar dentro del menú
 </label>
</div>
<button type="submit" class=" mt-2 btn btn-primary mb-2">Modificar plato</button>
</form>
<?php
}//FIN DEL WHILE
}else{
echo "El registro con ID=$id no ha podido ser modificado";
}
}
