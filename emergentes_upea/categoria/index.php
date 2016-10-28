<?php 
include("../menu.php");
require('conexcion.php');
$query="SELECT
categoria.id_categoria,
categoria.descripcion FROM
categoria";

$resultado=$mysqli->query($query);
?>
 

<div class="container">
	<div class="col-md-8">
 <CENTER><h4><I><B>REGISTRO DE CATEGORIA</B></I></h4></CENTER>

<a class="btn btn-danger" href="nuevo.php" role="button">NUEVA CATEGORIA</a>
		 <table class="table table-bordered">

<thead>
<tr>

<td><b><CENTER>NUMERO</CENTER></b> </td>
<td><b><CENTER>DESCRIPCION</CENTER></b> </td>

<TH COLSPAN="2"><B><CENTER>ACCION</CENTER></B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_categoria']; ?> 	</td>
<td><?php echo $row['descripcion']; ?></td>>


<td><a class="btn btn-success" href="modificar.php?id=<?php echo $row['id_categoria'];?>" role="button">Modificar</a> </td>
<td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id_categoria'];?>" role="button">Eliminar</a> </td>


</tr>
<?php } ?>
 

</tbody>

</thead>


 </table>
 </body>
 </html>