<?php 
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email= $_POST['email'];
    $contra= $_POST['contra'];

    if($email=='Superuser123' && $contra='12345'){
        $consulta= "SELECT * FROM cliente WHERE email='$email' AND clave_cliente='$contra'";
        $sql= pg_query($bd,$consulta) or die ("Error En La Query".pg_last_error());
        $filas= pg_fetch_row($sql);

        if($filas>0){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['contra']= $contra;
            header("location:index.php");
        }else{
            echo "<script>alert('No Hay Datos Relacionados'); </script>";
            echo "<script>window.location.assign('login.php');</script>";
        }
    }elseif(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) || empty($contra) || 
            strlen($contra)<10){
        echo "<script>alert('Error. Ingrese Datos Validos'); </script>";
        echo "<script>window.location.assign('login.php');</script>";
    }else{
        $consulta= "SELECT * FROM cliente WHERE email='$email' AND clave_cliente='$contra'";
        $sql= pg_query($bd,$consulta);
        $filas= pg_fetch_row($sql);

        if($filas>0){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['contra']= $contra;
            header("location:index.php");
        }else{
            echo "<script>alert('Error En La Autentificación'); </script>";
            echo "<script>window.location.assign('login.php');</script>";
        }
    }
}else{
    echo "<script>alert('Error En El Envío Del Formulario'); </script>";
    echo "<script>window.location.assign('login.php');</script>";
}   
?>