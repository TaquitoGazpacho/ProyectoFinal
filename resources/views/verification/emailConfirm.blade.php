@extends('user.userMaster')
@section('css')
    <style>
        #wrapper{
            padding-left: 0px;
        }
    </style>
@endsection
@section('contenido')
Tu email se ha verificado correctamente. Haz click <a href="{{ url('/login')  }}">aquí</a> para logearte.
@endsection