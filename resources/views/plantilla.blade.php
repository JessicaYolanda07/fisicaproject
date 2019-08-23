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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/sistemalaravel.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">    
              <!-- Authentication Links -->
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                @endif
              @else
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/dist/img/default-50x50.gif" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }} </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/dist/img/default-50x50.gif" class="img-circle" alt="User Image">
                    <p>
                    {{ Auth::user()->name }} 
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
              @endguest
            </ul>
          </div>
        </nav>
      </header>  
      <!-- Left side column. contains the logo and sidebar -->
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
            @can('index progra_estudiante')
              <li class="active treeview">
                <a href="#">
                  <i class="fa fa-programacionlab"></i> PROGRA. DE HORARIOS <i class="fa fa-angle-left pull-right"></i>
                </a>
                @can('create progra_estudiante')
                  <ul class="treeview-menu">
                    <li class="active"><a href="/tabla" ><i class="fa fa-circle-o"></i>Programacion de lab </a></li>
                  </ul>
                @endcan
                @can('read progra_estudiante')
                  <ul class="treeview-menu">
                    <li class="active"><a href="/lista_alumnos_sin_recibo" ><i class="fa fa-circle-o"></i>Insertar numero de Recibo</a></li>
                  </ul>
                @endcan
                @can('read progra_estudiante')
                  <ul class="treeview-menu">
                    <li class="active"><a href="/lista_alumnos_con_recibo" ><i class="fa fa-circle-o"></i>Lista de alumnos con Recibo</a></li>
                  </ul>
                @endcan
               </li>
            @endcan
            @can('index programacion')
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-programacionh"></i> HORARIO DE LABORATORIO <i class="fa fa-angle-left pull-right"></i>
                </a>
                @can('index materia')
                  <ul class="treeview-menu">
                    <li class="active"><a href="/formulario_crear_materia" ><i class="fa fa-circle-o"></i>Agregar materias </a></li>
                  </ul>
                @endcan
                @can('index horario')
                  <ul class="treeview-menu">
                    <li class="active"><a href="/formulario_crear_horario" ><i class="fa fa-circle-o"></i>Agregar horarios </a></li>
                  </ul>
                @endcan
                @can('index docente')
                  <ul class="treeview-menu">
                    <li class="active"><a href="/formulario_crear_docente" ><i class="fa fa-circle-o"></i>Agregar docente </a></li>
                  </ul>
                @endcan
                
                <ul class="treeview-menu">
                  <li class="active"><a href="/programacionh" ><i class="fa fa-circle-o"></i>Programar horarios-lab </a></li>
                </ul>       
              </li>
            @endcan
            
            @can('index user')
              <li>
                <a href="{{ url('usuarios') }}">USUARIOS</a>
              </li>
            @endcan
            @can('index user')
              <li>
                <a href="#">Cambiar de grupo</a>
              </li>
            @endcan
          </ul> 
        </section>
      </aside>
      <div class="content-wrapper">
        @yield('seccion')
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
