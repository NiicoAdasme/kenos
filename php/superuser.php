<?php 
//clase super usuario, para conectar con la base de datos
class Superuser{
	private $rut_super;
	private $password_super;
	public function conectar_super($rut, $password, $conn){ 
		$sql="SELECT * FROM master WHERE rut_master='$rut' and pass_master='$password'";
		$stmt= $conn->query($sql);
		if($stmt->rowCount()==0){
			return 0;
		}else{
			return 1;
		}
	}
}
 
?>


