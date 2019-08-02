<?php 
session_start();
if(isset($_SESSION['usuario'])){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>repartos</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Repartos pendientes</h1>
			<div class="row">
				<div class="col-sm-12">
					<div id="tablaRepartosLoad"></div>
				</div>
			</div>
		</div>
	</body>
	</html>
	<script type="text/javascript">

		function tomarReparto(idusuario){
			alertify.confirm('¿Desea tomar este reparto?', function(){ 
				$.ajax({
					type:"POST",
					data:"idusuario=" + idusuario,
					url:"../procesos/repartos/tomarReparto.php",
					success:function(r){
						if(r!=1){
							$('#tablaRepartosLoad').load('repartos/tablaRepartos.php');
							alertify.success("Reparto tomado con exito");
						}else{
							alertify.error("No se pudo tomar Reparto");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo!')
			});
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#tablaRepartosLoad').load('repartos/tablaRepartos.php');
		});
	</script>

	<?php 
}else{
	header("location:../index.php");
}
?>