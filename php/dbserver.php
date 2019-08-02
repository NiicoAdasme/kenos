<?php
$host= "host=146.83.194.142";
$port= "port=5432";
$dbname= "dbname=abcdb";
$user= "user=abcsolutions";
$password= "password=abc2019solutions";

$bd= pg_connect("$host $port $dbname $user $password") or die ("No Se Pudo Conectar Al Servidor Postgresql".pg_last_error());
/*if (!$bd){
    echo "<script>alert('No se pudo conectar a la base de datos de Postgresql')</script> ";
}else{
    echo "<h3>Conexion exitosa a PHP y a Servidor Postgresql</h3><hr>";
}
*/
?>