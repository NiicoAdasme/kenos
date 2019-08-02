<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ingresar/Registrarse || KenosCoronel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servio de inventario, compra y venta de comida para mascotas">
    <meta name="keywords" content="tienda en line, tienda online, Tienda eCommerce, mascotas,comida,venta,compra">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/kenos.ico">
    <!--<link rel="short cut icon" type="image/x-icon" href="images/KenosCoronel_4.png">-->
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
                            <h3 class="text-uppercase">Ingresar / Registrar</h3>
                            <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php" title="Volver a  Inicio">Inicio</a>
                                </li>
                                <li>/</li>
                                <li>Ingresar / Registrar</li>
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
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>CLIENTE REGISTRADO</h4>
                                </div>
                                <form action="iniciar_sesion.php" method="post" class="" > <!-- * -->
                                    <div id="err_email2" style="color:red;" hidden class="error"> * Campo Email Invalido</div>
                                    <div id="err_pass" style="color:red;" hidden class="error"> * Campo Contraseña Invalido</div>
                                    <div class="login-account p-30 box-shadow">
                                        <p>¿Ya Tienes Cuenta Con Nosotros?</p>
                                        <input type="text" required placeholder="Correo Electronico" id="email2" name="email">
                                        <input type="password" required placeholder="Contraseña" id="pass" name="contra">
                                        <p><small><a href="correo.php">¿Olvidaste tu contraseña?</a></small></p> <!-- enviar correo -->
                                        <button type="submit" id="iniciar_sesion" class="submit-btn">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>NUEVO CLIENTE</h4>
                                </div>
                                <form action="nuevo_cliente.php" method="post" class="">
                                    <div id="err_nombre" style="color:red;" hidden class="error"> * Campo Nombre Invalido</div>
                                    <div id="err_apellido" style="color:red;" hidden class="error"> * Campo Apellido Invalido</div>
                                    <div id="err_region" style="color:red;" hidden class="error"> * Campo Región Invalido</div>
                                    <div id="err_comunas" style="color:red;" hidden class="error"> * Campo Comunas Invalido</div>
                                    <div id="err_direccion" style="color:red;" hidden class="error"> * Campo Direccion Invalido</div>
                                    <div id="err_celular" style="color:red;" hidden class="error"> * Campo Celular Invalido</div>
                                    <div id="err_correo" style="color:red;" hidden class="error"> * Campo Correo Electronico Invalido</div>
                                    <div id="err_contra" style="color:red;" hidden class="error"> * Campo Contraseña Invalido</div>
                                    <div id="err_contra2" style="color:red;" hidden class="error"> * Campo Confirmar Contraseña Invalido</div>

                                    <div class="login-account p-30 box-shadow">
                                        <span class="help-block" style="color: red;"></span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" required id="nombre"  maxlength="15" minlength="3" placeholder="Nombre" name="nombre">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="apellido"  required maxlength="15" minlength="3" placeholder="Apellido" name="apellido">
                                            </div>
                                            <div class="col-sm-6 ">                                               
                                                  <select  id="regiones"  required name="region"></select> 																								  
                                            </div>
                                            <div class="col-sm-6 pb-15">                                                
                                                   <select  id="comunas" required  name="comuna"></select>                                             
                                            </div> 
                                        </div>
										<input type="text" id="direccion" required maxlength="50" minlength="3" placeholder="Direccion" name="direccion">
										<input type="text" id="celular"  required maxlength="8" minlength="8" placeholder="Celular" name="celular">
                                        <input type="email" id="email" required placeholder="Correo Electronico" name="email">
                                        <input type="password" id="contra" required minlenth="10" placeholder="Contraseña" name="contra">
                                        <input type="password" id="contra2" required minlength="10" placeholder="Confirmar Contraseña" name="contra2">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <button value="Registrar" id="registrar" type="submit" class="submit-btn mt-20">Registrar</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="reset" class="submit-btn mt-20">Borrar</button>
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

