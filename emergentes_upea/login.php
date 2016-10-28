


<?php
  session_start();
  require('conexcion.php');
 
  // Obtengo los datos cargados en el formulario de login.

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $password=md5($password);
  $sql="SELECT usuario,clave from usuario where usuario='$usuario' and clave='$password'";
   $com=$mysqli->query($sql)or die('error de bd');
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($com){
    // Guardo en la sesión el email del usuario.
	$_SESSION['id_usuario'] = 1;
    $_SESSION['usuario'] = $usuario;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: /emergentes_upea/ventas/index.php");
  }else{
   header("Location: /emergentes_upea/index.php");
  }
 
?>
