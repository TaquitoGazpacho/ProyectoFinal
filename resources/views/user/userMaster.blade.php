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
    {{--<link rel="stylesheet" href={{asset("css/complementos/morris.css")}}>--}}
    <!-- jvectormap -->
    {{--<link rel="stylesheet" href={{asset("css/complementos/jquery-jvectormap.css")}}>--}}
    <!-- Date Picker -->
    {{--<link rel="stylesheet" href={{asset("css/complementos/bootstrap-datepicker.min.css")}}>--}}
    <!-- Daterange picker -->
    {{--<link rel="stylesheet" href={{asset("css/complementos/daterangepicker.css")}}>--}}
    <!-- responsive tables-->
    <link rel="stylesheet" href={{asset("css/complementos/dataTables.bootstrap.css")}}>
    {{--<!-- bootstrap wysihtml5 - text editor -->--}}
    {{--<link rel="stylesheet" href={{asset("adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}>--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Nuestro Css -->
    <link rel="stylesheet" href={{ asset("css/complementos/select2.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
    <style>

    </style>
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
<body>
{{--<nav class="navbar navbar-default" role="navigation">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<a id="menu-toggle" href="#" class="navbar-toggle">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</a>--}}
            {{--<a class="navbar-brand" href="{{ route('index') }}">LockBox</a>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li class="hidden-xs hidden-sm {{ Route::current()->getName() == 'index' ? 'active' : null }}"><a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>--}}
            {{--<li class="hidden-xs hidden-sm"><a href="{{ route('index') }}#servicios">Servicios</a></li>--}}
            {{--<li class="hidden-xs hidden-sm"><a href="{{ route('index') }}#opiniones">Opiniones</a></li>--}}
            {{--<li class="hidden-xs hidden-sm"><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa</a></li>--}}
            {{--<li class="hidden-xs hidden-sm"><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>--}}
        {{--</ul>--}}

        {{--@if(Auth::guard('web')->check())--}}
            {{--<ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">--}}
                {{--<li class="dropdown user user-menu">--}}
                    {{--<!-- Menu Toggle Button -->--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<!-- The user image in the navbar-->--}}
                        {{--<img src={{ Auth::guard('web')->user()->image }} class="user-image" alt="User Image">--}}
                        {{--<!-- hidden-xs hides the username on small devices so only the image appears. -->--}}
                        {{--<span class="hidden-xs">{{ Auth::guard('web')->user()->name. " ". Auth::guard('web')->user()->surname }}</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<!-- The user image in the menu -->--}}
                        {{--<li class="user-header">--}}
                            {{--<img src={{ Auth::guard('web')->user()->image }} class="img-circle" alt="User Image">--}}

                            {{--<p>--}}
                                {{--{{ Auth::guard('web')->user()->name. " ". Auth::guard('web')->user()->surname }}--}}
                                {{--<small>Member since Nov. 2012</small>--}}
                            {{--</p>--}}
                        {{--</li>--}}
                        {{--<!-- Menu Body -->--}}
                        {{--<li class="user-body">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Followers</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Sales</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-4 text-center">--}}
                                    {{--<a href="#">Friends</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /.row -->--}}
                        {{--</li>--}}
                        {{--<!-- Menu Footer-->--}}
                        {{--<li class="user-footer">--}}
                            {{--<div class="pull-left">--}}
                                {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                            {{--</div>--}}
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                            {{--<div class="pull-right">--}}
                                {{--<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--@else--}}
            {{--<ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">--}}
                {{--<li class="{{ Route::current()->getName() === 'login' ? 'active' : null }}"><a href="{{ route('login') }}">Login</a></li>--}}
                {{--<li class="{{ Route::current()->getName() === 'register' ? 'active' : null }}"><a href="{{ route('register') }}">Regístrate</a></li>--}}
            {{--</ul>--}}
        {{--@endif--}}

        {{--<!-- ************* Esta es la barra lateral ****************-->--}}
        {{--<div id="sidebar-wrapper" class="sidebar-toggle">--}}
            {{--<ul class="sidebar-nav" data-widget="tree">--}}
                {{--<!-- Optionally, you can add icons to the links -->--}}
                {{--<li class="active"><a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>--}}
                {{--<li><a href="{{ route('home.suscripcion') }}"><i class="fa fa-usd"></i> <span>Suscripción</span></a></li>--}}
                {{--<li><a href="{{ route('home.pedidos') }}"><i class="fa fa-usd"></i> <span>Pedidos</span></a></li>--}}
                {{--<li><a href="{{ route('home.ajustes') }}"><i class="fa fa-cog"></i> <span>Ajustes</span></a></li>--}}
                {{--<ul class="hidden-lg hidden-md visible-xs visible-sm dropdown"><i class="fa fa-cog"></i><span>Hola</span>--}}
                    {{--<li>Hola</li>--}}
                {{--</ul>--}}
                {{--<li class="dropdown visible-xs visible-sm">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> <span>Página web</span> <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="{{ route('index') }}#servicios">Servicios</a></li>--}}
                        {{--<li><a href="{{ route('index') }}#opiniones">Opiniones</a></li>--}}
                        {{--<li><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa</a></li>--}}
                        {{--<li><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown user user-menu">--}}
                    {{--<!-- Menu Toggle Button -->--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span>User</span> <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--{{ csrf_field() }}--}}
                        {{--</form>--}}
                        {{--<li>--}}
                            {{--<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}


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


            {{--<section class="content-header">--}}
                {{--<h1>--}}
                    {{--@yield('pageHeader')--}}
                    {{--<small>--}}
                        {{--@yield('pageDescription')--}}
                    {{--</small>--}}
                {{--</h1>--}}
            {{--</section>--}}

            <!-- Main content -->
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
{{--<!-- Morris.js charts -->--}}
{{--<script src={{asset("js/complementos/raphael.min.js")}}></script>--}}
{{--<script src={{asset("js/complementos/morris.min.js")}}></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src={{asset("js/complementos/jquery.sparkline.min.js")}}></script>--}}
{{--<!-- jvectormap -->--}}
{{--<script src={{asset("adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>--}}
{{--<script src={{asset("adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src={{asset("js/complementos/jquery.knob.min.js")}}></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src={{asset("js/complementos/moment.min.js")}}></script>--}}
{{--<script src={{asset("js/complementos/daterangepicker.js")}}></script>--}}
{{--<!-- datepicker -->--}}
{{--<script src={{asset("js/complementos/bootstrap-datepicker.min.js")}}></script>--}}
{{--<!-- Bootstrap WYSIHTML5 -->--}}
{{--<script src={{asset("adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}></script>--}}
{{--<!-- Slimscroll -->--}}
{{--<script src={{asset("js/complementos/jquery.slimscroll.min.js")}}></script>--}}
{{--<!-- FastClick -->--}}
{{--<script src={{asset("js/complementos/fastclick.js")}}></script>--}}
<!-- Responsive Tables-->
<script src={{asset("js/complementos/jquery.dataTables.js")}}></script>
<script src={{asset("js/complementos/dataTables.bootstrap.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("adminLTE/js/adminlte.min.js")}}></script>
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src={{asset("adminLTE/js/pages/dashboard.js")}}></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src={{asset("adminLTE/js/demo.js")}}></script>--}}
<!-- Js de Select2 -->
<script src={{asset("js/complementos/select2.min.js")}}></script>

@yield('js')

<script>
//    $(window).resize(function() {
//        var path = $(this);
//        var contW = path.width();
//        if(contW >= 751){
//            document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
//        }else{
//            document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
//        }
//    });
//    $(document).ready(function() {
//        $('.dropdown').on('show.bs.dropdown', function(e){
//            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
//        });
//        $('.dropdown').on('hide.bs.dropdown', function(e){
//            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
//        });
//        $("#menu-toggle").click(function(e) {
//            e.preventDefault();
//            var elem = document.getElementById("sidebar-wrapper");
//            left = window.getComputedStyle(elem,null).getPropertyValue("left");
//            if(left == "200px"){
//                document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
//            }
//            else if(left == "-200px"){
//                document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
//            }
//        });
//    });
</script>
{{--Nuestro JS--}}
<script src={{asset("js/user.js")}}></script>
</body>
</html>
