<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contacto || Kenos</title>
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
<?php include ("header.php"); ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                           <h3 class="text-uppercase">Contacto</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.html" title="Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Breadcrumbs Area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            
            <!-- Address Information Area Start -->
            <div class="address-info-area mb-90">
                <div class="container">
                    <div class="row">
                        <div class="address-info p-90 clearfix">
                            <div class="col-md-5 col-sm-6">
                                <div class="contact-form">
                                    <div class="title text-uppercase mb-15">
                                        <h4><strong>ponte en contacto</strong></h4>
                                    </div>
                                    <form id="contact-form" action="mensaje.php" method="post">
                                        <input type="text" required name="name" placeholder="Nombre*">
                                        <input type="email" required name="email" placeholder="E-mail*">
                                        <input type="text" required name="asunto" placeholder="Asunto">
                                        <textarea name="mensaje" required placeholder="Mensaje"></textarea>
                                        <button class="submit-btn mt-20" type="submit">enviar mensaje</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-offset-2 col-md-5 col-sm-6">
                                <div class="contact-address">
                                    <div class="title text-uppercase mb-15">
                                        <h4><strong>CONTACTANOS</strong></h4>
                                    </div>
                                    <ul class="toggle-footer text-ash p-30">
                                        <li class="mb-30 pl-45">
                                            <i class="zmdi zmdi-pin"></i>
                                            <p>Pasaje Cerro Negro 477, Yobilo 1, 
                                                Coronel</p>
                                        </li>
                                        <li class="mb-30 pl-45">
                                            <i class="zmdi zmdi-email"></i>
                                            <p>kenoscoronel@gmail.com</p>
                                        </li>
                                        <li class="pl-45">
                                            <i class="zmdi zmdi-phone"></i>
                                            <p>+569-98862520</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Address Information Area End -->

            
            
        </section>
        <!-- End page content -->
        <?php include ("footer.php"); ?>
       
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