@extends('user.userMaster')

@section('contenido')
    @php
        $oficinas=\App\Models\Oficina::getOficinas();
    @endphp
    <div class="hidden-lg hidden-md col-xs-offset-2 col-sm-offset-4 ">
        <h1>Oficinas</h1>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div id='map' style="width:100%; min-height: 400px; max-height: 600px;"></div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/mapUsuario.js')}}"></script>
    <script>
        //La llamada se hace desde mapUsuario.js
        function getOficinasFromTemplate(){
            return @json($oficinas);
        }
    </script>
@endsection