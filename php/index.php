<!DOCTYPE html>
<html>
<head>
	<title>Login Kenos</title>

	<link rel="stylesheet" type="text/css" href="estilos/css/bootstrap.css">
	<style type="text/css">

		body{  
			background: rgba(66, 103, 178, 1) ; 
		}
		#barbar{
			height: 50px;
		}
		#contenedor{  
			display: flex;
  			justify-content: center; 
		}
		#myformulario{ 
			display: flex;
  			justify-content: center;
			width: 420px;
			height: 280px;  
			background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* Chrome10-25,Safari5.1-6 */ 
			--webkit-border-radius: 15px 15px 15px 15px;
			border-radius: 15px 15px 15px 15px;
			-webkit-box-shadow: 1px 1px 1px 1px rgba(1,1,1,1);
			box-shadow: 1px 1px 1px 1px rgba(1,1,1,1);

		}
	</style>

</head>
<body>
	<div id="barbar"></div>
	 <div id="contenedor">
	 	<div id="myformulario">
		 	<form action="conecta_super.php" method="post">
		 	  <br>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Rut</label>
			    <input type="text" name="rut" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese Rut"> 
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Clave </label>
			    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Clave">
			    
			  </div>
			  
			  <button type="submit" class="btn btn-success">Ingresar</button>
			</form>
	 	</div>
	 </div>
</body>
</html>