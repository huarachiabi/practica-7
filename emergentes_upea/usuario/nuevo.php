<?php
include("../menu.php");
?>
<div class="container">
	<div class="col-md-4">
<center><h1>REGISTRO DE USUARIO</h1></center>
 <form action="grabar_usuario.php" method="post">

<div class="form-group">
				<label for="fecha"> USUARIO:</label>
				<input type="text" class="form-control" placeholder="Introduce usuario"  name="usuario" id="usuario" value="">
			</div>


<div class="form-group">
				<label for="fecha"> PASSWORD:</label>
				<input type="text" class="form-control" placeholder="Introduce contraseña"  name="clave" id="clave" value="">
			</div>


<div class="form-group">
				<label for="fecha"> NOMBRE:</label>
				<input type="text" class="form-control" placeholder="Introduce nombre"  name="nombre" id="nombre" value="">
			</div>


<div class="form-group">
				<label for="fecha"> CORREO:</label>
				<input type="text" class="form-control" placeholder="Introduce correo"  name="correo" id="correo" value="">
			</div>

<input type="submit" name="enviar"><br>
 </form>
</body>
</html>