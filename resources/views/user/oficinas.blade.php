@extends('user.userMaster')

@section('contenido')
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div id='map' style='width:1024px; height: 400px;'></div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoidGFxdWl0b2dhenBhY2hvIiwiYSI6ImNqY2xwMDU0OTA5b28zM3JvNG95OWZlM3kifQ.y-N-aKL1KQeSLJLY6C2mFg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v10'
        });
    </script>
@endsection