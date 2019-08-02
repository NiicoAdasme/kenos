<?php
include("conexion.php");
session_start();
$codprod= $_POST['codprod']; // cod producto
$cant= $_POST['cantidad'];  // cantidad
$email= $_SESSION['email'];
$contra= $_SESSION['contra'];
$query= "SELECT id_cliente FROM cliente WHERE email='$email' AND clave_cliente='$contra' ";
$sql= pg_query($bd,$query) or die ("Error.".pg_last_error());
$idcli= pg_fetch_array($sql); // obtengo el id_cliente
$query= "SELECT inventario FROM productos WHERE codigo_pro='$codprod'";
$sql= pg_query($bd,$query);
$stock= pg_fetch_array($sql); // obtengo el stock del inventario de productos
if($cant>$stock[0]){
    echo "<script>alert('No Hay Stock Suficiente Para Realizar El Pedido');</script>";
    echo "<script>window.location.assign('catalogo.php');</script>";
}else{
    // validar que el producto no haya sido ingresado
    $query= "SELECT codigo_pro FROM carrito WHERE id_cliente='$idcli[0]' ";
    $sql= pg_query($bd,$query);
    while($fila=pg_fetch_row($sql)){
        if($fila[0]==$codprod){
            echo "<script>alert('Este Producto Ya Se Ingreso Anteriormente');</script>";
            echo "<script>window.location.assign('catalogo.php');</script>";
        }
    }
    $query2="INSERT INTO carrito VALUES ('$codprod','$idcli[0]','$cant')";
    $sql2= pg_query($bd,$query2) or die ("Error.".pg_last_error());
    if(isset($sql2)){
        header("location:carrito.php");
    }else{
        echo "<script>alert('Error Al Guardar Los Datos');</script>";
        echo "<script>window.location.assign('catalogo.php');</script>";
    }
}



?>