<?php 
include("../menu.php");
require('conexcion.php');//llama al archivo de la conexcion

$nombresssss=$_POST['usuario'];
$paternosss=$_POST['clave'];
$paternosss=md5($paternosss);
$materno=$_POST['nombre'];
$ci=$_POST['correo'];




$query="insert into usuario(usuario,clave,nombre,correo)
 values('$nombresssss','$paternosss','$materno','$ci')";

$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('insertando exitosamente');
		location.href='index.php';
	</script>";
}else
{
echo"<script>	
		window.alert('errorrrrrrrrrrr');
		location.href='index.php';
	</script>";

}

 ?>