<!DOCTYPE html>
<html >
  <head>
    <title>Unidad Deportiva UFPS - Cúcuta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href='../vista/img/logo_ufps.ico' rel='Shortcut icon'>
    <!-- Bootstrap -->
    <link href="../vista/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../vista/bootstrap/css/styles.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../vista/bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="../controlador/validaciones.js"></script>
    <!--<script language="javascript">
    var im = false;
    function cambiaImagen() {
      tab = document.getElementById('body');
      tab.style.background = (im = !im) ? 'url(./img/Granja1.png)' : 'url(./img/Granja2.png)'; 
    }
     onload="setInterval('cambiaImagen()',8000)"
    </script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg" id="body" style="background:url(../vista/img/fondo1.jpeg)">
    <?php
      session_start();

      if(isset($_SESSION['user'])){

        
        header("location:./dashboard.php");
            

        }
        else{

          echo "";
            

        }


      ?>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="../vista/unidaddeportes.html"><span class="fa fa-free-code-camp" aria-hidden="true"></span> Unidad de Deportes UFPS - Cúcuta</a></h1>
                </div>
             </div>
          </div>
       </div>
  </div>

  <div class="page-content container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-wrapper">
              <div class="box">
                  <div class="content-wrap">
                    <form action="./ingresar.php" method="POST" onsubmit="return validarlogin();">
                      <h6>Ingresar</h6>
                      <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                      <hr>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Usuario:">
                      <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Contraseña:">
                      <div>
                        <a href=""><span class="glyphicon glyphicon-question-sign"></span> ¿Olvido su contraseña?</a>
                      </div>
                      <div class="action">
                          <button class="btn btn-primary signup" type="submit"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</button>
                      </div>
                      </form>                
                  </div>
              </div>

              
          </div>
      </div>
    </div>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../vista/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vista/bootstrap/js/custom.js"></script>
  </body>
</html>