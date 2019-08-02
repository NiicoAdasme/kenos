<?php
include("conexion.php");
$codprod= $_GET['codprod'];
$star= $_GET['star'];
$query= "SELECT * FROM productos WHERE codigo_pro='$codprod'";
$sql= pg_query($bd,$query);
$fila= pg_fetch_array($sql);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $fila[2];?> || Kenos</title>
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

        <?php include("header.php"); ?>
        <!-- Start Breadcrumbs Area -->
        <div class="breadcrumbs-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                           <h3 class="text-uppercase">Detalles Del Procuto</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php" title="Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Detalles Del Producto</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="page-content" class="page-wrapper">
            <!-- Start Shop Full Grid View -->
            <div class="product-details-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="single-product-image">
                                <div id="product-img-content">
                                    <div id="my-tab-content" class="tab-content mb-30">
                                        <div class="tab-pane b-img active" id="view1">
                                            <!-- imagen -->
                                            <a class=""  data-gall="gallery" title=""><img src="images/product/<?php echo $fila[6]; ?>" alt=""></a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-details-content">
                                <div class="product-content text-uppercase">
                                    <!-- nombre producto -->
                                    <a title="<?php echo $fila[2];?>" ><?php echo $fila[2];?></a>
                                    <div class="rating-icon pb-30 mt-10">
                                        <!-- bucle $icon star -->
                                        <?php 
                                        if($star%2==1){
                                            for($i=0;$i<4;$i++){ 
                                        ?>
                                        <i class="zmdi zmdi-star"></i>
                                            <?php } ?>
                                        <i class="zmdi zmdi-star-half"></i>    
                                        <?php
                                        }else{ for($i=0;$i<4;$i++){ ?>
                                        <i class="zmdi zmdi-star"></i>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                    <div class="product-price pb-30">
                                        <!-- precio -->
                                        <span class="new-price">$ <?php echo $fila[5];?> CLP</span>
                                    </div>
                                </div>
                                <div class="product-view pb-30">
                                    <!-- descripcion -->
                                    <h4 class="product-details-tilte text-uppercase">Descripción</h4>
                                    <p><?php echo $fila[3]; ?></p>
                                </div>
                                
                                <form action="agregar_carrito.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4 mb-20">
                                            
                                            <input type="text" hidden name="codprod" value="<?php echo $fila[0];?>">
                                        </div>
                                    </div>
                                    <div class="product-attributes clearfix">
                                           
                                        <div id="quantity-wanted" class="pull-left pb-40">
                                            <h4 class="product-details-tilte text-uppercase pb-10">Cantidad</h4>
                                            <input type="number" class="cart-plus-minus-box" value="1" max="10" min="1" name="cantidad">    
                                        </div>
                                    </div>
                                    <div class="mb-40">
                                        <button type="submit" class="submit-btn">Agregar Al Carrito</button>
                                    </div>
                                </form>
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
</body>
</html>