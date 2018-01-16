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
    <!-- ESTILO PARA EL PANEL DE USUARIO SUPERIOR DERECHO -->
    <link rel="stylesheet" href={{asset("adminLTE/css/AdminLTE.min.css")}}>
    <!-- responsive tables-->
    <link rel="stylesheet" href={{asset("css/complementos/dataTables.bootstrap.css")}}>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Nuestro Css -->
    <link rel="stylesheet" href={{ asset("css/complementos/select2.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
</head>

<body>
    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="menu-toggle" href="#" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="navbar-brand" href="{{ route('index') }}">LockBox</a>
                    </div>

                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="{{ Route::current()->getName() == 'index' ? 'active' : null }}"><a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="{{ route('index') }}#servicios">Servicios</a></li>
                            <li><a href="{{ route('index') }}#opiniones">Opiniones</a></li>
                            <li><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa</a></li>
                            <li><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>
                        </ul>

                        @if(Auth::guard('web')->check())
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- The user image in the navbar-->
                                        <img src="{{ asset(Auth::guard('web')->user()->image) }}" class="user-image " alt="User Image">
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                        <span class="hidden-xs">{{ Auth::guard('web')->user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header hide-mobile">
                                            <img src="{{ asset(Auth::guard('web')->user()->image) }}" class="img-circle" alt="User Image">

                                            <p>
                                                {{ Auth::guard('web')->user()->name }}
                                                <small>Member since Nov. 2012</small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class="user-body">
                                            <div class="row ">
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Followers</a>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Sales</a>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Friends</a>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="{{ route('home.pedidos') }}" class="btn btn-default btn-flat">Tu cuenta</a>
                                            </div>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                            <div class="pull-right">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @else
                            <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
                                <li class="{{ Route::current()->getName() === 'login' ? 'active' : null }}"><a href="{{ route('login') }}">Login</a></li>
                                <li class="{{ Route::current()->getName() === 'register' ? 'active' : null }}"><a href="{{ route('register') }}">Regístrate</a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="{{ route('home') }}">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.suscripcion') }}">
                            <span class="sidebar-icon"><i class="fa fa-usd"></i></span>
                            <span class="sidebar-title">Suscripción</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.pedidos') }}">
                            <span class="sidebar-icon"><i class="fa fa-usd"></i></span>
                            <span class="sidebar-title">Pedidos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.ajustes') }}">
                            <span class="sidebar-icon"><i class="fa fa-cog"></i></span>
                            <span class="sidebar-title">Ajustes</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Management</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
        <main id="page-content-wrapper" role="main">

            <section class="content container-fluid mobile-area">

                <!--------------------------
                  | Your Page Content Here |
                  -------------------------->

                @yield('contenido')


            </section>

        </main>
    </div>



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
<!-- Responsive Tables-->
<script src={{asset("js/complementos/jquery.dataTables.js")}}></script>
<script src={{asset("js/complementos/dataTables.bootstrap.js")}}></script>
<!-- AdminLTE App -->
{{--<script src={{asset("adminLTE/js/adminlte.min.js")}}></script>--}}
<!-- Js de Select2 -->
<script src={{asset("js/complementos/select2.min.js")}}></script>

@yield('js')

{{--Nuestro JS--}}
<script src={{asset("js/user.js")}}></script>
</body>
</html>
