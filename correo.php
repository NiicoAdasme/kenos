<?php
include("conexion.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email= $_POST['email'];
    $cel= $_POST['celular'];
    $region= $_POST['region'];
    $comuna= $_POST['comuna'];
    $clave= rand(rand(0,105000)+rand(0,55000) , rand(0,1500000)+rand(0,55000));

    if($region=='Región' || $comuna=='Comuna' || empty($cel) || $region=='--' || $comuna=='--' ||
        !is_numeric($cel) || !filter_var($email,FILTER_VALIDATE_EMAIL) ){
            echo "<script>alert('Error. Verifique Que Los Datos Ingresados Sean Validos');</script>";
            echo "<script>window.location.assign('login.php');</script>";
    }else{
        $query= "UPDATE cliente SET clave_cliente='$clave' WHERE email='$email'  AND
            region='$region' AND comuna='$comuna'";

        $sql= pg_query($bd,$query) or die ("Error.".pg_last_error());

        if(isset($sql)){
            $asunto= "Sistema De Recuperación De Clave Cuenta Kenos Coronel";
            $carta= "Estimado Usuario. Se Nos Ha Notificado Una Solicitud De Cambio De Contraseña. Sus Datos Son. \n";
            $carta.= "Email: $email \n";
            $carta.= "Telefono Celular: +569-$cel \n";
            $carta.= "Región: $region \n";
            $carta.= "Comuna: $comuna \n";
            $carta.= "Su Nueva Clave Es: -->  $clave  <-- \n\n\n";
            $carta.= "Si Los Datos Anteriores No Son Suyos. Por Favor Ignore Este Correo.";
            //mail($email,$asunto,$carta);
            echo "<script>alert('Se Envió Un Correo Con Su Nueva Clave. Si No Lo Ha Recibido Contacte A La Administración');</script>";
            echo "<script>window.location.assign('login.php');</script>";
        }else{
            echo "<script>alert('Error En La Recuperación De Su Clave. Si El Problema Persiste. Contacte A La Administración');</script>";
            echo "<script>window.location.assign('login.php');</script>";
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recuperar Clave</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servio de inventario, compra y venta de comida para mascotas">
    <meta name="keywords" content="tienda en line, tienda online, Tienda eCommerce, mascotas,comida,venta,compra">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/kenos.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php include("header.php"); ?>
        <div class="breadcrumbs-area section-padding gray-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                            <h3 class="text-uppercase">Recuperar Clave</h3>
                            <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php" title="Volver a  Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Recuperar Clave</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="page-content" class="page-wrapper">
            <div class="login-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>Recuperar Clave</h4>
                                </div>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="" > <!-- * -->
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" required placeholder="Correo Electronico" name="email">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" required maxlength="8" minlength="8" placeholder="Celular" name="celular">
                                            </div> 
                                            <div class="col-md-12 mb-15">
                                                <select  id="regiones" required name="region"></select><br> 
                                            </div>
                                            
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12 mb-15">
                                                    <select  id="comunas" required name="comuna"></select>                                                
                                            </div>                                                                                                                                                                 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="submit-btn pb-50">Recuperar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php"); ?>
    </div>
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validar.js"></script>

</body>

</html>
