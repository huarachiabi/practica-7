<?php 
include("../menu.php");
require('conexcion.php');
$query="

SELECT
usuario.id_usuario,
usuario.usuario,
usuario.clave,
usuario.nombre,
usuario.correo

FROM
usuario";


$resultado=$mysqli->query($query);

 ?> 
<div class="container">
	<div class="col-md-8">
		<CENTER><h4><I><B>REGISTRO DE USUARIO</B> </I> </h4></CENTER>
		<a class="btn btn-danger" href="nuevo.php" role="button">NUEVA USUARIO</a>
		 <table class="table table-bordered">
	<thead>
<tr>


<td><b>NUMERO</b> </td>
<td><b>USUARIO</b> </td>
<td><b>PASSWORD</b> </td>
<td><b>NOMBRE</b> </td>
<td><b><CENTER>CORREO</CENTER></b> </td>

<TH COLSPAN="2"><B><CENTER>ACCION</CENTER></B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_usuario']; ?> 	</td>
<td><?php echo $row['usuario']; ?></td>
<td><?php echo $row['clave']; ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['correo']; ?></td>

<td><a class="btn btn-success" href="modificar.php?id=<?php echo $row['id_usuario'];?>" role="button">Modificar</a> </td>
				<td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id_usuario'];?>" role="button">Eliminar</a> </td>



</tr>
<?php } ?>

</tbody>

</thead>


 </table>
 </body>
 </html>