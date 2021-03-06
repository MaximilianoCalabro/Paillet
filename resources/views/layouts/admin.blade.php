<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paillet ADMIN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AD</b>M</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ADMIN Paillet</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Paillet</span>
                </a>
                <ul class="dropdown-menu">
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Inicio</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/inicio"><i class="fa fa-circle-o"></i> Configurar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Slider Cirugías</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/cirugia"><i class="fa fa-circle-o"></i> Inicio</a></li>
                <li><a href="/admin/cirugia_slider"><i class="fa fa-circle-o"></i> Secciones</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Cirugías</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/cirugias/blefaroplastia"><i class="fa fa-circle-o"></i> Blefaroplastia</a></li>
                <li><a href="/admin/cirugias/rinoplastia"><i class="fa fa-circle-o"></i> Rinoplastia</a></li>
                <li><a href="/admin/cirugias/lifting"><i class="fa fa-circle-o"></i> Lifting</a></li>
                <li><a href="/admin/cirugias/dermoabrasion"><i class="fa fa-circle-o"></i> Dermoabrasion</a></li>
                <li><a href="/admin/cirugias/peeling"><i class="fa fa-circle-o"></i> Peeling</a></li>
                <li><a href="/admin/cirugias/aumento"><i class="fa fa-circle-o"></i> Aumento Mamario</a></li>
                <li><a href="/admin/cirugias/reduccion"><i class="fa fa-circle-o"></i> Reduccion Mamaria</a></li>
                <li><a href="/admin/cirugias/levantamiento"><i class="fa fa-circle-o"></i> Levantamiento</a></li>
                <li><a href="/admin/cirugias/liposuccion"><i class="fa fa-circle-o"></i> Liposuccion</a></li>
                <li><a href="/admin/cirugias/abdominoplastia"><i class="fa fa-circle-o"></i> Abdominoplastia</a></li>
                <li><a href="/admin/cirugias/pantorrillas"><i class="fa fa-circle-o"></i> Pantorrillas</a></li>
                <li><a href="/admin/cirugias/gluteos"><i class="fa fa-circle-o"></i> Gluteos</a></li>
                <li><a href="/admin/cirugias/arrugas"><i class="fa fa-circle-o"></i> Arrugas</a></li>
                <li><a href="/admin/cirugias/sudoracion"><i class="fa fa-circle-o"></i> Sudoracion</a></li>
                <li><a href="/admin/cirugias/orejas"><i class="fa fa-circle-o"></i> Cirugia de Orejas</a></li>
                <li><a href="/admin/cirugias/cutaneas"><i class="fa fa-circle-o"></i> Lesiones Cutaneas</a></li>
                <li><a href="/admin/cirugias/capilar"><i class="fa fa-circle-o"></i> Implante Capilar</a></li>
                <li class="treeview"><i class="fa fa-circle-o"></i> Cirugías</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>CV</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/cv"><i class="fa fa-circle-o"></i> CV</a></li>
                <li><a href="/admin/cv_lista"><i class="fa fa-circle-o"></i> Cirugía en general</a></li>
                <li><a href="/admin/cv_plastica"><i class="fa fa-circle-o"></i> Cirugía plástica</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Clínica</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/clinica"><i class="fa fa-circle-o"></i> Configurar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Contacto</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/contacto"><i class="fa fa-circle-o"></i> Configurar</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Administrador de página</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                        <!--Contenido-->
		                        @yield('contenido')
		                    	<!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <strong>Copyright &copy; 2018. Powered By <a target="_blank" href="www.nkstudios.net">NKStudios</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
