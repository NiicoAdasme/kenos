<?php 
	session_start();
	require_once "../../clases/Conexion.php";

	$c= new conectar();
	$conexion=$c->conexion();

	$idcliente=$_POST['clienteVenta'];
	$idproducto=$_POST['productoVenta'];
	$descripcion=$_POST['descripcionV'];
	$cantidad=$_POST['cantidadV'];
	$precio=$_POST['precioV'];

	$sql="SELECT nombre_cliente,apellido_cliente 
			from cliente 
			where id_cliente='$idcliente'";
	$result=pg_query($conexion,$sql);

	$c=pg_fetch_row($result);

	$ncliente=$c[1]." ".$c[0];

	$sql="SELECT nombre_pro 
			from productos 
			where codigo_pro='$idproducto'";
	$result=pg_query($conexion,$sql);

	$nombreproducto=pg_fetch_row($result)[0];

	$articulo=$idproducto."||".
				$nombreproducto."||".
				$descripcion."||".
				$precio."||".
				$ncliente."||".
				$idcliente;

	$_SESSION['tablaComprasTemp'][]=$articulo;

 ?>