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
                        <!-- TO DO List -->
                        <h1>
                            Editar docente {{ $docentes->id }}
                        </h1>
                        @if (session('mensaje'))
                            <div class="alert alert-success">
                                {{ session('mensaje')}}
                            </div>
                        @endif 

                        <form action="{{ route('updated', $docentes->id) }}" method="POST">
                            {{method_field('PUT')}}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            @error('nombre')
                                <div class="alert alert-danger">
                                    EL NOMBRE ES OBLIGADO
                                </div>
                            @enderror

                            @error('apellido_p')
                                <div class="alert alert-danger">
                                    EL APELLIDO PATERNO ES OBLIGADO
                                </div>
                            @enderror

                            @error('apellido_m')
                                <div class="alert alert-danger">
                                    EL APELLIDO MATERNO ES OBLIGADO
                                </div>
                            @enderror

                            @error('ci')
                                <div class="alert alert-danger">
                                    EL CI ES OBLIGADO
                                </div>
                            @enderror

                            @error('fecha_nac')
                                <div class="alert alert-danger">
                                    LA FECHA DE NACIMIENTO ES OBLIGADO
                                </div>
                            @enderror
                        
                            @error('correo')
                                <div class="alert alert-danger">
                                    EL CORREO ES OBLIGADO
                                </div>
                            @enderror
                        
                            @error('telefono')
                                <div class="alert alert-danger">
                                    EL TELEFONO ES OBLIGADO
                                </div>
                            @enderror
                        
                            @error('profesion')
                                <div class="alert alert-danger">
                                    LA PROFESION ES OBLIGADO
                                </div>
                            @enderror
                        
                            @error('carrera')
                                <div class="alert alert-danger">
                                    LA CARRERA ES OBLIGADO
                                </div>
                            @enderror
                            
                            @error('estado')
                                <div class="alert alert-danger">
                                    EL ESTADO ES OBLIGADO
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" id="docente_nom" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="nombre" id="" placeholder="Escriba su nombre"  value="{{$docentes->nombre}}">
                            </div>
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" id="apellido_do" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="apellido_p" id="" placeholder="Escriba su primer apellido"  value="{{$docentes->apellido_p}}">
                            </div>
                            <div class="form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" id="apellido_madoc" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="apellido_m" id="" placeholder="Escriba su segundo apellido"  value="{{$docentes->apellido_m}}">
                            </div>
                            <div class="form-group">
                                <label for="">Carnet de Identidad</label>
                                <input type="number" class="form-control" name="ci" id="" placeholder="Escriba su numero de carnet" value="{{$docentes->ci}}">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fecha_nac" id="" placeholder="Escriba su fecha de nacimiento"  value="{{$docentes->fecha_nac}}">
                            </div>
                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="text" id="correo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="correo" id="" placeholder="Escriba su numero de correo" value="{{$docentes->correo}}">
                            </div>
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="number" class="form-control" name="telefono" id="" placeholder="Escriba su numero de carnet" value="{{$docentes->telefono}}">
                            </div>
                            <div class="form-group">
                                <label for="">Profesion</label>
                                <input type="text" id="profes" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="profesion" id="" placeholder="Escriba su profesion"  value="{{$docentes->profesion}}">
                            </div>
                            <div class="form-group">
                                <label for="">Carrera</label>
                                <input type="text" id="carrera_doc" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="carrera" id="" placeholder="Escriba su carrera"  value="{{$docentes->carrera}}">
                            </div>
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input type="text" id="estado" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="estado" id="" placeholder="Escriba su estado"  value="{{$docentes->estado}}">
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-warning btn-bloc">Editar</button>
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