<?php
 
	require_once "/dbconfi.php"; 
	$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";  
	try {
		$conn = new PDO($dsn);
		if($conn){
			echo ("se ha conectado a la base de datos");
		} 

	} catch (PDOException $e){
	    echo $e->getMessage();
	}
	
?>