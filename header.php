<?php
include("conexion.php");
?>
<!-- inicio de header -->
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
                                        session_start();
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
        <!-- fin de header  -->
        