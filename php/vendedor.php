<?php 
//clase vendendor, no se aplica el método eliminar
class Vendedor{
	//atributos rut, nombre, apellido y clave
	private $rut_vendendor;
	private $clave_vendedor;
	private $nombre_vendedor;
	private $apellido_vendodor; 
	//método para crear un vendedor 
	public crear_vendedor($rut,  $nombre, $apellido, $clave,$conn){
		$sql="INSERT  INTO vendedor(rut_vendedor, nombre_vendedor, apellido_vendedor, clave_vendedor) 
		      VALUES('$rut',  '$nombre', '$apellido', '$clave')";
		try {
			$conn->query($sql);

		} catch (PDOException $e){
		    echo $e->getMessage();
		}
	}
	//método para modificar datos de un vendedor
	public editar_vendedor($rut,  $nombre, $apellido, $clave, $conn){
		try {
			$sql = "UPDATE vendedor 
		        SET nombre_vendedor =? , apellido_vendedor=?, clave_vendedor=? 
		        WHERE rut_vendedor=?";
				$stmt= $conn->prepare($sql);
				$stmt->execute([$nombre, $apellido, $clave, $rut]);
		} catch (PDOException $e){
		    echo $e->getMessage();
		}
		
	}
	//método enlistar todos los vendedor en la base de datos
	public imprimir_lista($conn){
		$stmt = $conn->query("SELECT * FROM vendedor");
		while ($row = $stmt->fetch()) {
    		echo $row['rut_vendeor']." ".$row['nombre_vendedor']." ".$row['apellido_vendedor']." ".$row['clave_vendedor']." "."<br />\n";
		}
	}
	/*
	busca un vendedor y retorna sus datos en caso de que se encuentre 
	en la base de datos
	*/
	public busca_vendedor($rut){
		$stmt = $conn->query("SELECT * FROM vendedor WHERE rut_vendedor='$rut'");
		return $stmt;
	}
	/*
	método para conectar el vendedor con la aplicacion
	retorna true si existe en la base de datos y en caso
	contrario retorna false
	*/
	private conectar_vendedor($rut, $pass, $conn){
		$sql="SELECT * FROM vendedor WHERE rut_vendedor='$rut' and clave_vendedor='$password'";
		$stmt= $conn->query($sql);
		if($stmt->rowCount()==0){
			return 0;
		}else{
			return 1;
		}
	}
}
?>