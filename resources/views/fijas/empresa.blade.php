@php

    use App\Models\Reparto;

    $repartos = Reparto::getRepartos();
@endphp
@extends('user.userMaster')
@section('css')
    <style>
        #wrapper{
            padding-left: 0px;
        }
    </style>
@endsection
@section('contenido')
    <div>
        <!-- Default panel contents -->
        <div>
            <h3>Repartos de {{ Auth::guard('empresa')->user()->nombre }}</h3>
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
                            <td>{{ $reparto->estado }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                'info'        : true,
                'autoWidth'   : false
            })
        });
    </script>
@endsection