<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LockBox - Panel de {{ Auth::guard('web')->user()->name }}</title>
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
            @include("fijas.nav")
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
