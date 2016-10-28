<?php 
include("../menu.php");
require('conexcion.php');

$id=$_POST['id'];
$nombresssss=$_POST['id_usuario'];
$paternosss=$_POST['usuario'];
$materno=$_POST['clave'];
$ci=$_POST['clave'];
$ext=$_POST['correo'];




$query=" UPDATE usuario set id_usuario='$nombresssss',usuario='$paternosss',clave='$materno',clave='$ci',correo='$ext'  where id_usuario='$id'";


$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('modificado exitosamente');
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