<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema | Panel Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/sistemalaravel.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout" class="btn btn-default">Salir</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>     
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
              <p></p>
            </div>
            <div class="pull-left info">
              <p>UATF-HORARIOS</p>
            </div>
          </div>
           
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>
            <li>
              <a href="tabla">
                <i class="fa fa-dashboard"></i> PROGRAMACION DE HORARIOS
              </a>
            </li>
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-programacionh"></i> HORARIO DE LABORATORIO <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="/formulario_crear_materia" ><i class="fa fa-circle-o"></i>Agregar materias </a></li>
              </ul>
              <ul class="treeview-menu">
                <li class="active"><a href="/formulario_crear_horario" ><i class="fa fa-circle-o"></i>Agregar horarios </a></li>
              </ul>
              <ul class="treeview-menu">
                <li class="active"><a href="/formulario_crear_docente" ><i class="fa fa-circle-o"></i>Agregar docente </a></li>
              </ul>
              <ul class="treeview-menu">
                <li class="active"><a href="/programacionh" ><i class="fa fa-circle-o"></i>Programar horarios-lab </a></li>
              </ul>         
            </li>
          </ul> 
        </section>
      </aside>
      <div class="content-wrapper">
        <section class="content">
          <section class="col-lg-10 connectedSortable">
            <h1>
              Editar horario {{ $horario->id }}
            </h1>
            @if (session('mensaje'))
              <div class="alert alert-siccess">
                {{ session('mensaje')}}
              </div>
            @endif 

            <form action="{{ route('updateh', $horario->id) }}" method="POST">
              {{method_field('PUT')}}
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              @if ($errors->has('dia'))
                <div class="alert alert-danger">
                  El dia es obligatorio
                </div>
              @endif

              @if ($errors->has('hora_desde'))
                <div class="alert alert-danger">
                  La hora de inicio obligatorio
                </div>
              @endif

              @if ($errors->has('hora_hasta'))
                <div class="alert alert-danger">
                  La hora de finalizacion es obligatorio
                </div>
              @endif

              <div class="form-group has-feedback">
                <label>Dia</label>
                <input type="text" class="form-control" 
                  name="dia"
                  placeholder="dia" 
                  class="form-control mb2" 
                  value="{{ $horario->dia }}">
              </div>
              <div class="form-group has-feedback">
                <label>hora de inicio</label>
                <input type="text" class="form-control"
                  name="hora_desde" 
                  placeholder="hora de inicio" 
                  class="form-control mb2" 
                  value="{{ $horario->hora_desde }}" >
                          
              </div>
              <div class="form-group has-feedback">
                <label>horario de finalizacio</label>
                <input type="text" class="form-control" 
                  name="hora_hasta"
                  placeholder="horario de finalizacion" 
                  class="form-control mb2"
                  value="{{ $horario->hora_hasta }}" >
              </div>
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">editar</button>
              </div>
                      
            </form>
          </section>
        </section>
      </div><!-- ./wrapper -->
    </div>  
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins\jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="/plugins/raphael-min.js"></script>
    <script src="/plugins/morris/morris.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <script src="/js/sistemalaravel.js"></script>
  </body>
</html>


