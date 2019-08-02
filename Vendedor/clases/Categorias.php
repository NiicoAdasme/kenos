


<?php 

	class categorias{

		public function agregaCategoria($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into TIPO_PRODUCTO(codigo_tpro,
										nombre_tipo)
						values ('$datos[0]',
								'$datos[1]')";

			return pg_query($conexion,$sql);
		}

		public function actualizaCategoria($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE tipo_producto set nombre_tipo='$datos[1]'
								where codigo_tpro='$datos[0]'";
			echo pg_query($conexion,$sql);
		}

		public function eliminaCategoria($idcategoria){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from tipo_producto 
					where codigo_tpro='$idcategoria'";
			return pg_query($conexion,$sql);
		}

	}

 ?>