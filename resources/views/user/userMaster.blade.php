<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LockBox @if (Auth::guard('web')->check()) - Panel de {{ Auth::guard('web')->user()->name }}@endif</title>
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
    <!--Mapbox-->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />
    <!--Select2-->
    <link rel="stylesheet" href={{ asset("css/complementos/select2.min.css") }}>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Nuestro Css -->
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    @yield('css')
</head>

<body>
    <div id="navbar-wrapper">
        <header>
            @include("fijas.nav")
        </header>
    </div>
    <div id="wrapper">
        @if (Auth::guard('web')->check())
            <div id="sidebar-wrapper" @if( \Request::route()->getName() == 'empresa.home' || \Request::route()->getName() == 'empresa.login' || \Request::route()->getName() == 'admin.login' || \Request::route()->getName() == 'password.request' || \Request::route()->getName() == 'password.reset') style="display: none" @else style="display: block" @endif>
                <aside id="sidebar">
                    <ul id="sidemenu" class="sidebar-nav">
                        <li @if(\Request::route()->getName()=="home") class="active" @endif>
                            <a href="{{ route('home') }}">
                                <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                                <span class="sidebar-title">Perfil</span>
                            </a>
                        </li>
                        <li @if(\Request::route()->getName()=="home.suscripcion") class="active" @endif>
                            <a href="{{ route('home.suscripcion') }}">
                                <span class="sidebar-icon"><i class="fa fa-usd"></i></span>
                                <span class="sidebar-title">Suscripción</span>
                            </a>
                        </li>
                        <li @if(\Request::route()->getName()=="home.oficinas") class="active" @endif>
                            <a href="{{ route('home.oficinas') }}">
                                <span class="sidebar-icon"><i class="fa fa-globe"></i></span>
                                <span class="sidebar-title">Oficinas</span>
                            </a>
                        </li>
                        <li @if(\Request::route()->getName()=="home.pedidos") class="active" @endif>
                            <a href="{{ route('home.pedidos') }}">
                                <span class="sidebar-icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="sidebar-title">Pedidos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home.tiendas') }}">
                                <span class="sidebar-icon"><i class="fa fa-cog"></i></span>
                                <span class="sidebar-title">Tiendas asociadas</span>
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
        @endif
        <main id="page-content-wrapper" role="main">

            <section class="content container-fluid mobile-area">

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
<!--Mapbox-->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
<!-- AdminLTE App -->
{{--<script src={{asset("adminLTE/js/adminlte.min.js")}}></script>--}}
<!-- Js de Select2 -->
<script src={{asset("js/complementos/select2.min.js")}}></script>

<script src={{asset("js/complementos/notify.js")}}></script>

@yield('js')

    <script>
        @if(Session::has('success'))
            $.notify("{{ Session::get('success') }}", "success");
            @php
                Session::forget('success');
            @endphp
        @endif
    </script>

{{--Nuestro JS--}}
<script src={{asset("js/user.js")}}></script>
</body>
</html>
