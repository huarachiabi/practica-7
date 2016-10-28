<style type="text/css"> 
body{ 
background-image: url(imagen/upea.jpg); 
background-position : left; 
background-repeat : no-repeat; 
background-attachment : fixed; 
} 
</style>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Sistema de Ventas</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <head>  
		<meta charset="UTF-8">
		<title>Sistema de ventas</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<script src="js/bootstrap.min.js"></script>
</head>
    <style>
      .container{margin-top:100px}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation">
  </nav>
    <div class="container">
	
	<div class="col-md-8">
	<div class="panel panel-default">
	<div class="panel-heading">
    <h2 class="panel-title"><center> Sistema de Ventas</center></h2>
  </div>
  <div class="panel-body">
	
      <form class="form-horizontal" action="login.php" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese Usuario" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Ingresar al Sistema</button>
          </div>
        </div>
      </form>
	   </div>
	    </div>
    </div>
</div>

