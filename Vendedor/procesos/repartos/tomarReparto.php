<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Repartos.php";

	$obj= new repartos;

	echo $obj->tomarReparto($_POST['idusuario']);

 ?>