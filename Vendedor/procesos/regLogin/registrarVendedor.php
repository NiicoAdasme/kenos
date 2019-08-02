<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Vendedor.php";

	$obj= new vendedor();

	$pass=sha1($_POST['contraseña']);
	$id=rand(rand(0,10500)+rand(0,55000) , rand(0,1500000)+rand(0,55000));
	$datos=array(
		$id,
		$_POST['email'],
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['telefono'],
		$pass
				);

	echo $obj->registroVendedor($datos);

 ?>