
<?php 
include("../menu.php");
require('conexcion.php');
$id=$_GET['id'];




$query="SELECT * from usuario where id_usuario=$id";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

 ?>

<div class="container">
	<div class="col-md-4">
		<h3>Formulario de Modificacion</h3>
 <form action="edit.php" method="post">

 <input	type="hidden" name="id" id="id" value="<?php echo $id;?>">


<div class="form-group">
				<label for="fecha"> USUARIO:</label>
				<input type="text" class="form-control" placeholder="Introduce su usuario"  name="usuario" id="usuario" value="<?php echo $row['usuario'];?>">
			</div>
<div class="form-group">
				<label for="fecha"> PASSWORD:</label>
				<input type="text" class="form-control" placeholder="Introduce su password"  name="clave" id="clave" value="<?php echo $row['clave'];?>">
			</div>
<div class="form-group">
				<label for="fecha"> NOMBRE:</label>
				<input type="text" class="form-control" placeholder="Ingrese su nombre"  name="nombre" id="nombre" value="<?php echo $row['nombre'];?>">
			</div>
<div class="form-group">
				<label for="fecha"> CORREO:</label>
				<input type="text" class="form-control" placeholder="Introduce costo"  name="correo" id="correo" value="<?php echo $row['correo'];?>">
			</div>


<input type="submit" name="Enviar"><br>
 </form>




</body>
</html>




 