<?php
include("conexion.php");
if(empty($_POST['email']) || empty($_POST['email']) || empty($_POST['nombre']) || empty($_POST['asunto']) 
    || empty($_POST['mensaje']) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Error. Ingrese Datos Validos');</script>";
        echo "<script>window.location.assign('contacto.php');</script>";
}else{
    $email= $_POST['email'];
    $nombre= $_POST['name'];
    $asunto= $_POST['asunto'];
    $mensaje= $_POST['mensaje'];
    $mensaje.= "\n\n Mensaje Enviado Por: $nombre\n";
    $mensaje.= "Correo Electronico: $email";
    //mail("kenoscoronel@gmail.com",$asunto,$mensaje);
    echo "<script>alert('Mensaje Enviado. Gracias Por Sus Comentarios');</script>";
    echo "<script>window.location.assign('contacto.php');</script>";
}
?>