<?php
include("conexion.php");
session_start();
$email= $_SESSION['email'];
$contra= $_SESSION['contra'];
$query= "SELECT id_cliente FROM cliente WHERE email='$email' AND clave_cliente='$contra'";
$sql= pg_query($bd,$query);
$id_cliente= pg_fetch_array($sql);
$query= "SELECT p.imagen,v.id_venta,v.fecha_venta,v.estado,v.precio,p.nombre_pro FROM productos p,cliente cli,venta v
        WHERE cli.id_cliente=v.id_cliente AND v.codigo_pro=p.codigo_pro AND cli.id_cliente='$id_cliente[0]'";
$sql= pg_query($bd,$query);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Historial De Compras || Kenos</title>
    <meta name="description" content="">
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
                           <h3 class="text-uppercase">Histrial De Compras</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php" title="Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Historial De Compras</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="page-content" class="page-wrapper">
            <!-- Start Wishlist Area -->
            <div class="wishlist-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wishlist-content">
                                <form action="#">
                                    <div class="wishlist-table table-responsive p-30 text-uppercase">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail"></th>
                                                    <th class="product-remove"><span class="nobr"> Nombre Producto </span></th>
                                                    <th class="product-name"><span class="nobr">Codigo Venta</span></th>
                                                    <th class="product-prices"><span class="nobr"> Fecha Emision </span></th>
                                                    <th class="product-stock-stauts"><span class="nobr"> Estado </span></th>
                                                    <th class="product-add-to-cart"><span class="nobr"> Precio </span></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- INICO BUCLE PHP -->
                                            <?php
                                            while($fila=pg_fetch_row($sql)){
                                            ?>
                                                <tr>
                                                    <td class="product-thumbnail"><a  title="<?php echo $fila[0]; ?>"><img heigth="60" width="60" src="images/product/<?php echo $fila[0]; ?>" alt="" /></a></td>
                                                    <td class='product-remove'><span class="amount"><?php echo $fila[5];?></span></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a  title="<?php echo $fila[1];?>"><?php echo $fila[1];?></a>
                                                    </td>
                                                    <td class="product-prices"><span class="amount"> <?php echo $fila[2];?></span></td>

                                                    <td class="product-stock-status"><span class="wishlist-in-stock"> <?php echo $fila[3] ;?></span></td>>
                                                    
                                                    <td class="product-value">
                                                       <span class="whishlist-in-stock">$ <?php echo $fila[4];?> CLP</span>
                                                    </td>
                                                    
                                                </tr>
                                                <?php } ?>
                                                <!-- FIN BUCLE PHP -->
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <?php include("footer.php");?>
    </div>

    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>