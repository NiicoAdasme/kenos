<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Articulos.php";
	$obj= new articulos();
	
	$id=rand(0,1500000+rand(0,55000));

	$datos=array(
		  $id,
		  $_POST['categoriaSelect'],
		  $_POST['nombre'],
		  $_POST['descripcion'],
		  $_POST['cantidad'],
		  $_POST['precio'],
		  $_POST['imagen'],
	);

	echo $obj->insertaArticulo($datos);


 ?>