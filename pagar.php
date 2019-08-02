<?php 
include("conexion.php");
session_start();
$email= $_SESSION['email'];
$contra= $_SESSION['contra'];
$query= "SELECT p.nombre_pro,p.precio,c.codigo_pro,c.id_cliente,c.cantidad
        FROM productos p,cliente cli,carrito c WHERE
        p.codigo_pro=c.codigo_pro AND c.id_cliente=cli.id_cliente AND cli.email='$email'
        AND clave_cliente='$contra'";
$sql= pg_query($bd,$query);


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pagar || Kenos</title>
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
                        <div class="col-sm-4 col-xs-12">
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
                           <h3 class="text-uppercase">Pagar</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.html" title="Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Pagar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start checkout Area -->
            <div class="checkout-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="order-info azure-bg p-30">
                                <div class="billing-title text-uppercase mb-15">
                                    <h5><strong>Tú Pedido</strong></h5>
                                </div>  
                                <table>
                                    <tbody>
                                        <?php
                                        $total=0; $mult=0; $precio=0;
                                        while($fila=pg_fetch_array($sql)){ ?>
                                            <tr>
                                                <th><?php echo $fila[0];?> &times; <?php echo $fila[4]; ?> </th>
                                                <td>$ <?php echo $fila[1]*$fila[4]; $mult=$fila[1]*$fila[4]; ?> CLP</td>
                                                <?php  
                                                    $total= $total+ $mult;
                                                ?>
                                            </tr>
                                        <?php } ?>
                                        <tr class="total">
                                            <th>Precio Total</th>
                                            <td>$ <?php echo $total;?> CLP</td>
                                        </tr>
                                    </tbody>
                                </table>   
                                <div class="billing-title text-uppercase mt-40 pb-30">
                                    <h5><strong>Metodo De Pago</strong></h5>
                                </div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title text-uppercase">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Transferencia Bancaria
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p> <b>Rut:</b> 96838800-2 </p>
                                                <p><b>Banco:</b> Banco Credito E Inversiones</p>
                                                <p><b>Tipo De Cuenta:</b> Cuenta Corriente</p>
                                                <p><b>Número De Cuenta:</b> 95465178 </p>
                                                <p><b>Correo Electronico:</b> kenoscoronel@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <?php echo "<a title='Enviar Pedido' href='enviar_pedido.php?tot=".$total."' class='button extra-small'>"; ?>
                                                <i class="zmdi zmdi-flight-takeoff"></i>
                                                <span>Enviar Pedido</span> <!-- ENVIAR PEDIDO **  -->
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a title='Seguir Comprando' href='catalogo.php' class='button extra-small'>
                                                <i class="zmdi zmdi-mall"></i>
                                                <span>Seguir Comprando</span>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of checkout Area -->

            
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <?php include("footer.php"); ?>
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>