<?php include("conexion.php"); 
$query= "SELECT * FROM productos";
$sql= pg_query($bd,$query);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Catalogo</title>
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
        <!-- Start Breadcrumbs Area -->
        <div class="breadcrumbs-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                           <h3 class="text-uppercase">Catalogo De Alimentos</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.html" title="Volver al Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Catalogo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Breadcrumbs Area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Shop Full Grid View -->
            <div class="shop-view-area pt-90 mb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-2 col-xs-4">
                            <div class="shop-tab-pill">
                                <ul>
                                    <li class="active"><a data-toggle="pill" href="#home"><i class="zmdi zmdi-apps"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Shop Full Grid View -->
            <!-- Start Product List -->
            <div class="product-list-tab">
                <div class="container">
                    <div class="row">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <?php  
                                $icon=0;
                                while($fila= pg_fetch_row($sql)){
                                    $icon++;    
                                 ?>
                                <!-- INICIO BUCLE PHP LISTAR PRODUCTOS -->
                                <!--<form action="agregar_carrito.php" >-->
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="single-product mb-40">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <?php 
                                                    if(isset($_SESSION['email'])){
                                                        echo "<a href='producto.php?codprod=".$fila[0]."&star=".$icon."'>";
                                                    }else{
                                                        echo "<a href='login.php'>";
                                                    }
                                                    ?>
                                                        <img src="images/product/<?php echo $fila[6]; ?>" alt="">
                                                    </a>
                                                </div>
                                                <?php 
                                                if($icon==1 || $icon==9 || $icon==11){
                                                ?>
                                                <span class="new-label text-uppercase">New</span>
                                                <!--<span class="new-label text-uppercase">-30%</span>-->
                                                
                                                <?php }elseif($icon==3 || $icon==5 || $icon==14){ ?>
                                                
                                                <span class="new-label red-color text-uppercase">SALE</span>
                                                <?php } ?>
                                                
                                                <?php 
                                                if(isset($_SESSION['email'])){
                                                ?>
                                                <div class="product-action text-center"> 
                                                    <?php echo "<a href='producto.php?codprod=".$fila[0]."&star=".$icon."' title='Agregar Al Carrito'>"; ?> <!-- En caso de haberse logeado -->
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                                <?php }else{ ?>
                                                <div class="product-action text-center"> 
                                                    <a href="login.php" title="Inicia Sesión Para Agregar Al Carrito"> <!-- En caso de no haberse logeado -->
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                                <?php }?>
                                            </div>
                                            <!-- nombre del producto  -->
                                            <div class="product-content text-center text-uppercase">
                                                        <!-- * -->
                                                <?php 
                                                if(isset($_SESSION['email'])){
                                                    echo "<a href='producto.php?codprod=".$fila[0]."&star=".$icon."' title='$fila[2]'>$fila[2]</a>"; 
                                                }else{
                                                    echo "<a href='login.php' title='Inicia Sesión Para Acceder Al Carrito De Compras'>$fila[2]</a>"; 
                                                }
                                                ?>
                                            
                                                <div class="rating-icon">
                                                    <?php
                                                    if($icon%2==1){
                                                        for($i=0;$i<4;$i++){                                                         
                                                    ?>
                                                    <i class="zmdi zmdi-star"></i>   <!-- Calificacion del producto -->
                                                    <?php } ?>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <?php }else{
                                                    for($i=0;$i<4;$i++){
                                                    ?>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <?php } }?>                                          
                                                </div>
                                                
                                                <!--<div class="product-price pb-10">
                                                        <span class="new-price">£ 38.00</span>
                                                        <span class="old-price">£ 45.00</span>
                                                    </div>-->
                                                <div class="product-price">
                                                    <span class="new-price">$ <?php echo  $fila[5];?> CLP</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                <!--</form>-->
                                <!-- FIN BUCLE PHP LISTAR PRODUCTOS-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Shop Full Grid View -->
            <div class="shop-view-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-2 col-xs-4">    
                            <div class="shop-tab-pill">
                                <ul>
                                    <li class="active"><a data-toggle="pill" href="#home"><i class="zmdi zmdi-apps"></i><span></span></a></li>
                                </ul>
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