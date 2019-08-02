
<?php 
	class articulos{

		public function insertaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$fecha=date('Y-m-d');

			$sql="INSERT into productos
							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$datos[3]',
									'$datos[4]',
									'$datos[5]',
									'$datos[6]',
									'$fecha')";
			return pg_query($conexion,$sql);
		}

		public function obtenDatosArticulo($idarticulo){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT codigo_pro, 
						codigo_tpro, 
						nombre_pro,
						descripcion_pro,
						inventario,
						precio 
				from productos 
				where codigo_pro='$idarticulo'";
			$result=pg_query($conexion,$sql);

			$ver=pg_fetch_row($result);

			$datos=array(
					"codigo_pro" => $ver[0],
					"codigo_tpro" => $ver[1],
					"nombre_pro" => $ver[2],
					"descripcion_pro" => $ver[3],
					"inventario" => $ver[4],
					"precio" => $ver[5]
						);

			return $datos;
		}

		public function actualizaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE productos set codigo_tpro='$datos[1]', 
										nombre_pro='$datos[2]',
										descripcion_pro='$datos[3]',
										inventario='$datos[4]',
										precio='$datos[5]'
						where codigo_pro='$datos[0]'";

			return pg_query($conexion,$sql);
		}

		public function eliminaArticulo($idarticulo){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from productos 
					where codigo_pro='$idarticulo'";
			$result=pg_query($conexion,$sql);

		}


	}

 ?>