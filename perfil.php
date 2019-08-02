<?php
include("conexion.php");
session_start();
$email= $_SESSION['email'];
$contra= $_SESSION['contra'];
$query= "SELECT * FROM cliente WHERE email='$email' AND clave_cliente='$contra'";
$sql= pg_query($bd,$query) or die ("Error En La Query".pg_last_error());
$consulta= pg_fetch_array($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $region= $_POST['region'];
    $comuna= $_POST['comuna'];
    $dir= $_POST['direccion'];
    $cel= $_POST['celular'];
    $email= $_POST['email'];
    $claveactual= $_POST['claveactual'];
    $clavenueva= $_POST['clavenueva'];
 
    if(empty($nombre) || is_numeric($nombre) || strlen($nombre)<3 ||  //  || strlen($claveactual)<10 
        strlen($nombre)>15 || empty($apellido) || strlen($apellido)<3 || is_numeric($apellido) || 
        strlen($apellido)>15 || empty($region) || empty($comuna) || empty($dir) || strlen($dir)<3 ||
        empty($claveactual) || empty($clavenueva)  || empty($cel) || strlen($clavenueva)<10 ||
        empty($email) || !is_numeric($cel) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('Error. Verifique Que Los Datos Ingresados Sean Validos'); </script>";
            echo "<script>window.location.assign('perfil.php');</script>";
    }else{
        $query= "UPDATE cliente SET nombre_cliente='$nombre',apellido_cliente='$apellido',region='$region',
                comuna='$comuna', direccion='$dir',telefono='$cel',email='$email',clave_cliente='$clavenueva' 
                WHERE email='$email' AND clave_cliente='$claveactual' ";

        $sql= pg_query($bd,$query);
    }if(isset($sql)){
        echo "<script>alert('Cambios Modificados Con Exito!'); </script>";
        echo "<script>window.location.assign('exit.php');</script>";
    }else{
        echo "<script>alert('Error Al Guardar Los Cambios'); </script>";
        echo "<script>window.location.assign('perfil.php');</script>";
    }   
} ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mi Perfil || Kenos</title>
    <meta name="description" content="">
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
    <header>
            <div class="header-top-bar white-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="header-logo text-center text-secundary">
                                <a href="index.php">
                                    <img alt="" src="images/logo/kenos.png">                                    
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="header-top header-top-right">
                                <ul>
                                    <li class="lh-50">
                                        <?php
                                        if(isset($_SESSION['email'])){
                                        ?>                                               
                                            <a href="exit.php" class="pr-20 text-uppercase" >Cerrar Sesion
                                                <i class="zmdi zmdi-account"></i>
                                            </a>
                                            <li>
                                                <a ></a>
                                            </li>
                                        <?php
                                        }else{
                                        ?>
                                    </li>
                                    <li class="lh-50">        
                                        <a href="login.php" class="pr-20 text-uppercase" >Iniciar Sesion
                                            <i class="zmdi zmdi-account"></i>
                                        </a>
                                        <li>
                                            <a ></a>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </li>                                            
                                    
                                    <?php 
                                    if(isset($_SESSION['email'])){                                    
                                    ?>
                                        <li class="lh-50 pl-20">
                                            <a href="carrito.php" class="prl-10  text-uppercase ">Ir al Carrito
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </a>
                                        </li>   
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div id="sticky-header" class="header-area header-wrapper transparent-header">
                <div class="header-middle-area black-bg">
                    <div class="container">
                        <div class="full-width-mega-dropdown">
                            <div class="row">
                                <div class="col-md-12">
                                    <nav id="primary-menu">
                                        <ul class="main-menu text-center">
                                            <li><a href="index.php">Inicio</a></li>
                                            <li><a href="catalogo.php">Catalogo</a></li>
                                            <?php
                                            if(!isset($_SESSION['email'])){
                                            ?>
                                            <li><a href="login.php">Registrate</a></li>
                                            <?php
                                            }
                                            ?>                                            
                                            <?php
                                            if(isset($_SESSION['email']) ){
                                            ?>
                                            <li><a href="perfil.php">Tu Perfil</a></li>
                                            <?php
                                            }
                                            ?>
                                            <li><a href="contacto.php">Contactanos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inicio Mobile Menu  -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="catalogo.php">Catalogo</a></li>
                                        <?php
                                            if(!isset($_SESSION['email'])){
                                        ?>
                                        <li><a href="login.php">Registrate</a></li>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if(isset($_SESSION['email']) ){
                                        ?>
                                        <li><a href="perfil.php">Tu Perfil</a></li>
                                        <?php
                                            }
                                        ?>
                                        <li><a href="contacto.php">Contactanos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <!-- fin  Mobile Menu  -->            
    </header>

        <div class="breadcrumbs-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                           <h3 class="text-uppercase">Mi Perfil</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php" title="Ir Al Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Mi Perfil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="page-content" class="page-wrapper">
            <div class="my-account-page section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="procced-checkout">
                                <h4 class="procced-title text-uppercase pb-15 mb-20"><strong>¿Deseas Realizar Algún Cambio?</strong></h4>
                                <p>Porque Nos Preocupa Tú Seguridad.  Tú Información Es Totalmente Privada y Confidencial.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="addresses-lists">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="zmdi zmdi-account-circle"></i>
                                                   <span>Mi Información Personal </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase  mb-20">Tú Información</h6>
                                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                                        <p class="form-row">
                                                            <label for="nombre">Nombre</label>
                                                            <input required type="text" maxlength="15" minlength="3" name="nombre" value="<?php echo $consulta[1]; ?>">
                                                        </p>
                                                        <p class="form-row">
                                                            <label for="apellido">Apellido</label>
                                                            <input required type="text" maxlength="17" minlength="7" name="apellido" value="<?php echo $consulta[2]; ?>">
                                                        </p>
                                                        <p class="form-row pb-10">
                                                            <label for="region">Región</label>
                                                            <select  id="regiones" required name="region" value="<?php echo $consulta[3]; ?>">
                                                            </select>
                                                        </p>
                                                        <p class="form-row pb-10">
                                                            <label for="comuna">Comuna</label>
                                                            <select  id="comunas" required name="comuna" value="<?php echo $consulta[4]; ?>"></select>
                                                        </p>
                                                        <p class="form-row pb-10">
                                                            <label for="direccion">Dirección</label>
                                                            <input type="text" required maxlength="50" minlength="3" placeholder="Direccion" name="direccion" value="<?php echo $consulta[5]; ?>" >
                                                        </p>
                                                        <p class="form-row pb-10">
                                                            <label for="celular">Celular</label>
                                                            <input type="text" required maxlength="8" minlength="8" placeholder="Celular" name="celular" value="<?php echo $consulta[6]; ?>" >
                                                        </p>
                                                        <p class="form-row">
                                                            <label for="email">Correo Electronico</label>
                                                            <input type="email" required placeholder="Correo Electronico" name="email" value="<?php echo $consulta[7]; ?>" >
                                                        </p>
                                                        <p class="form-row">
                                                            <label for="claveactual">Clave Actual</label>
                                                            <input type="password" required minlenth="10" placeholder="Contraseña Actual" name="claveactual">
                                                        </p>
                                                        <p class="form-row">
                                                            <label for="clavenueva">Clave Nueva</label>
                                                            <input type="password" required minlenth="10" placeholder="Nueva Contraseña" name="clavenueva">
                                                        </p>
                                                        <button value="register" type="submit" class="submit-btn mt-20">Guardar Cambios</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <div class="myaccount-link-list">                               
                                    
                                    <div class="panel panel-default mb-5">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a  href="carrito.php">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                    <span>Carrito De Compras</span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <div class="myaccount-link-list">                               
                                    
                                    <div class="panel panel-default mb-5">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a  href="historial.php">
                                                    <i class="zmdi zmdi-assignment-check"></i>
                                                    <span>Historial De Compras</span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <?php include("footer.php"); ?>
    </div>

    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>