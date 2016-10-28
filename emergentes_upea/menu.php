<!--Menú-->
<style type="text/css"> 
body{ 
background-image: url(../imagen/upea.jpg); 
background-position : left; 
background-repeat : no-repeat; 
background-attachment : fixed; 
} 
</style> 
<?php session_start();?>
<html lang="es">  
<head>  
		<meta charset="UTF-8">
		<title>Sistema de ventas</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<script src="../js/bootstrap.min.js"></script>
</head>


<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><b>SisVen</b></a>
  </div>
 <div class="navbar-header">
 <br>
  <label > Bienvenido</label>
   
 <label > <?php echo  $_SESSION['usuario'];?></label>
  </div>
 <ul class="nav navbar-nav navbar-right">
      <li><a href="#"></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/emergentes_upea/cerrar.php">Cerrar Sesion</a></li>
      
    </ul>
	
  
</nav>


<ul class="nav nav-tabs">
  <li class="active"><a href="#">Inicio</a></li>
  <li><a href="/emergentes_upea/categoria/index.php">Categoria</a></li>
  <li><a href="/emergentes_upea/productos/index.php">Productos</a></li>
  <li><a href="/emergentes_upea/usuario/index.php">Usuarios</a></li>
  <li><a href="/emergentes_upea/ventas/index.php">Ventas</a></li>
</ul>

