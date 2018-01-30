@php
use App\Models\Empresa_reparto;
$empresas = Empresa_reparto::getEmpresas();
@endphp

@extends('fijas.adminMaster')

@section('pageHeader', 'Empresas de Transporte')
@section('pageDescription', 'Edición y registro de transportistas')

@section('contenido')
    <div class="box-body table-responsive">
        <table id="tablaEmpresa" class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Nif</th>
                <th>Editar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td id="{{$empresa->id}}_id">{{$empresa->id}}</td>
                    <td id="{{$empresa->id}}_nombre">{{$empresa->nombre}}</td>
                    <td id="{{$empresa->id}}_email">{{$empresa->email}}</td>
                    <td id="{{$empresa->id}}_telefono">{{$empresa->telefono}}</td>
                    <td id="{{$empresa->id}}_nif">{{$empresa->nif}}</td>
                    <td><button name="{{$empresa->id}}" class="btn btn-warning" onclick="mostrarEmpresa(event)" data-toggle="modal" data-target="#modalEditarEmpresa">Editar</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a onclick="limpiar()" class="btn btn-warning" data-toggle="modal" data-target="#modalEmpresa">Registrar Empresa</a>
        @include('admin.registroEmpresaReparto')
        {{--Modal--}}
        @include('admin.editarEmpresaReparto')
    </div>

@endsection

@section('js')
    <script>
        $(function () {
            $('#tablaEmpresa').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })
        })
    </script>
@endsection