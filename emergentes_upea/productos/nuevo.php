<?php 
include("../menu.php");
require('conexcion.php');
$query="SELECT * FROM categoria";
$combocategoria=$mysqli->query($query);
?>


<div class="container">
	<div class="col-md-4">
		
<center><h1>REGISTRO DE PRODUCTO</h1></center>
 <form action="grabar_usuario.php" method="post">

<div class="form-group">  
		<label for="fecha"> DESCRIPCION:</label>
		<input type="text" name="descripcion" id="descripcion" class="form-control" value="">
</div>

<div class="form-group">  
		<label for="fecha"> COSTO UNITARIO:</label>
		<input type="text" name="costo_unitario" id="costo_unitario" class="form-control" value="">
</div>
<div class="form-group">  
		<label for="fecha"> CANTIDAD:</label>
		<input type="text" name="cantidad" id="cantidad" class="form-control" value="">
</div>

<div class="form-group">  
		<label for="fecha"> STOCK MINIMO:</label>
		<input type="text" name="stock_minimo" id="stock_minimo" class="form-control" value="">
</div>

<div class="form-group">
				<label for="fecha"> CATEGORIA:</label>
				<select name="id_categoria" id="id_categoria" class="form-control">
				<option value="">Seleccione la categoria</option>
				<?php
					while($fila=$combocategoria->fetch_assoc())
					{
				?>
					
					<option value="<?php echo $fila['id_categoria'];?>"><?php echo $fila['descripcion'];?></option>
				<?php }	?>
				</select>
			</div>







<input type="submit" name="enviar"><br>
 </form>
</body>
</html>
