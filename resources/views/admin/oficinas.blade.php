@php

    use App\Models\Oficina;

    $oficinas = Oficina::getOficinas();

@endphp

@extends('fijas.adminMaster')

@section('pageHeader', 'Oficinas')
@section('pageDescription', 'Edición y registro de oficinas')

@section('contenido')

    <div class="box-body table-responsive">
        <form action="{{route('eliminarOficinas')}}" method="post">
            {{ csrf_field() }}
            <table id="tablaOficina" class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>Número</th>
                    <th>Coord</th>
                    <th>Cant. Taquillas</th>
                    <th>Añadir Taquillas</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($oficinas as $oficina)
                    <tr>
                        <td id="oficina_{{$oficina->id}}_id">{{ $oficina->id }}</td>
                        <td id="oficina_{{$oficina->id}}_id">{{ $oficina->pais }}</td>
                        <td id="oficina_{{$oficina->id}}_ciudad">{{ $oficina->ciudad }}</td>
                        <td id="oficina_{{$oficina->id}}_calle">{{ $oficina->calle }}</td>
                        <td id="oficina_{{$oficina->id}}_num">{{ $oficina->num_calle }}</td>
                        <td id="oficina_{{$oficina->id}}_num">{{ $oficina->lat.", ".$oficina->alt }}</td>
                        <?php
                            $ofi = new \App\Models\Oficina();
                            $ofi->setId($oficina->id);
                        ?>
                        <td>{{ sizeof($ofi->taquilla) }}</td>
                        <td><a href="{{ route( 'listarTaquillas', ['id' => $oficina->id]) }}" class="btn btn-default">Listar taquillas</a></td>
                        <td><a data-toggle="modal" name="{{ $oficina->id }}" data-target="#editarOficinaDiv" class="btn btn-warning" onclick="mostrarOficina(event)">Editar</a></td>
                        <td><input type="checkbox" name="delete[]" value="{{$oficina->id}}" /></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-warning" data-toggle="modal" data-target="#modalOficina">Registrar Oficina</a>
            <input type="submit" value="Eliminar" class="btn btn-danger pull-right"/>
        </form>

        @include('admin.registroOficinas')
        @include('admin.editarOficina')
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            $('#tablaOficina').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })
        });

        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
    </script>


@endsection