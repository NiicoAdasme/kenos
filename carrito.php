<?php
include("conexion.php");
session_start();
$email= $_SESSION['email'];
$contra= $_SESSION['contra'];
$query= "SELECT p.nombre_pro,p.precio,p.inventario,p.imagen,p.descripcion_pro,c.codigo_pro,c.id_cliente,c.cantidad
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
    <title>Carrito || Kenos</title>
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
                           <h3 class="text-uppercase">Carrito De Compras</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php" title="Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Carrito De Compras</li>
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
                                                    <th class="product-name"><span class="nobr">Producto</span></th>
                                                    <th class="product-prices"><span class="nobr"> Precio </span></th>
                                                    <th class="product-stock-stauts"><span class="nobr"> Stock </span></th>
                                                    <th class="product-add-to-cart"><span class="nobr"> Cantidad </span></th>
                                                    <th class="product-remove"><span class="nobr"> Quitar </span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- INICO BUCLE PHP -->
                                            <?php
                                            while($fila=pg_fetch_row($sql)){
                                            ?>
                                                <tr>
                                                    <td class="product-thumbnail"><a  title="<?php echo $fila[3]; ?>"><img heigth="60" width="60" src="images/product/<?php echo $fila[3]; ?>" alt="" /></a></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a  title="<?php echo $fila[0];?>"><?php echo $fila[0];?></a>
                                                        <p class="w-color m-0">
                                                            <label><?php echo $fila[4];?></label>
                                                            
                                                        </p>
                                                        
                                                    </td>
                                                    <td class="product-prices"><span class="amount">$ <?php echo $fila[1];?></span></td>

                                                    <?php
                                                    if($fila[2]!=0){
                                                    ?>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">En Stock</span></td>
                                                    <?php }else{ ?>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">Agotado</span></td>
                                                    <?php } ?>
                                                    
                                                    <td class="product-value">
                                                        <input type="number" disabled  value="<?php echo $fila[7];?>">
                                                    </td>
                                                    <?php echo "<td class='product-remove'><a href='eliminar_carrito.php?codprod=".$fila[5]."&idcli=".$fila[6]." '>&times;</a></td>"; ?>
                                                </tr>
                                                <?php } ?>
                                                <!-- FIN BUCLE PHP -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="cart-requerment mt-50 clearfix">
                                            <div class="col-md-offset-0 col-md-4 col-sm-offset-6 col-sm-6 clearfix">
                                                <div class="counpon-total ml-35"> 
                                                    <a class="button extra-long" href="pagar.php" title="Pagar">
                                                        <i class="zmdi zmdi-money"></i>
                                                        <span> Pagar </span>
                                                    </a>                                                     
                                                </div>
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

       <?php include("footer.php");?>
    </div>

    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>