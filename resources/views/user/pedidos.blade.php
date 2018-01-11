@php
    use App\Models\Pedido;
    $pedidos = Pedido::getPedidos();

@endphp

@extends('user.userMaster')
@section('contenido')

    <h2>{{Auth::guard('web')->user()->name." ".Auth::guard('web')->user()->id}}</h2>
    <div class="box-body table-responsive">
        <table id="tablaPedidos" class="table table-hover">
            <thead>
            <tr>
                <th>Numero Pedido</th>
                <th>Estado</th>
                <th>Recogido</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td id="pedido_{{$pedido->id}}_numero">{{$pedido->numero_pedido}}</td>
                    <td id="pedido_{{$pedido->id}}_estado">{{$pedido->estado}}</td>
                    <td id="pedido_{{$pedido->id}}_recogido">{{$pedido->recogido}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection