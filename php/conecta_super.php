<?php  
	require_once "conectardb.php";
	require_once "superuser.php";

	$rut = $_POST["rut"];
	$pass =  $_POST["pass"];
	$usersuper = new Superuser;
	$respuesta = $usersuper->conectar_super($rut, $pass, $conn);
	if($respuesta == 1){ 
		session_start();
		$_SESSION['rut']=$rut;
		header('Location: superpanel.php?p='.$rut.'');
	}else{  
		header("Location: index.php?f=error");
	}
	 
?>