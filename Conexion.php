<?php

$host= "host=localhost";
$port= "port=5432";
$dbname= "dbname=abcdb"; 
$user= "user=postgres";
$password= "password=12345";
$bd= pg_connect("$host $port $dbname $user $password") or die ("No se Pudo Conectar A La Base De Datos".pg_last_error());
?>



