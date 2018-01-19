@extends('user.userMaster')

@section('contenido')
    @php
        $oficinas=\App\Models\Oficina::getOficinas();
    @endphp
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div id='map' style='width:1024px; height: 400px;'></div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/mapUsuario.js')}}"></script>
    <script>
        function getOficinasFromTemplate(){
            return @json($oficinas);
        }
    </script>
@endsection