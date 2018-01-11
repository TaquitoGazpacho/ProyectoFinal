@php
    use App\Models\User;
    $usuarios = User::getUsuarios();
@endphp

@extends('fijas.adminMaster')

@section('pageHeader', 'Usuarios')
@section('pageDescription', 'Edicion de Usuarios')

@section('contenido')
    {{--<table id="example2" class="table table-bordered table-hover">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>ID</th>--}}
            {{--<th>Nombre</th>--}}
            {{--<th>Apellido</th>--}}
            {{--<th>Email</th>--}}
            {{--<th>Teléfono</th>--}}
            {{--<th>Sexo</th>--}}
            {{--<th>Suscripción</th>--}}
            {{--<th>Oficina</th>--}}
            {{--<th>Editar</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($usuarios as $usuario)--}}
            {{--<tr>--}}
                {{--<td id="usuario_{{$usuario->id}}_id">{{$usuario->id}}</td>--}}
                {{--<td id="usuario_{{$usuario->id}}_nombre">{{$usuario->name}}</td>--}}
                {{--<td id="usuario_{{$usuario->id}}_apellido">{{$usuario->surname}}</td>--}}
                {{--<td id="usuario_{{$usuario->id}}_email">{{$usuario->email}}</td>--}}
                {{--<td id="usuario_{{$usuario->id}}_telefono">{{$usuario->phone}}</td>--}}
                {{--<td id="usuario_{{$usuario->id}}_sexo">{{$usuario->sex}}</td>--}}
                {{--<td id="usuario_{{$usuario->id}}_suscripcion">{{$usuario->suscripcion['name']}}</td>--}}
                {{--<td id="usuario">--}}
                    {{--@if(isset($usuario->oficina))--}}
                        {{--{{$usuario->oficina['calle']." ".$usuario->oficina['num_calle']." (".$usuario->oficina['ciudad'].")"}}--}}
                    {{--@else--}}
                        {{--<spam class="text-muted">sin oficina predeterminada</spam>--}}
                    {{--@endif--}}
                {{--</td>--}}
                {{--<td><button name="{{$usuario->id}}" onclick="editarUsuario(event)" class="btn btn-default" data-toggle="modal" data-target="#editarUsuario">Editar</button></td>--}}
                {{--<td><button name="{{$usuario->id}}" onclick="mostrarUsuario(event)" class="btn btn-warning" data-toggle="modal" data-target="#editarUsuario">Editar</button></td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
        {{--<tfoot>--}}
        {{--<tr>--}}
            {{--<th>ID</th>--}}
            {{--<th>Nombre</th>--}}
            {{--<th>Apellido</th>--}}
            {{--<th>Email</th>--}}
            {{--<th>Teléfono</th>--}}
            {{--<th>Sexo</th>--}}
            {{--<th>Suscripción</th>--}}
            {{--<th>Oficina</th>--}}
            {{--<th>Editar</th>--}}
        {{--</tr>--}}
        {{--</tfoot>--}}
    {{--</table>--}}

    <div class="box-body table-responsive">
        <table id="tablaUsuarios" class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Sexo</th>
                <th>Suscripción</th>
                <th>Oficina</th>
                <th>Editar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td id="usuario_{{$usuario->id}}_id">{{$usuario->id}}</td>
                    <td id="usuario_{{$usuario->id}}_nombre">{{$usuario->name}}</td>
                    <td id="usuario_{{$usuario->id}}_apellido">{{$usuario->surname}}</td>
                    <td id="usuario_{{$usuario->id}}_email">{{$usuario->email}}</td>
                    <td id="usuario_{{$usuario->id}}_telefono">{{$usuario->phone}}</td>
                    <td id="usuario_{{$usuario->id}}_sexo">{{$usuario->sex}}</td>
                    <td id="usuario_{{$usuario->id}}_suscripcion">{{$usuario->suscripcion['name']}}</td>
                    <td id="usuario">
                        @if(isset($usuario->oficina))
                            {{$usuario->oficina['calle']." ".$usuario->oficina['num_calle']." (".$usuario->oficina['ciudad'].")"}}
                        @else
                            <spam class="text-muted">sin oficina predeterminada</spam>
                        @endif
                    </td>
                    {{--<td><button name="{{$usuario->id}}" onclick="editarUsuario(event)" class="btn btn-default" data-toggle="modal" data-target="#editarUsuario">Editar</button></td>--}}
                    <td><button name="{{$usuario->id}}" onclick="mostrarUsuario(event)" class="btn btn-warning" data-toggle="modal" data-target="#editarUsuario">Editar</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->

    @include('admin.editarUsuario')
@endsection

@section('js')
    <script>
        $(function () {
            $('#tablaUsuarios').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection