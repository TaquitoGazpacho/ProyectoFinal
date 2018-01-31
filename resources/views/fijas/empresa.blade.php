@php

    use App\Models\Reparto;

    $repartos = Reparto::getRepartos();
@endphp
@extends('user.userMaster')
@section('css')
    <style>
        #wrapper{
            padding-left: 0;
        }
    </style>
@endsection
@section('contenido')
    <div>
        <!-- Default panel contents -->
        <div>
            <h3 class="text-center">Repartos de {{ Auth::guard('empresa')->user()->nombre }}</h3>
        </div>
        <!-- Table -->
        <div class="box-body table-responsive">
            <table id="tablaEmpresa" class="table table-hover">
                <thead>
                    <tr>
                        <th>Pais</th>
                        <th>Direccion</th>
                        <th>CP</th>
                        <th>Taquilla</th>
                        <th>Cliente</th>
                        <th>Clave Repartidor</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($repartos as $reparto)
                        <tr>
                            <td>{{ $reparto->oficina->pais }}</td>
                            <td>{{ $reparto->oficina->calle.", ".$reparto->oficina->num_calle }}</td>
                            <td>{{ $reparto->oficina->cp }}</td>
                            <td>{{ $reparto->taquilla->numero_taquilla }}</td>
                            <td>{{ $reparto->usuario->name }}
                                {{ "(".$reparto->usuario->phone.")" }}
                            </td>
                            <td>{{ $reparto->clave_repartidor }}</td>
                            <td>
                                <select class="select2" name="{{$reparto->id}}" id="selectEstado" onchange='cambiarEstado(event,"{{route('empresa.cambiarEstado')}}", "{{csrf_token()}}")'>
                                    <option @if($reparto->estado=="Procesando") selected @endif>Procesando</option>
                                    <option @if($reparto->estado=="Enviado") selected @endif>Enviado</option>
                                    <option @if($reparto->estado=="Depositado") selected @endif>Depositado</option>
                                    <option @if($reparto->estado=="Recogido") selected @endif>Recogido</option>
                                </select>
                            </td>
                            <td>{{ $reparto->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log($(".select2"));
        $(function () {
            $('#tablaEmpresa').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })
        });

        function cambiarEstado(event, url, token){
            $.post(url, {_token: token, reparto_id: event.target.name, estado: event.target.value}, function(){
                $.notify('Estado de pedido actualizado correctamente', 'success');
            })
        }
    </script>
@endsection