<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href={{asset("bootstrap/css/bootstrap.min.css")}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset("font-awesome/css/font-awesome.min.css")}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href={{asset("css/complementos/ionicons/css/ionicons.min.css")}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset("adminLTE/css/AdminLTE.min.css")}}>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href={{asset("adminLTE/css/skins/_all-skins.min.css")}}>
    <!-- Morris chart -->
    <link rel="stylesheet" href={{asset("css/complementos/morris.css")}}>
    <!-- jvectormap -->
    <link rel="stylesheet" href={{asset("css/complementos/jquery-jvectormap.css")}}>
    <!-- Date Picker -->
    <link rel="stylesheet" href={{asset("css/complementos/bootstrap-datepicker.min.css")}}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{asset("css/complementos/daterangepicker.css")}}>
    <!-- responsive tables-->
    <link rel="stylesheet" href={{asset("css/complementos/dataTables.bootstrap.css")}}>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href={{asset("adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{ route('admin.home') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LB</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LockBox</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="https://pm1.narvii.com/6356/18eecd4d6611feb73b8741a070220bd77fcb7a63_hq.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Mr. Perrington</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="https://pm1.narvii.com/6356/18eecd4d6611feb73b8741a070220bd77fcb7a63_hq.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Mr. Perrington - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="https://pm1.narvii.com/6356/18eecd4d6611feb73b8741a070220bd77fcb7a63_hq.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Mr. Perrington</p>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <!-- Optionally, you can add icons to the links -->
                <li @if(\Request::route()->getName()=="admin.home") class="active" @endif><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li @if(\Request::route()->getName()=="admin.usuarios") class="active" @endif><a href="{{ route('admin.usuarios') }}"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
                <li @if(\Request::route()->getName()=="admin.empresa") class="active" @endif><a href="{{ route('admin.empresa') }}"><i class="fa fa-truck"></i> <span>Transporte</span></a></li>
                <li @if(\Request::route()->getName()=="admin.oficinas") class="active" @endif><a href="{{ route('admin.oficinas') }}"><i class="fa fa-building"></i> <span>Oficinas</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Página Web</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('index') }}#servicios">Servicios</a></li>
                        <li><a href="{{ route('index') }}#opiniones">Opiniones</a></li>
                        <li><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la Empresa</a></li>
                        <li><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('pageHeader')
                <small>
                    @yield('pageDescription')
                </small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            @yield('contenido')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="{{ route("index") }}">LockBox</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src={{asset("js/complementos/jquery.min.js")}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{asset("js/complementos/jquery-ui.min.js")}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
<!-- Morris.js charts -->
<script src={{asset("js/complementos/raphael.min.js")}}></script>
<script src={{asset("js/complementos/morris.min.js")}}></script>
<!-- Sparkline -->
<script src={{asset("js/complementos/jquery.sparkline.min.js")}}></script>
<!-- jvectormap -->
<script src={{asset("adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>
<script src={{asset("adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset("js/complementos/jquery.knob.min.js")}}></script>
<!-- daterangepicker -->
<script src={{asset("js/complementos/moment.min.js")}}></script>
<script src={{asset("js/complementos/daterangepicker.js")}}></script>
<!-- datepicker -->
<script src={{asset("js/complementos/bootstrap-datepicker.min.js")}}></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{asset("adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}></script>
<!-- Slimscroll -->
<script src={{asset("js/complementos/jquery.slimscroll.min.js")}}></script>
<!-- FastClick -->
<script src={{asset("js/complementos/fastclick.js")}}></script>
<!-- Responsive Tables-->
<script src={{asset("js/complementos/jquery.dataTables.js")}}></script>
<script src={{asset("js/complementos/dataTables.bootstrap.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("adminLTE/js/adminlte.min.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("adminLTE/js/pages/dashboard.js")}}></script>
<!-- NotifyJs-->
<script src="{{asset("js/complementos/notify.js")}}"></script>

{{--Nuestro JS--}}
<script src={{asset("js/admin.js")}}></script>

@yield('js')

<script>
    @if(Session::has('success'))
        $.notify("{{ Session::get('success') }}", "success");
        @php
            Session::forget('success');
        @endphp
    @endif
</script>



</body>
</html>
