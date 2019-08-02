<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Categorias.php";
	$categoria=$_POST['categoria'];

	$datos=array(
		$id=rand(rand(0,10500)+rand(0,55000) , rand(0,1500000)+rand(0,55000)),
		$categoria,
				);

	$obj= new categorias();

	echo $obj->agregaCategoria($datos);


 ?>