@php

    use App\Models\Oficina;

    $oficinas = Oficina::getOficinas();

@endphp

@extends('fijas.adminMaster')

@section('pageHeader', 'Oficinas')
@section('pageDescription', 'Edición y registro de oficinas')

@section('contenido')
    <form action="{{route('eliminarOficinas')}}" method="post">
        {{ csrf_field() }}
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ciudad</th>
                <th>Calle</th>
                <th>Número</th>
                <th>Cant. Taquillas</th>
                <th>Añadir Taquillas</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($oficinas as $oficina)
                <tr>
                    <td>{{ $oficina->id }}</td>
                    <td>{{ $oficina->ciudad }}</td>
                    <td>{{ $oficina->calle }}</td>
                    <td>{{ $oficina->num_calle }}</td>
                    <?php $ofi = new \App\Models\Oficina();
                    $ofi->setId($oficina->id);
                    ?>
                    <td>{{ sizeof($ofi->taquilla) }}</td>
                    <td><a href="{{ route( 'listarTaquillas', ['id' => $oficina->id]) }}" class="btn btn-default">Listar taquillas</a></td>
                    <td><a href="{{ route('editarOficina', ['id' => $oficina->id ]) }}" class="btn btn-default">Editar</a></td>
                    <td><input type="checkbox" name="delete[]" value="{{$oficina->id}}" /></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-warning" data-toggle="modal" data-target="#modalOficina">Registrar Oficina</a>
        <input type="submit" value="Eliminar" class="btn btn-error pull-right"/>
    </form>
    @include('fijas.registroOficinas')
@endsection