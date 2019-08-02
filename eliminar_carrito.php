<?php
include("conexion.php");
if(isset($_GET['codprod']) && isset($_GET['idcli']) ){
    $codprod= $_GET['codprod'];
    $idcli= $_GET['idcli'];
    $query= "DELETE FROM carrito WHERE codigo_pro='$codprod' AND id_cliente='$idcli'";
    $sql= pg_query($bd,$query);
    header("location:carrito.php");
}
?>