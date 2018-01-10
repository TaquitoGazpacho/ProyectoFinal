<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <div id="nav">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header dropup">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('index') }}">LockBox</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ Route::current()->getName() == 'index' ? 'active' : null }}"><a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ route('index') }}#servicios">Servicios</a></li>
                        <li><a href="{{ route('index') }}#opiniones">Opiniones</a></li>
                        <li><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa</a></li>
                        <li><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>
                    </ul>
                    @if(Auth::guard('empresa')->check() || Auth::guard('web')->check() || Auth::guard('admin')->check())
                        @auth('empresa')
                            <ul class="nav navbar-nav navbar-right">
                                <div id="droup" class="dropup">
                                    <li class="dropdown navbar-right navbar-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::guard('empresa')->user()->nombre }}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="well well-sm">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-8">
                                                                    <h4>{{ Auth::guard('empresa')->user() -> name }}</h4>
                                                                    <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                                            </i></cite></small>
                                                                    <p>
                                                                        <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                                    <!-- Split button -->
                                                                    <div class="btn-group">
                                                                        <a href="{{ route('empresa.home') }}" type="button" class="btn btn-primary">
                                                                            Perfil</a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>
                                                                        <a href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"  type="button" class="btn btn-primary">
                                                                            Logout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!--<a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                    </form>-->
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        @endauth
                        @auth('web')
                            <ul class="nav navbar-nav navbar-right">
                                <div id="droup" class="dropup">
                                    <li class="dropdown navbar-right navbar-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::guard('web')->user()->name }}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="well well-sm">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-8">
                                                                    <h4>{{ Auth::guard('web')->user() -> name }} {{ Auth::guard('web')->user() -> surname }}</h4>
                                                                    <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                                            </i></cite></small>
                                                                    <p>
                                                                        <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                                    <!-- Split button -->
                                                                    <div class="btn-group">
                                                                        <a href="{{ route('home') }}" type="button" class="btn btn-primary">
                                                                            Perfil</a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>
                                                                        <a href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"  type="button" class="btn btn-primary">
                                                                            Logout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!--<a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                    </form>-->
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        @endauth
                        @auth('admin')
                            <ul class="nav navbar-nav navbar-right">
                                <div id="droup" class="dropup">
                                    <li class="dropdown navbar-right navbar-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::guard('admin')->user()->name }}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="well well-sm">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-8">
                                                                    <h4>{{ Auth::guard('admin')->user() -> name }}</h4>
                                                                    <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                                            </i></cite></small>
                                                                    <p>
                                                                        <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                                    <!-- Split button -->
                                                                    <div class="btn-group">
                                                                        <a href="{{ route('home') }}" type="button" class="btn btn-primary">
                                                                            Perfil</a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>
                                                                        <a href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"  type="button" class="btn btn-primary">
                                                                            Logout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!--<a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                    </form>-->
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        @endauth
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li class="{{ Route::current()->getName() === 'login' ? 'active' : null }}"><a href="{{ route('login') }}">Login</a></li>
                            <li class="{{ Route::current()->getName() === 'register' ? 'active' : null }}"><a href="{{ route('register') }}">Regístrate</a></li>
                        </ul>
                    @endif
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src={{ asset("adminLTE/img/iker.png")}} class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Iker Ruzo</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="{{ route('admin.home') }}"><i class="fa fa-link"></i> <span>Home</span></a></li>
                <li><a href="{{ route('admin.usuarios') }}"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
                <li><a href="{{ route('admin.empresa') }}"><i class="fa fa-link"></i> <span>Transporte</span></a></li>
                <li><a href="{{ route('admin.oficinas') }}"><i class="fa fa-link"></i> <span>Oficinas</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Link</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Link in level 2</a></li>
                        <li><a href="#">Link in level 2</a></li>
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
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
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
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
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

@yield('js')

{{--Nuestro JS--}}
<script src={{asset("js/admin.js")}}></script>
</body>
</html>
