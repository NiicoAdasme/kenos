<?php 

	class usuarios{
		public function registroUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$fecha=date('Y-m-d');

			$sql="INSERT into usuarios (nombre,
								apellido,
								email,
								password,
								rol,
								fechaCaptura
								)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$fecha'
								)";
			return pg_query($conexion,$sql);
		}
		public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$password=sha1($datos[1]);

			$_SESSION['usuario']=$datos[0];
			$_SESSION['iduser']=self::traeID($datos);
			$_SESSION['rol']=$datos[2];

			$sql="SELECT * 
					from usuarios 
				where email='$datos[0]'
				and rol='$datos[2]'
				and password='$password'";
			$result=pg_query($conexion,$sql);

			if(pg_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
		public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$password=sha1($datos[1]);

			$sql="SELECT id_usuario 
					from usuarios 
					where email='$datos[0]'
					and rol='$datos[2]'
					and password='$password'"; 
			$result=pg_query($conexion,$sql);

			return pg_fetch_row($result)[0];
		}

		public function obtenDatosUsuario($idusuario){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_usuario,
							nombre,
							apellido,
							email,
							rol
					from usuarios 
					where id_usuario='$idusuario'";
			$result=pg_query($conexion,$sql);

			$ver=pg_fetch_row($result);

			$datos=array(
						'id_usuario' => $ver[0],
							'nombre' => $ver[1],
							'apellido' => $ver[2],
							'email' => $ver[3],
							'rol' => $ver[4]
						);

			return $datos;
		}

		public function actualizaUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE usuarios set nombre='$datos[1]',
									apellido='$datos[2]',
									email='$datos[3]',
									rol='$datos[4]'
						where id_usuario='$datos[0]'";
			return pg_query($conexion,$sql);	
		}

		public function eliminaUsuario($idusuario){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from usuarios 
					where id_usuario='$idusuario'";
			return pg_query($conexion,$sql);
		}
	}

 ?>