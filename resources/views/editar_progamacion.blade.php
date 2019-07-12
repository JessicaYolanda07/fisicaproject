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
                            Editar programacion {{ $progamacionmathor->id }}
                        </h1>
                        @if (session('mensaje'))
                            <div class="alert alert-success">
                                {{ session('mensaje')}}
                            </div>
                        @endif 
                        <form action="{{ route('updatep', $progamacionmathor->id) }}" method="POST">
                            {{method_field('PUT')}}

                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                
                            @if ($errors->has('id_materia'))
                                <div class="alert alert-danger">
                                    El nombre de la materia es obligatorio
                                </div>
                            @endif

                            @if ($errors->has('id_docente'))
                                <div class="alert alert-danger">
                                    El nombre del docebte es obligatorio
                                </div>
                            @endif
                            @if ($errors->has('id_horario'))
                                <div class="alert alert-danger">
                                    El horario es obligatorio
                                </div>
                            @endif
                            @if ($errors->has('grupo'))
                                <div class="alert alert-danger">
                                    El grupo es obligatorio
                                </div>
                            @endif
                                                    
                            @if ($errors->has('ambiente'))
                                <div class="alert alert-danger">
                                    El ambiente es obligatorio
                                </div>
                            @endif

                            @if ($errors->has('gestion'))
                                <div class="alert alert-danger">
                                    La gestion es obligatoria
                                </div>
                            @endif

                            @if ($errors->has('cupo_max'))
                                <div class="alert alert-danger">
                                    El cupo maximo de alumnos es obligatorio
                                </div>
                            @endif

                            <br>
                            <div class="form-group">
                                <label for="">Nombre de la materia</label>
                                <select name="id_materia" class="form-control" id="inputMateria_id">
                                    @foreach($materias as $item)
                                        <option value="{{$item->id}}">{{$item->nomb_materia}}</option>   
                                    @endforeach()  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nombre del docente</label>
                                <select name="id_docente" class="form-control" id="inputDocente_id">
                                    @foreach($docentes as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido_p}} {{$item->apellido_m}}</option>
                                    @endforeach()  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Horario</label>
                                <select name="id_horario" class="form-control" id="inputHorario_id">
                                    @foreach($horarios as $item)
                                        <option value="{{$item->id}}">{{$item->dia}}: {{$item->hora_desde}} - {{$item->hora_hasta}}</option>
                                    @endforeach()  
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Grupo</label>
                                <select class="form-control" 
                                    id="exampleFormControlSelect3" 
                                    name="grupo" value="{{ $progamacionmathor->grupo }}">
                                   
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                                                
                                </select>
                            </div>
                                
                            <div class="form-group has-feedback">
                                <label>Ambiente</label>
                                <input type="text" 
                                    id="ambiente" 
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    class="form-control" 
                                    name="ambiente" 
                                    placeholder="ambiente de la materia" 
                                    class="form-control mb2" 
                                    value="{{ $progamacionmathor->ambiente }}" 
                                >
                            </div>

                            <div class="form-group has-feedback">
                                <label>Gestion</label>
                                <input type="text" 
                                    id="gestio" 
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    class="form-control" 
                                    name="gestion" 
                                    class="form-control mb2"
                                    value="{{ $progamacionmathor->gestion }}"
                                >
                            </div>

                        
                            <div class="form-group has-feedback">
                                <label>cupo max</label>
                                <input type="text" 
                                    id="cupo_alum" 
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    class="form-control" 
                                    name="cupo_max"
                                    class="form-control mb2" 
                                    value="{{ $progamacionmathor->cupo_max }}"
                                >
                            </div>
                                                        
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">editar</button>
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

