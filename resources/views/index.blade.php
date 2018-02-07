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
                @if(!Auth::guard('web')->check())
                <a class="btn btn-default btn-lg" href='{{ route("register") }}'>únete</a>
                @endif
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
    <br/>
    <br/>
    <br/>
    <div class="container">
        <div class="row text-center">
            <h2 style="color: #F96F00;">Servicios</h2>
        </div>
        <br/>
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
    <br/>
    <br/>
    <br/>
    <hr id="opiniones">
    <br/>
    <br/>
    <br/>
    <br/>
    <!-- PASOS A SEGUIR PARA LA COMPRA -->
    <div class="container pasos">
        <div class="row aligner">
            <div class="col-xs-12 col-md-2 col-lg-3 col-lg-offset-1">
                <div class="circulo text-center">1</div>
            </div>
            <div class="col-xs-12 col-md-10 col-lg-8 eq-line">
                <div class="pasos-texto separador">
                    Compra por internet y selecciona nuestro servicio para taquillas públicas o privadas.
                </div>
            </div>
        </div>
        <br/>
        <div class="row aligner">
            <div class="col-xs-12 col-md-10 col-lg-8">
                <div class="pasos-texto separador-lf pull-right">
                    Una vez depositado tu paquete, recibirás un correo con una clave única con la que solamente tú podrás abrir la taquilla.
                </div>
            </div>
            <div class="col-xs-12 col-md-2 col-lg-3">
                <div class="circulo text-center">2</div>
            </div>
        </div>
        <br/>
        <div class="row aligner">
            <div class="col-xs-12 col-md-2 col-lg-3 col-lg-offset-1">
                <div class="circulo text-center">3</div>
            </div>
            <div class="col-xs-12 col-md-10 col-lg-8">
                <div class="pasos-texto separador">
                    Nuestras oficinas están abiertas las 24h para que puedas recoger tu pedido en cualquier momento y a cualquier hora del dia.
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
</section> <!-- FIN ID SERVICIOS -->
<section>
    <div class="parallax" id="sobreLaEmpresa">
        <div class="descripcionServicio">
            <h2>Tu servicio de confianza</h2>
            <hr/>
            <h4>A parte de disponer de distintas oficinas repartidas por la ciudad, también ofrecemos la opción de instalarte una taquilla en tu portal. Mediante nuestro servicio, no tendrás que perder tiempo y cambiar tus planes para recibir un paquete. Lo único que tienes que hacer es solicitar nuestro servicio como método de entrega e ir al punto de recogida deseado.</h4>
        </div>
    </div>
</section>
<section class="sectionHeight form">
    <form class="well form-width" id="contactanos" action="{{ route('contactanos') }}" method="post">
        {{csrf_field()}}
        <h3 class="text-center">Consúltanos cualqueir duda</h3>
        <hr/>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Introduce tu nombre">
        </div>
        <div class="form-group">
            <label for="email">Email de contacto</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduce tu email" required>
        </div>
        <div class="form-group">
            <label for="texto">Problema o pregunta</label>
            <textarea class="form-control" id="texto" name="texto" aria-describedby="emailHelp" placeholder="Consúltanos lo que quieras" required></textarea>
            <small id="emailHelp" class="form-text text-muted">No compartimos tu información con terceros.</small>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="reset" id="clear" class="btn btn-error pull-right" value="Limpiar formulario"/>

        <div id="errores"></div>
    </form>
</section>


@include('fijas.footer')


</body>