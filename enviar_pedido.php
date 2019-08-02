<?php
ini_set('date.timezone','America/Santiago');
include("conexion.php");
session_start();
$email= $_SESSION['email'];
$contra= $_SESSION['contra'];
$total= $_GET['tot'];
$fecha= date('Y-m-d',time());
$query= "SELECT c.codigo_pro,c.id_cliente,c.cantidad FROM carrito c, cliente cli,productos p 
        WHERE c.id_cliente=cli.id_cliente AND c.codigo_pro=p.codigo_pro AND cli.email='$email' AND cli.clave_cliente='$contra'";
$sql= pg_query($bd,$query) or die (pg_last_error());

while($fila= pg_fetch_row($sql)){
    $id= rand(rand(0,105000)+rand(0,55000) , rand(0,1500000)+rand(0,55000));
    $query= "INSERT INTO venta VALUES ('$id','$fila[1]','$fila[0]',0,'$total','$fecha','$fila[2]','Pendiente')"; //Servidor
    //$query= "INSERT INTO venta VALUES ('$id','$fecha','Pendiente',0,'$total','$fila[2]','$fila[1]','$fila[0]')";  // localhost
    $sql2= pg_query($bd,$query) or die ("Error En Eviar El Pedido.".pg_last_error());
}
$query= "SELECT id_cliente FROM cliente WHERE email='$email' AND clave_cliente='$contra' ";
$sql= pg_query($bd,$query);
$fila= pg_fetch_array($sql);
$id_cliente= $fila[0];
$query= "DELETE FROM carrito WHERE id_cliente='$id_cliente'";
$sql= pg_query($bd,$query) or die ("Error Al Limpiar El Carrito".pg_last_error());
echo "<script>alert('Su Pedido Se Evió Satisfactoriamente'); </script>";
echo "<script>window.location.assign('catalogo.php');</script>";
?>