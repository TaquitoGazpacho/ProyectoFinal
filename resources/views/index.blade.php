<html>
<head>
    <title>LockBox</title>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href={{asset("bootstrap/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("adminLTE/css/AdminLTE.min.css")}}>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href={{asset("font-awesome/css/font-awesome.min.css")}}>
    <!-- NOMBRE FUENTE: Vollkorn SC, serif -->
    <link href="https://fonts.googleapis.com/css?family=Vollkorn+SC:700" rel="stylesheet">

    <!-- JQuery -->
    <script src={{asset("js/complementos/jquery.min.js")}}></script>

    <!-- Notifyjs -->
    <script src={{asset("js/complementos/notify.js")}}></script>

    <!-- JavaScript -->
    <script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <script>
        window.onload = getHeaderHeight;
        function getHeaderHeight(){
            try {
                var header = document.getElementsByTagName('header')[0];
                var nav = document.getElementById('nav');
                var navHeight = parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
                var html = document.getElementsByTagName('html')[0];
                header.style.height = parseInt(window.innerHeight) - navHeight + 'px';
                // if (document.URL.includes("login") || document.URL.includes("register")) {
                //     //document.body.style.height = parseInt(window.innerHeight) + 'px';
                //     //html.style.height = parseInt(window.innerHeight) + 'px';
                //     document.body.style.overflow = 'hidden';
                // }
                addEvent();
            } catch (e) {}
        }

        $(document).ready(function(){
            @if(Session::has('success'))
                $.notify("{{ Session::get('success') }}", "success");
                @php
                    Session::forget('success');
                @endphp
            @endif

            @if (alert()->ready())
                {{--sweetAlertSimple("{!! alert()->message() !!}", "{!! alert()->option('text') !!}", "{!! alert()->type() !!}");--}}
                swal({
                    title: "{!! alert()->message() !!}",
                    text: "{!! alert()->option('text') !!}",
                    type: icono
                });
            @endif

        });
    </script>

    <!-- Favicon -->
<!-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <style>
        header{
            padding-top: 8%;
        }
    </style>
</head>
<body>
@mobile
    @include("fijas.nav")
@endmobile
@tablet
    @include("fijas.nav")
@endtablet


<header>
    <div class="centrado contaner text-center">
        <div class="row">
            <div class="col-xs-12">
                <h1>
                    Lock<label>Box</label>
                </h1>
                <hr/>
                <h2 id="TextoLanding">
                    Integrando seguridad y disponibilidad
                </h2>
                <br/>
                <a class="btn btn-default btn-lg" href='{{ route("register") }}'>únete</a>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</header>

@desktop
    @include("fijas.nav")
@enddesktop


<section class="sectionHeight" id="servicios">
    <div class="container">
        <div class="row text-center">
            <h2 style="color: #F96F00;">Servicios</h2>
        </div>
    </div>
    <div class="container icons">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center distributed-icons">
                <i class="fa fa-envelope-o fa-5x text-primary" aria-hidden="true"></i>
                <h3>Envíos</h3>
                <p class="text-muted">Recibe cómodamente tu paquete sin tener que estar en casa</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center distributed-icons">
                <i class="fa fa-handshake-o fa-5x text-primary" aria-hidden="true"></i>
                <h3>Digno de Confianza</h3>
                <p class="text-muted">Servicio que te permite acceder a tu envío de forma segura</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center distributed-icons">
                <i class="fa fa-map-marker fa-5x text-primary" aria-hidden="true"></i>
                <h3>Localización</h3>
                <p class="text-muted">Encuentra siempre una oficina muy cerca de tu casa o trabajo</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center distributed-icons">
                <i class="fa fa-lock fa-5x text-primary" aria-hidden="true"></i>
                <h3>Seguridad</h3>
                <p class="text-muted">Gracias a nuestro sistema de seguridad, solo tú podrás acceder</p>
            </div>
        </div>
    </div>
    <hr id="opiniones">

    <!-- PASOS A SEGUIR PARA LA COMPRA -->
    <div class="container pasos">
        <div class="row vertical-align">
            <div class="col-xs-12 col-md-2 col-lg-4">
                <div class="circulo text-center">1</div>
            </div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                <div class="pasos-texto">
                    Quisque quis laoreet ante. Sed rutrum justo sit amet massa cursus, convallis semper nisi laoreet. Mauris in porta sapien. Aliquam scelerisque vulputate ex nec accumsan.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-10 col-lg-8">
                <div class="pasos-texto">
                    Quisque quis laoreet ante. Sed rutrum justo sit amet massa cursus, convallis semper nisi laoreet. Mauris in porta sapien. Aliquam scelerisque vulputate ex nec accumsan.
                </div>
            </div>
            <div class="col-xs-12 col-md-2 col-lg-4">
                <div class="circulo text-center">2</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-2 col-lg-4">
                <div class="circulo text-center">3</div>
            </div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                <div class="pasos-texto">
                    Quisque quis laoreet ante. Sed rutrum justo sit amet massa cursus, convallis semper nisi laoreet. Mauris in porta sapien. Aliquam scelerisque vulputate ex nec accumsan.
                </div>
            </div>
        </div>
    </div>


</section> <!-- FIN ID SERVICIOS -->
<section>
    <div class="parallax" id="sobreLaEmpresa">
        <div class="descripcionServicio">
            <h1>LockBox</h1>
            <h2>Tu servicio de confianza</h2>
            <h4>¡Olvídate de tener que ir a casa corriendo para recibir un paquete! Gracias a nuestro servicio, podrás volver a casa cuando quieras y recoger tu paquete por el camino</h4>
            <h4>Ofrecemos oficinas por toda la ciudad, solo tendrás que pedir en tu tienda que utilicen nuestro servicio. Será tan simple como recibir un código en tu móvil e introducirlo para abrir la taquilla. Sea la hora que sea.</h4>
        </div>
    </div>
</section>
<section class="sectionHeight form">
    <form class="well form-width" id="contactanos" action="{{ route('contactanos') }}" method="post">
        {{csrf_field()}}
        <h3>Si tiene alguna duda sobre nuestro servicio, no dude en contactarnos.</h3>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Tu nombre">
        </div>
        <div class="form-group">
            <label for="email">Email de contacto</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="texto">Problema o pregunta</label>
            <textarea class="form-control" id="texto" name="texto" aria-describedby="emailHelp" placeholder="Problema o pregunta" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="reset" id="clear" class="btn btn-error" value="Clear"/>

        <div id="errores"></div>
    </form>
</section>


@include('fijas.footer')


</body>