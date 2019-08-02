<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $region= $_POST['region'];
    $comuna= $_POST['comuna'];
    $dir= $_POST['direccion'];
    $cel= $_POST['celular'];
    $email= $_POST['email'];
    $contra= $_POST['contra'];
    $contra2= $_POST['contra2'];
    $id= rand(rand(0,105000)+rand(0,55000) , rand(0,1500000)+rand(0,55000));

    if($contra!=$contra2 || empty($nombre) || is_numeric($nombre) || strlen($nombre)<3 || 
        strlen($nombre)>15 || empty($apellido) || strlen($apellido)<3 || is_numeric($apellido) || 
        strlen($apellido)>15 || empty($region) || empty($comuna) || empty($dir) || strlen($dir)<3 ||
        empty($contra) || strlen($contra)<10 || empty($contra2) || strlen($contra2)<10 || empty($cel) ||
        empty($email) || !is_numeric($cel) || !filter_var($email,FILTER_VALIDATE_EMAIL) || $region=="sin-region" 
        || $comuna=="sin-comuna"){
            echo "<script>alert('Error. Verifique Que Los Datos Ingresados Sean Validos'); </script>";
            echo "<script>window.location.assign('login.php');</script>";
    }else{
        $query= "INSERT INTO cliente VALUES 
                ('$id','$nombre','$apellido','$region','$comuna','$dir','$cel','$email','$contra')";

        $sql= pg_query($bd,$query);
    }if(isset($sql)){
        // enviar email de bienvenida
        $asunto= "Bienvenido A Kenos Coronel";
        $carta= "Estimado Usuario. Se Nos Ha Notificado Su Registro En El Sitio Web De Kenos Coronel. \n";
        $carta.= "Queremos Darle La Bienvenida A La Nueva Tienda Online De Kenos Coronel.\n";
        $carta.= "Si Usted No Se Registró. Por Favor Ignore Este Correo.";
        //mail($email,$asunto,$carta);
        echo "<script>alert('Cliente Registrado Con Exito!'); </script>";
        echo "<script>window.location.assign('login.php');</script>";
    }else{
        echo "<script>alert('El Cliente No Se Registró Con Exito'); </script>";
        echo "<script>window.location.assign('login.php');</script>";
    }

}else{
    echo "<script>alert('Error En El Formulario. Los Datos No Se Enviaron Correctamente'); </script>";
    echo "<script>window.location.assign('login.php');</script>";
}
?>