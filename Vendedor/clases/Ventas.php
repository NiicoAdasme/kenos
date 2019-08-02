<?php 

class ventas{
	public function obtenDatosProducto($idproducto){
		$c=new conectar();
		$conexion=$c->conexion();

		$sql="SELECT nombre_pro,
		descripcion_pro,
		inventario,
		precio
		from productos
		where codigo_pro='$idproducto'";
		$result=pg_query($conexion,$sql);

		$ver=pg_fetch_row($result);


		$data=array(
			'nombre' => $ver[0],
			'descripcion' => $ver[1],
			'cantidad' => $ver[2],
			'precio' => $ver[3]
		);		
		return $data;
	}

	public function crearVenta(){
		$c= new conectar();
		$conexion=$c->conexion();

		$fecha=date('Y-m-d');
		$idventa=rand(rand(0,1500000)+rand(0,55000));
		$datos=$_SESSION['tablaComprasTemp'];
		$r=0;

		$sql="INSERT into venta
							values ('$idventa',
							         '553738',
									 '4637',
									 '11',
									 '11',
									 '$fecha',
									 '11',
									 '11',
									 '11')";
		pg_query($conexion,$sql);
	}

	public function nombreCliente($idCliente){
		$c= new conectar();
		$conexion=$c->conexion();

		 $sql="SELECT apellido_cliente,nombre_cliente 
			from cliente 
			where id_cliente='$idCliente'";
		$result=pg_query($conexion,$sql);

		$ver=pg_fetch_row($result);

		return $ver[0]." ".$ver[1];
	}

	public function obtenerTotal($idventa){
		$c= new conectar();
		$conexion=$c->conexion();

		$sql="SELECT precio 
				from venta 
				where id_venta='$idventa'";
		$result=pg_query($conexion,$sql);

		$total=0;

		while($ver=pg_fetch_row($result)){
			$total=$total + $ver[0];
		}

		return $total;
	}
}

?>