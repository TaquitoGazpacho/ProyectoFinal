@php
    use App\Models\Reparto;
    $pedidos = Reparto::getRepartosUsuario(Auth::guard('web')->user()->id);
    $oficina = new \App\Models\Oficina();
@endphp

@extends('user.userMaster')
@section('contenido')

    <h2>Pedidos</h2>
    <div class="box-body table-responsive">
        <table id="tablaPedidos" class="table table-hover">
            <thead>
            <tr>
                <th>Numero Pedido</th>
                <th>Estado</th>
                <th>Numero Taquilla</th>
                <th>Oficina</th>
                <th>Clave</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedidos as $pedido)
                <tr name = "ped">
                    <td id="pedido_{{$pedido->id}}_numero">{{$pedido->id}}</td>
                    <td id="pedido_{{$pedido->id}}_estado">
                        @php
                            $estado=['Enviado', 'Depositado', 'Recogido'];
                            $i=rand(0,2);
                            if($estado[$i]=="Enviado")
                            {
                                $std="33";
                            }elseif($estado[$i]=="Depositado"){
                                $std="66";

                            }else{
                                $std="100";
                            }
                        @endphp
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$std}}%;">
                                {{$estado[$i]}}
                            </div>
                        </div>
                    </td>
                    <td id="pedido_{{$pedido->id}}_taquilla">{{$pedido->taquilla->numero_taquilla}}</td>
                    <td id="pedido_{{$pedido->id}}_recogido">{{$pedido->oficina->calle.", ".$pedido->oficina->num_calle." (".$pedido->oficina->pais.")"}}</td>
                    <td id="pedido_{{$pedido->id}}_clave">{{$pedido->clave_usuario}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
