@extends('user.userMaster')

@section('contenido')
    <div class="hidden-lg hidden-md col-xs-12 col-sm-12 text-center">
        <h1>Tiendas Asociadas</h1>
    </div>
    <br/>
    <div class="tiendas contenido">
        <div class="row">
            <div class="col-xs-8 col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-0">
                <img class="img img-responsive" src="{{asset('img/tiendas/libreria.png')}}"/>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                <h2>Librería Electricsheep</h2>
                <p>Libreria Especializada en los autores más reconocidos de la literatura de ficción. Si quieres uno de estos libros, no hay mejor sitio que este para encontrarlos.</p>
                <p class="text-right"><a href="http://electricsheep.es/libreria">acceder</a></p>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-xs-8 col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-0">
                <img class="img img-responsive" src="{{asset('img/tiendas/amazon.png')}}"/>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                <h2>Amazon</h2>
                <p>Quieras lo que quieras podrás encontrarlo en esta tienda. No importa si es para el hogar, material deportivo o regalos para un ser querido, aquí podras encontrarlo.</p>
                <p class="text-right"><a href="https://amazon.es">acceder</a></p>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-xs-8 col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-0">
                <img class="img img-responsive" src="{{asset('img/tiendas/fnac.png')}}"/>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                <h2>Fnac</h2>
                <p>Si estas buscando aparatos tecnológicos, libros, objetos de papelería... Cualquier cosa de uso doméstico o recreacional, podrás encontrarla fácilmente en esta tienda.</p>
                <p class="text-right"><a href="http://fnac.es">acceder</a></p>
            </div>
        </div>
    </div>
@endsection