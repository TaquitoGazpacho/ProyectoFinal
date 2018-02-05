@php
    use App\Models\Reparto;
    $pedidos = Reparto::getRepartosUsuario(Auth::guard('web')->user()->id);
    $oficina = new \App\Models\Oficina();
@endphp

@extends('user.userMaster')
@section('contenido')
    <div class="box-body table-responsive sombras bordes-redondeados-tabla">
        <table id="tablaPedidos" class="table table-hover">
            <thead>
            <tr>
                <th>Numero Pedido</th>
                <th>Estado</th>
                <th>Numero Taquilla</th>
                <th>Oficina</th>
                <th>Clave</th>
                <th>Hora de actualización</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedidos as $pedido)
                <tr name = "ped">
                    <td id="pedido_{{$pedido->id}}_numero">{{$pedido->id}}</td>
                    <td id="pedido_{{$pedido->id}}_estado">
                        @php
                            if ($pedido->estado=="Procesando"){
                                $std="25";
                            }
                            elseif($pedido->estado=="Enviado")
                            {
                                $std="50";
                            }elseif($pedido->estado=="Depositado"){
                                $std="75";

                            }else{
                                $std="100";
                            }
                        @endphp
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$std}}%;">
                                {{$pedido->estado}}
                            </div>
                        </div>
                    </td>
                    <td id="pedido_{{$pedido->id}}_taquilla">{{$pedido->taquilla->numero_taquilla}}</td>
                    <td id="pedido_{{$pedido->id}}_recogido">{{$pedido->oficina->calle.", ".$pedido->oficina->num_calle." (".$pedido->oficina->pais.")"}}</td>
                    <td id="pedido_{{$pedido->id}}_clave">{{$pedido->clave_usuario}}</td>
                    <td id="pedido_{{$pedido->id}}_hora">{{$pedido->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            $('#tablaPedidos').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })
        });
    </script>
@endsection