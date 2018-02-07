{{--<title>404 Error</title>--}}
{{--<meta charset="UTF-8"/>--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<!-- CSS -->--}}
{{--<link rel="stylesheet" href={{asset("bootstrap/css/bootstrap.min.css")}}>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">--}}

{{--<html>--}}
    {{--<head></head>--}}

    {{--<body class="background404">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="error-template">--}}
                        {{--<h1>--}}
                            {{--Ups!</h1>--}}
                        {{--<h2>--}}
                            {{--404 Not Found</h2>--}}
                        {{--<div class="error-details">--}}
                            {{--Lo sentimos, ha ocurrido un error, la página que estás buscando no existe!--}}
                        {{--</div>--}}
                        {{--<div class="error-actions">--}}
                            {{--<a href="{{ route('index') }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>--}}
                                {{--Llévame a inicio </a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}
<title>404 Error</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link rel="stylesheet" href={{asset("bootstrap/css/bootstrap.min.css")}}>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<html>
<head></head>

<body class="background404">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Ups!</h1>
                <h2>404 Not Found</h2>
                <div class="error-details">
                    <p>Lo sentimos, ha ocurrido un error. ¡La página que estás buscando no existe!</p>
                    <p>¡Definitivamente no vemos esa página!</p>
                </div>
                <div class="error-actions">
                    <a href="{{ route('index') }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Llévame a inicio </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>