
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="10">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/kenos.png" alt="" width="100px" height="100px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li>

            
          </li>
          <?php
        if($_SESSION['rol']=="administrador" || $_SESSION['rol']=="vendedor"):
         ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Administrar Productos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Categorias</a></li>
              <li><a href="articulos.php">Producto</a></li>
            </ul>
          </li>
          <?php 
       endif;

          ?>


          <?php
        if($_SESSION['rol']=="administrador" || $_SESSION['rol']=="gestorpersonal"):
         ?>
           <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
            </li>
          <?php 
       endif;

          ?>
           <?php
        if($_SESSION['rol']=="administrador" || $_SESSION['rol']=="repartidor"):
         ?>
          <li><a href="repartos.php"><span class="glyphicon glyphicon-plane"></span> Repartir </a> 
          <?php 
       endif;
          ?>

           <?php
        if($_SESSION['rol']=="administrador" || $_SESSION['rol']=="vendedor"):
         ?>
          <li><a href="ventas.php"><span class="glyphicon glyphicon-usd"></span> Vender </a>
          <?php 
       endif;
          ?>
          </li>
          
          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>