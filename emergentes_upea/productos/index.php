
<?php 
include("../menu.php");
require('conexcion.php');
$query="SELECT
productos.id_producto,
productos.descripcion,
productos.costo_unitario,
productos.cantidad,
productos.stock_minimo,
categoria.id_categoria

FROM
productos
INNER JOIN categoria ON  categoria.id_categoria= productos.id_categoria ";
$resultado=$mysqli->query($query);
 ?>

 <div class="container">
	<div class="col-md-8">
		<CENTER><h4><I><B>REGISTRO DE PRODUCTOS</B> </I> </h4></CENTER>
		<a class="btn btn-danger" href="nuevo.php" role="button">NUEVA PRODUCTO</a>
		 <table class="table table-bordered">
<thead>
<tr>

<td><b>NUMERO</b> </td>
<td><b>DESCRIPCION</b> </td>
<td><b><CENTER>COSTO UNITARIO</CENTER></b> </td>
<td><b>CANTIDAD</b> </td>
<td><b>STOCK MINIMO</b> </td>
<td><b>CATEGORIA</b> </td>

<TH COLSPAN="2"><B><CENTER>ACCION</CENTER></B></TH>
								
</tr>


<tbody>
<?php while($row=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $row['id_producto']; ?> 	</td>
<td><?php echo $row['descripcion']; ?></td>
<td><?php echo $row['costo_unitario']; ?></td>
<td><?php echo $row['cantidad']; ?></td>
<td><?php echo $row['stock_minimo']; ?></td>
<td><?php echo $row['id_categoria']; ?></td>
<td><a class="btn btn-success" href="modificar.php?id=<?php echo $row['id_producto'];?>" role="button">Modificar</a> </td>
<td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id_producto'];?>" role="button">Eliminar</a> </td>
</tr>
<?php } ?>

</tbody>

</thead>


 </table>
 </body>
 </html>