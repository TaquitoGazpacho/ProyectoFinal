@php
    use App\Models\Pedido;
    $pedidos = Pedido::getPedidosPorUsuario(Auth::guard('web')->user()->id);
    $oficina = new \App\Models\Oficina();
@endphp

@extends('user.userMaster')
@section('contenido')

    <h2>{{Auth::guard('web')->user()->name." ".Auth::guard('web')->user()->surname}}</h2>
    <div class="box-body table-responsive">
        <table id="tablaPedidos" class="table table-hover">
            <thead>
            <tr>
                <th>Numero Pedido</th>
                <th>Estado</th>
                <th>Numero Taquilla</th>
                <th>Oficina</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedidos as $pedido)
                <tr name = "ped">
                    <td id="pedido_{{$pedido->id}}_numero">{{$pedido->numero_pedido}}</td>
                    <td id="pedido_{{$pedido->id}}_estado">
                        @php
                            if($pedido->estado=="Enviado")
                            {
                                $p="60";
                            }elseif($pedido->estado=="Recibido"){
                                $p="80";

                            }else{
                                $p="100";
                            }
                        @endphp
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$p}}%;">
                                {{$pedido->estado}}
                            </div>
                        </div>
                    </td>
                    <td id="pedido_{{$pedido->id}}_taquilla">{{$pedido->numero_taquilla}}</td>
                    <td id="pedido_{{$pedido->id}}_recogido">{{$oficina->getOficina($pedido->oficina_id).$oficina->getCalle()." ".$oficina->getNumCalle().", ".$oficina->getCP()." ".$oficina->getCiudad()." (".$oficina->getPais().")"}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
