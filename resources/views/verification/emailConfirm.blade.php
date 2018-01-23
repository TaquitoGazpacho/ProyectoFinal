@extends('user.userMaster')
@section('css')
    <style>
        #wrapper{
            padding-left: 0px;
        }
    </style>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Verifica</div>

                <div class="panel-body">
                    <h3>Tu email se ha verificado correctamente. Haz click <a href="{{ url('/login')  }}">aquí</a> para logearte.</h3>
                </div>
            </div>
        </div>
    </div>
@endsection