<?php 
include("../menu.php");
?>
<?php 

require('conexcion.php');
$id=$_GET['id'];



$query="SELECT * from productos where id_producto=$id";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

 ?>

<div class="container">
	<div class="col-md-4">

		<h3>Formulario de Modificacion</h3>
 <form action="edit.php" method="post">

 <input	type="hidden" name="id" id="id" value="<?php echo $id;?>">

				<label for="fecha"> DESCRIPCION:</label>
				<input type="text" class="form-control" placeholder="Ingrase la descripcion"  name="descripcion" id="descripcion" value="<?php echo $row['descripcion'];?>">
			
<div class="form-group">
				<label for="fecha"> COSTO UNITARIO:</label>
				<input type="text" class="form-control" placeholder="Introduce costo"  name="costo_unitario" id="costo_unitario" value="<?php echo $row['costo_unitario'];?>">
			</div>
<div class="form-group">
				<label for="fecha"> CANTIDAD:</label>
				<input type="text" class="form-control" placeholder="Introduce la cantidad"  name="cantidad" id="cantidad" value="<?php echo $row['cantidad'];?>">
			</div>
<div class="form-group">
				<label for="fecha"> STOCK MINIMO:</label>
				<input type="text" class="form-control" placeholder="sotock minimo"  name="stock_minimo" id="stock_minimo" value="<?php echo $row['stock_minimo'];?>">
			</div>


			<div class="form-group">
				<label for="fecha"> CATEGORIA:</label>
				<select name="id_categoria" id="id_categoria" class="form-control">
				<option value="">Seleccione el categoria</option>
				<?php
					while($fila=$combocategoria->fetch_assoc())
					{
				?>
					
					<option value="<?php echo $fila['id_categoria'];?>"><?php echo $fila['descripcion'];?></option>
				<?php }	?>
				</select>
			</div>
			
			
			
			

<input type="submit" name="Enviar"><br>
 </form>




</body>
</html>




 