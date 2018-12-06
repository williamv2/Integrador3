
<!DOCTYPE html>
<html lang="en" ng-app="dashunidaddeportiva">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- Favicon -->
    <link href='../vista/img/logo_ufps.ico' rel='Shortcut icon'>

    <title>Dashboard - Admin Deportes</title>

    <!-- Bootstrap core CSS-->
    <link href="../vista/bootstrap/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vista/bootstrap/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="../vista/bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Page level plugin CSS-->
    <link href="../vista/bootstrap/dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../vista/bootstrap/dashboard/css/sb-admin.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="../vista/bootstrap/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../controlador/angular-1.7.5/angular.min.js"></script>
    <script src="../controlador/validaciones.js"></script>
    <script src="../controlador/controlador.js"></script>

  </head>

  <body id="page-top">
    <?php
      session_start();

      if(isset($_SESSION['user'])){

        $user = strtoupper($_SESSION['user']);
        $hoy = getdate();
        $id = $_SESSION['id'];

            echo "";

        }
        else{

          
            header("location:./login.php");

        }


      ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-color: #D90A1D !important">

      <a class="navbar-brand mr-1" href="#">Administración - Unidad de Deportes</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $user ?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#" id="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="noticias">
            <i class="fa fa-newspaper-o"></i>
            <span>Noticias</span></a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="#" id="eventos">
            <i class="fa fa-calendar-o"></i>
            <span>Eventos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="convocatorias">
            <i class="fa fa-bullhorn"></i>
            <span>Convocatorias</span></a>
        </li>
      </ul>
      
        <div id="content-wrapper1">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Inicio</a>
              </li>
              <li class="breadcrumb-item active">Informe</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body" ng-controller="countnoticia">
                    <div class="card-body-icon">
                      <i class="fa fa-newspaper-o"></i>
                    </div>
                    <div class="mr-5" ng-repeat="da in dashnoti"><strong style="font-size: 150%">{{da.nnot}}</strong> Nuevas Noticias!
                    </div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#" id="noticiasdash">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body" ng-controller="countevento">
                    <div class="card-body-icon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <div class="mr-5" ng-repeat="da in dashevent"><strong style="font-size: 150%">{{da.nevent}}</strong> Nuevos Eventos!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#" id="eventosdash">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body" ng-controller="countconvo">
                    <div class="card-body-icon">
                      <i class="fa fa-bullhorn"></i>
                    </div>
                    <div class="mr-5" ng-repeat="da in dashconvo"><strong style="font-size: 150%">{{da.nconvo}}</strong> Nuevas Convocatorias!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#" id="convocatoriasdash">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-body" ng-controller="countdep">
                    <div class="card-body-icon">
                      <i class="fa fa-trophy"></i>
                    </div>
                    <div class="mr-5" ng-repeat="da in dashdep"><strong style="font-size: 150%">{{da.ndep}}</strong> Deportes!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>

            <!-- Area Chart Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-picture-o"></i>
                Galería
                <button type="button" class="btn btn-default btn-md float-right" data-toggle="modal" data-target="#Agreegalimg"><span class="fa fa-cloud-upload"></span> Agregar</button>
              </div>
              <div class="card-body" ng-controller="uploadgalery" ng-init="show_galery()" style="overflow-y: auto; height:250px; ">
                <span class="col-md-3" ng-repeat="foto in fotos">
                <img ng-src="../vista/img/galery/{{foto.file_name}}" class="show_galery" width="200" height="180"/> </span>

              </div>
              <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
            </div>

            

          </div>
          <!-- /.container-fluid -->

          <!-- Sticky Footer 
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
              </div>
            </div>
          </footer>-->

        </div>
        <!-- /.content-wrapper -->

        <!-- content-wrapper noticias -->
        <div id="content-wrapper2" style="display: none;">

          <div class="container-fluid" style="width: 100% !important; height: 30% !important;">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Inicio</a>
              </li>
              <li class="breadcrumb-item active">Noticias</li>
            </ol>

            

            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Noticias
                <button type="button" class="btn btn-default btn-md float-right" data-toggle="modal" data-target="#AgreenotiModal"><span class="fa fa-plus"></span> Agregar</button>
              </div>

              <div class="card-body" style="overflow-y: auto; height:400px;">

                <div class="table-responsive" ng-controller="controladornoti">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID Noticia</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        <th>Administrador</th>
                        <th colspan="2">Operaciones</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID Noticia</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        <th>Administrador</th>
                        <th colspan="2">Operaciones</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr ng-repeat = "not in noticias">
                        <td>{{not.idnoticia}}</td>
                        <td>{{not.nombre}}</td>
                        <td>{{not.descripcion}}</td>
                        <td>{{not.fecha}}</td>
                        <td>{{not.lugar}}</td>
                        <td>{{not.usuario}}</td>
                        <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModnotiModal" ng-click="selectnoti(not)">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                      </button></td>
                      <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DelnotiModal" ng-click="selectnoti(not)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button></td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- ModNoti Modal-->
                  <div class="modal fade" id="ModnotiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Actualizar Noticia</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modnoti.php">
                            <div class="form-group">
                              <input type="text" name="mid_noti" id="mid_noti" style="display: none;" class="form-control" ng-model="clicknoti.idnoticia">

                              ID: <input type="text" name="noid_noti" id="noid_noti"class="form-control" ng-model="clicknoti.idnoticia" disabled="true">
                              <br>
                              Título: <input type="text" name="mnom_noti" id="mnom_noti" class="form-control" placeholder="Título" required="true" autofocus="autofocus" ng-model="clicknoti.nombre">
                              <br>
                              Descripción:
                              <textarea class="form-control" placeholder="Descripción" rows="4" name="mdesc_noti" id="mdesc_noti" required="true" autofocus="autofocus" ng-model="clicknoti.descripcion"></textarea>
                              <br>
                              Fecha: <input type="date" name="mfech_noti" id="mfech_noti" class="form-control" required="true" autofocus="autofocus" ng-model="clicknoti.fecha" format-date>
                              <br>
                              Lugar: <input type="text" name="mlugar_noti" id="mlugar_noti" class="form-control" placeholder="Lugar" required="true" autofocus="autofocus" ng-model="clicknoti.lugar">
                              <br>
                              <input type="text" name="madm_noti" id="madm_noti" style="display: none;" value="<?php echo $id ?>">
                            </div>
                            <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>

                  <!-- DelNoti Modal-->
                  <div class="modal fade" id="DelnotiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar noticia?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                              <strong style="color: red;">
                                Vas a eliminar la noticia de  "{{clicknoti.nombre}}".
                              </strong>
                              
                        </div>
                        <div class="modal-footer">
                          <form method="POST" action="./delnoti.php">
                          <input type="text" id="del_idnot" name="del_idnot" class="form-control" ng-model="clicknoti.idnoticia" style="display:none;">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                          <button class="btn btn-danger" type="submit">Aceptar</button>
                          </form>
                        </div>
                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
            </div>
          </div>
          <!-- /.container-fluid -->



          

          <!-- Sticky Footer 
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
              </div>
            </div>
          </footer>-->

        </div>
        <!-- /.content-wrapper -->

        <!-- content-wrapper eventos -->
        <div id="content-wrapper3"  style="display: none;" >

          <div class="container-fluid" style="width: 100% !important; height: 30% !important;">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Inicio</a>
              </li>
              <li class="breadcrumb-item active">Eventos</li>
            </ol>

            <!-- Icon Cards
            <div class="row">
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-newspaper-o"></i>
                    </div>
                    <div class="mr-5">26 Nuevas Noticias!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <div class="mr-5">11 Nuevos Eventos!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-bullhorn"></i>
                    </div>
                    <div class="mr-5">10 Nuevas Convocatorias!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-trophy"></i>
                    </div>
                    <div class="mr-5">11 Deportes!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalles</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>-->

            <!-- Area Chart Example
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Area Chart Example</div>
              <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Actualización <?php echo $hoy['weekday']; ?></div>
            </div>-->

             <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Eventos
                <button type="button" class="btn btn-default btn-md float-right" data-toggle="modal" data-target="#AgreeeventModal"><span class="fa fa-plus"></span> Agregar</button>
              </div>

              <div class="card-body" style="overflow-y: auto; height:400px;">

                <div class="table-responsive" ng-controller="controladorevent">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID Evento</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Hora</th>
                        <th>Lugar</th>
                        <th>Administrador</th>
                        <th colspan="2">Operaciones</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID Evento</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Hora</th>
                        <th>Lugar</th>
                        <th>Administrador</th>
                        <th colspan="2">Operaciones</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr ng-repeat = "event in eventos">
                        <td>{{event.idevento}}</td>
                        <td>{{event.nombre}}</td>
                        <td>{{event.descripcion}}</td>
                        <td>{{event.fechainicio}}</td>
                        <td>{{event.fechafin}}</td>
                        <td>{{event.hora}}</td>
                        <td>{{event.lugar}}</td>
                        <td>{{event.usuario}}</td>
                        <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModeventModal" ng-click="selectevent(event)">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                      </button></td>
                      <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleventModal" ng-click="selectevent(event)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button></td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- ModNoti Modal-->
                  <div class="modal fade" id="ModeventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Actualizar Evento</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modevent.php">
                            <div class="form-group">
                              <input type="text" name="mid_event" id="mid_event" style="display: none;" class="form-control" ng-model="clickevent.idevento">

                              ID: <input type="text" name="noid_event" id="noid_event"class="form-control" ng-model="clickevent.idevento" disabled="true">
                              <br>
                              Nombre: <input type="text" name="mnom_event" id="mnom_event" class="form-control" placeholder="Nombre del evento" required="true" autofocus="autofocus" ng-model="clickevent.nombre">
                              <br>
                              Descripción:
                              <textarea class="form-control" placeholder="Descripción" rows="4" name="mdesc_event" id="mdesc_event" required="true" autofocus="autofocus" ng-model="clickevent.descripcion"></textarea>
                              <br>
                              Fecha inicio: <input type="date" name="mfechini_event" id="mfechini_event" class="form-control" required="true" autofocus="autofocus" ng-model="clickevent.fechainicio" format-date>
                              <br>
                              Fecha Fin: <input type="date" name="mfechfin_event" id="mfechfin_event" class="form-control" required="true" autofocus="autofocus" ng-model="clickevent.fechafin" format-date>
                              <br>
                              Hora: <input type="text" name="mhora_event" id="mhora_event" class="form-control" placeholder="00:00am/pm" required="true" autofocus="autofocus" ng-model="clickevent.hora">
                              <br>
                              Lugar: <input type="text" name="mlugar_event" id="mlugar_event" class="form-control" placeholder="Lugar" required="true" autofocus="autofocus" ng-model="clickevent.lugar">
                              <br>
                              <input type="text" name="madm_event" id="madm_event" style="display: none;" value="<?php echo $id ?>">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>

                  <!-- DelNoti Modal-->
                  <div class="modal fade" id="DeleventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar evento?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                              <strong style="color: red;">
                                Vas a eliminar el evento de  "{{clickevent.nombre}}".
                              </strong>
                              
                        </div>
                        <div class="modal-footer">
                          <form method="POST" action="./delevent.php">
                          <input type="text" id="del_idevent" name="del_idevent" class="form-control" ng-model="clickevent.idevento" style="display:none;">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                          <button class="btn btn-danger" type="submit">Aceptar</button>
                          </form>
                        </div>
                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?>
              </div>
            </div>
            

          </div>
          <!-- /.container-fluid -->

          <!-- Sticky Footer 
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
              </div>
            </div>
          </footer>-->

        </div>
        <!-- /.content-wrapper -->

        <!-- content-wrapper convocatorias -->
        <div id="content-wrapper4"  style="display: none;">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Inicio</a>
              </li>
              <li class="breadcrumb-item active">Convocatorias</li>
            </ol>


            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Convocatorias
                <button type="button" class="btn btn-default btn-md float-right" data-toggle="modal" data-target="#AgreeconvoModal"><span class="fa fa-plus"></span> Agregar</button>
              </div>

              <div class="card-body" style="overflow-y: auto; height:400px;">

                <div class="table-responsive" ng-controller="controladorconvo">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Hora</th>
                        <th>Lugar</th>
                        <th>Área</th>
                        <th>Administrador</th>
                        <th colspan="2">Operaciones</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Hora</th>
                        <th>Lugar</th>
                        <th>Área</th>
                        <th>Administrador</th>
                        <th colspan="2">Operaciones</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr ng-repeat = "con in convo">
                        <td>{{con.idconvocatoria}}</td>
                        <td>{{con.nombre}}</td>
                        <td>{{con.descripcion}}</td>
                        <td>{{con.fechainicio}}</td>
                        <td>{{con.fechafin}}</td>
                        <td>{{con.hora}}</td>
                        <td>{{con.lugar}}</td>
                        <td>{{con.area}}</td>
                        <td>{{con.usuario}}</td>
                        <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModconvoModal" ng-click="selectconvo(con)">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                      </button></td>
                      <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DelconvoModal" ng-click="selectconvo(con)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button></td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- Modconvo Modal-->
                  <div class="modal fade" id="ModconvoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Actualizar Convocatoria</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="./modconvo.php">
                            <div class="form-group">
                              <input type="text" name="mid_convo" id="mid_convo" style="display: none;" class="form-control" ng-model="clickconvo.idconvocatoria">

                              ID: <input type="text" name="noid_convo" id="noid_convo"class="form-control" ng-model="clickconvo.idconvocatoria" disabled="true">
                              <br>
                              Nombre: <input type="text" name="mnom_convo" id="mnom_convo" class="form-control" placeholder="Nombre de la convocatoria" required="true" autofocus="autofocus" ng-model="clickconvo.nombre">
                              <br>
                              Descripción:
                              <textarea class="form-control" placeholder="Descripción" rows="4" name="mdesc_convo" id="mdesc_convo" required="true" autofocus="autofocus" ng-model="clickconvo.descripcion"></textarea>
                              <br>
                              Fecha inicio: <input type="date" name="mfechini_convo" id="mfechini_convo" class="form-control" required="true" autofocus="autofocus" ng-model="clickconvo.fechainicio" format-date>
                              <br>
                              Fecha Fin: <input type="date" name="mfechfin_convo" id="mfechfin_convo" class="form-control" required="true" autofocus="autofocus" ng-model="clickconvo.fechafin" format-date>
                              <br>
                              Hora: <input type="text" name="mhora_convo" id="mhora_convo" class="form-control" placeholder="00:00am/pm" required="true" autofocus="autofocus" ng-model="clickconvo.hora">
                              <br>
                              Lugar: <input type="text" name="mlugar_convo" id="mlugar_convo" class="form-control" placeholder="Lugar" required="true" autofocus="autofocus" ng-model="clickconvo.lugar">
                              <br>
                              Area: <select name="marea_convo" id="marea_convo" class="form-control" autofocus="true" required="true" ng-controller="controladorselectconvo" ng-model="clickconvo.area">
                                <option ng-repeat="a in area" value="{{a.idareadep}}" >{{a.nombre}}</option>
                              </select>
                              <input type="text" name="madm_convo" id="madm_convo" style="display: none;" value="<?php echo $id ?>">
                            </div>
                            <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                          </form>
                        </div>
                        
                        </div>
                      </div>
                  </div>

                  <!-- Delconvo Modal-->
                  <div class="modal fade" id="DelconvoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar la convocatoria?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                              <strong style="color: red;">
                                Vas a eliminar la convocatoria de  "{{clickconvo.nombre}}".
                              </strong>
                              
                        </div>
                        <div class="modal-footer">
                          <form method="POST" action="./delconvo.php">
                          <input type="text" id="del_idconvo" name="del_idconvo" class="form-control" ng-model="clickconvo.idconvocatoria" style="display:none;">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                          <button class="btn btn-danger" type="submit">Aceptar</button>
                          </form>
                        </div>
                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Actualización <?php setlocale(LC_ALL,"es_ES");
              echo strftime("%A %d de %B del %Y"); ?></div>
            </div>

          </div>
          <!-- /.container-fluid -->
          
          <!-- Sticky Footer 
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
              </div>
            </div>
          </footer>-->

        </div>
        <!-- /.content-wrapper -->
      
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-danger" href="cerrarsesion.php">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>

    <!-- AgreeNoti Modal-->
    <div class="modal fade" id="AgreenotiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form class="form-group" method="POST" action="./regnoti.php">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Noticia</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
            <input type="text" name="nom_noti" id="nom_noti"
            class="form-control" placeholder="Título" required="true" autofocus="autofocus">
            <br>
            <textarea class="form-control" placeholder="Descripción" rows="4" name="desc_noti" id="desc_noti" required="true" autofocus="autofocus"></textarea>
            <br>
            Fecha: <input type="date" name="fech_noti" id="fech_noti" class="form-control" min="2018-01-01" required="true" autofocus="autofocus">
            <br>
            <input type="text" name="lugar_noti" id="lugar_noti" class="form-control" placeholder="Lugar" required="true" autofocus="autofocus">
            <br>
            <div class="container" ng-controller="uploadController" ng-init="show_images()">
            <br>
            Seleccione la imagen: <input type="file" file-input="files" multiple /><br><br>
            
            <button class="btn btn-info" ng-click="uploadImage()">Subir</button>
            
            <div style="clear:both"></div>
            <hr>
            <span class="col-md-3" ng-repeat="image in uploaded_images">
            <input type="radio" name="img_noti" id="img_noti" value="{{image.file_name}}" required="true">
            <img ng-src="../vista/img/upload/{{image.file_name}}" width="100" height="80" class="show_images" /></span>
            
            <?php echo "<script> console.log(".$id.");</script>" ?>
            
            </div>
            <input type="text" name="adm_noti" style="display: none;" id="adm_noti" value="<?php echo $id ?>">
            
            </div>
            
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-success" type="submit">Registrar</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- Agreeevent Modal-->
    <div class="modal fade" id="AgreeeventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form class="form-group" method="POST" action="./regevent.php">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Evento</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
            <input type="text" name="nom_event" id="nom_event"
            class="form-control" placeholder="Nombre del evento" required="true" autofocus="autofocus">
            <br>
            <textarea class="form-control" placeholder="Descripción" rows="4" name="desc_event" id="desc_event" required="true" autofocus="autofocus"></textarea>
            <br>
            Fecha Inicio: <input type="date" name="fechini_event" id="fechini_event" min="2018-01-01" class="form-control" required="true" autofocus="autofocus">
            <br>
            Fecha Final: <input type="date" name="fechfin_event" id="fechfin_event" min="2018-01-01" class="form-control" required="true" autofocus="autofocus">
            <br>
            Hora: <input type="text" name="hora_event" id="hora_event" class="form-control" placeholder="00:00am/pm" required="true" autofocus="autofocus">
            <br>
            <input type="text" name="lugar_event" id="lugar_event" class="form-control" placeholder="Lugar" required="true" autofocus="autofocus">
            <br>
            <!--<div class="container" ng-controller="uploadController" ng-init="show_images()">
            <br>
            Seleccione la imagen: <input type="file" file-input="files" multiple /><br><br>
            
            <button class="btn btn-info" ng-click="uploadImage()">Subir</button>
            
            <div style="clear:both"></div>
            <hr>
            <span class="col-md-3" ng-repeat="image in uploaded_images">
            <input type="radio" name="img_noti" id="img_noti" value="{{image.file_name}}" required="true">
            <img ng-src="../vista/img/upload/{{image.file_name}}" width="100" height="80" class="show_images" /></span>
            
            <?php echo "<script> console.log(".$id.");</script>" ?>
            
            </div>-->
            <input type="text" name="adm_event" style="display: none;" id="adm_event" value="<?php echo $id ?>">
            
            </div>
            
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-success" type="submit">Registrar</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- Agreeconvo Modal-->
    <div class="modal fade" id="AgreeconvoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form class="form-group" method="POST" action="./regconvo.php">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Convocatoria</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
            <input type="text" name="nom_convo" id="nom_convo"
            class="form-control" placeholder="Nombre del evento" required="true" autofocus="autofocus">
            <br>
            <textarea class="form-control" placeholder="Descripción" rows="4" name="desc_convo" id="desc_convo" required="true" autofocus="autofocus"></textarea>
            <br>
            Fecha Inicio: <input type="date" name="fechini_convo" id="fechini_convo" min="2018-01-01" class="form-control" required="true" autofocus="autofocus">
            <br>
            Fecha Final: <input type="date" name="fechfin_convo" id="fechfin_convo" min="2018-01-01" class="form-control" required="true" autofocus="autofocus">
            <br>
            Hora: <input type="text" name="hora_convo" id="hora_convo" class="form-control" placeholder="00:00am/pm" required="true" autofocus="autofocus">
            <br>
            <input type="text" name="lugar_convo" id="lugar_convo" class="form-control" placeholder="Lugar" required="true" autofocus="autofocus">
            <br>
            <!--<div class="container" ng-controller="uploadController" ng-init="show_images()">
            <br>
            Seleccione la imagen: <input type="file" file-input="files" multiple /><br><br>
            
            <button class="btn btn-info" ng-click="uploadImage()">Subir</button>
            
            <div style="clear:both"></div>
            <hr>
            <span class="col-md-3" ng-repeat="image in uploaded_images">
            <input type="radio" name="img_noti" id="img_noti" value="{{image.file_name}}" required="true">
            <img ng-src="../vista/img/upload/{{image.file_name}}" width="100" height="80" class="show_images" /></span>
            
            <?php echo "<script> console.log(".$id.");</script>" ?>
            
            </div>-->
            Area: <select name="area_convo" id="area_convo" class="form-control" required="true" ng-controller="controladorselectconvo">
              <option ng-repeat="a in area" value="{{a.idareadep}}">{{a.nombre}}</option>
            </select>
            <input type="text" name="adm_convo" style="display: none;" id="adm_convo" value="<?php echo $id ?>">
            
            </div>
            
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-success" type="submit">Registrar</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- Agreegalimg Modal-->
    <div class="modal fade" id="Agreegalimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Subir Imagenes</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="file-field" ng-controller="uploadgalery" ng-init="show_galery()">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Seleccione Archivos:</span>
                    <input type="file" file-input="files" multiple>
                </div>
                <br><br>
                <button class="btn btn-info" ng-click="uploadImage()"><i class="fa fa-upload" aria-hidden="true"></i> Subir</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-reply" aria-hidden="true"></i> Salir</button>
            </div>
            

            <!--<div class="custom-file" ng-controller="uploadgalery">
              <input type="file" class="custom-file-input" file-input="files" id="customFile" multiple>
              <label class="custom-file-label" for="customFile"></label>
              
            </div>-->
            </form>
            
            
            <div style="clear:both"></div>
                
          </div>
          <!--<div class="modal-footer">
            <form method="POST" action="./delconvo.php">
            <input type="text" id="del_idconvo" name="del_idconvo" class="form-control" ng-model="clickconvo.idconvocatoria" style="display:none;">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-danger" type="submit">Aceptar</button>
            </form>
          </div>-->
            
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    
    <script src="../vista/bootstrap/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vista/bootstrap/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vista/bootstrap/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../vista/bootstrap/dashboard/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vista/bootstrap/dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../vista/bootstrap/dashboard/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <!--<script src="../vista/bootstrap/dashboard/js/demo/datatables-demo.js"></script>
    <script src="../vista/bootstrap/dashboard/js/demo/chart-area-demo.js"></script>-->

  </body>

</html>
