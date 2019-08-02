<?php 

	class conectar{
		 function conexion(){
			$host="host=146.83.194.142";
			$port="port=5432";
			$dbname="dbname=abcdb";
			$user="user=abcsolutions";
			$password="password=abc2019solutions";
			
			$conexion= pg_connect("$host $port $dbname $user $password");
			return $conexion;
		}
		
	}
 ?>