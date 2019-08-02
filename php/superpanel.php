<?php
	session_start();
	$s = $_SESSION['rut'];
	if($s==null || $s=""){
		header("Location: index.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Intranet Kenos</title>

	<link rel="stylesheet" type="text/css" href="estilos/css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body> 
	<div>
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-blue bg-blue">
  		<!-- Navbar content -->
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto"> 
			    	<a class="navbar-brand" href="#">Inicio</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>    
				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Vendedor
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Crear vendedor</a>
				          <a class="dropdown-item" href="#">Mofidicar datos</a> 
				          <a class="dropdown-item" href="#">Ver Lista de vendedores</a> 
				        </div>
				    </li>
				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Repartidor
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Crear Repartidor</a>
				          <a class="dropdown-item" href="#">Mofidicar datos</a> 
				          <a class="dropdown-item" href="#">Ver Lista de Repartidor</a> 
				        </div>
				    </li>
				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Bodeguero
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Crear Bodeguero</a>
				          <a class="dropdown-item" href="#">Mofidicar datos</a> 
				          <a class="dropdown-item" href="#">Ver Lista de Bodeguero</a> 
				        </div>
				    </li>
				    <li>
				    	<form action="salir.php" method="post">
				    		<button type="submit" class="btn btn-success">Salir</button>
				    	</form>
				    </li>
			        
			    </ul>
	    	</div>
		</nav>
	</div>
</body>
</html>