@extends('user.userMaster')

@section('contenido')

    <div class="row row-eq-height">
        <div class="col-md-4 col-xs-8 col-sm-6 col-lg-4 col-xs-offset-2 col-lg-offset-2 col-md-offset-2 fondo-user borde-user-iz sombras">
            <img src="{{Auth::guard('web')->user()->image}}" alt="Foto" class="img img-responsive mobile-img img-centrada"/>

        </div>
        <div class="col-md-4 col-xs-8 col-sm-6 col-lg-4 col-xs-offset-2 col-sm-offset-0 text-center fondo-user borde-user-dr sombras">
            <div class="usu-nombre text-center">
                <h2>{{Auth::guard('web')->user()->name." ".Auth::guard('web')->user()->surname}}</h2>
            </div>
            <br/>
            <ul class="details text-left">
                <li><p><span class="fa fa-envelope-o text-center" style="width:50px;"></span>Email: {{Auth::guard('web')->user()->email}}</p></li>
                <li><p><span class="fa fa-phone text-center" style="width:50px;"></span>Phone: {{Auth::guard('web')->user()->phone}}</p></li>
                <li><p><span class="fa fa-venus-mars text-center" style="width:50px;"></span>Sex: {{Auth::guard('web')->user()->sex}}</p></li>
                <li><p><span class="fa fa-usd text-center" style="width:50px;"></span>Suscripción: {{Auth::guard('web')->user()->suscripcion->name }}</p></li>
                <li><p><span class="fa fa-map-marker text-center" style="width:50px;"></span>Oficina:
                        @if(Auth::guard('web')->user()->oficina_id)
                            {{Auth::guard('web')->user()->oficina->calle}} ({{Auth::guard('web')->user()->oficina->ciudad}})
                        @else
                            selecciona oficina
                        @endif
                    </p></li>
            </ul>
            <button id="editarPerfil" type="button" class="btn btn-warning" data-toggle="modal" data-target="#editProfile">Editar Perfil</button>
            <button onclick="cambOficiReset()" type="button" class="btn btn-warning" data-toggle="modal" data-target="#cambiarOficina">Cambiar Oficina</button>

            <!-- Modal -->
            <div id="editProfile" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Editar Perfil</h4>
                        </div>
                        <form enctype="multipart/form-data" action="{{ route('editarUsuario') }}" method="post">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control inputText" name="nombre" id="nombre" value="{{Auth::guard('web')->user()->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input type="text" class="form-control inputText" name="apellido" id="apellido" value="{{Auth::guard('web')->user()->surname}}">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono:</label>
                                    <input type="number" class="form-control inputText" name="telefono" id="telefono" placeholder="Teléfono" value="{{Auth::guard('web')->user()->phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="sexo">Sexo:</label><br/>
                                    <div>
                                        <input type="radio" class="radio-btn" id="check1" value="Masculino" name="sexo"/>
                                        <label for="check1"><span><i class="fa fa-circle" aria-hidden="true"></i></span>Masculino</label>
                                    </div>

                                    <div>
                                        <input type="radio" class="radio-btn" id="check2" value="Femenino" name="sexo"/>
                                        <label for="check2"><span><i class="fa fa-circle" aria-hidden="true"></i></span>Femenino</label>
                                    </div>

                                    <div>
                                        <input type="radio" class="radio-btn" id="check3" value="Otro" name="sexo" checked/>
                                        <label for="check3"><span><i class="fa fa-circle" aria-hidden="true"></i></span>Otro</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="avatar">Usar Avatar:</label>
                                    <div id="avatar"></div>
                                    <input type="radio" class="hidden" id="avatarForm" name="avatar" value="none" checked/>
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Imagen de Perfil:</label>
                                    <label for="imagen" class="input-file-custom"><i class="fa fa-cloud-upload"></i>Elegir Imagen</label>
                                    <input type="file" name="imagen" id="imagen">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Submit" class="btn btn-warning"/>
                                <input type="reset" name="reset" value="Reset" class="btn btn-error" />
                                <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                        @if ($errors->any())
                            <script>
                                $('#profile').show();
                                $("#editProfile").modal();
                            </script>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>
            </div>


            <div id="cambiarOficina" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Editar Perfil</h4>
                        </div>
                        <form enctype="multipart/form-data" action="{{route('editarUsuario.oficina')}}" method="post">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{--<div class="form-group">--}}
                                        <select id="paisOficinas" class="form-control select2">
                                            {{ $pais="" }}
                                            <option selected disabled> -- Elige País -- </option>
                                            @foreach($oficinas as $oficina)
                                                @if($pais != $oficina->pais)
                                                    {{$pais=$oficina->pais}}
                                                    <option value="{{$oficina->pais}}">{{$oficina->pais}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select id="ciudadOficinas" class="form-control select2" disabled="">
                                            <option selected disabled> -- Elige Ciudad -- </option>
                                        </select>
                                        {{--</div>--}}
                                    </div>
                                </div>

                                <div class="box-body table-responsive">
                                    <table id="calleOficinas" class="hidden table table-hover text-left">
                                        <thead>
                                        <tr>
                                            <th>Calle</th>
                                            <th>Número</th>
                                            <th>CP</th>
                                            <th>Selecciona</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Submit" class="btn btn-warning"/>
                                <input type="reset" name="reset" value="Reset" class="btn btn-error" />
                                <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    @php
        $sex = Auth::guard('web')->user()->sex;
    @endphp
@endsection

@section('js')
    <script src="{{asset('js/user.js')}}"></script>

    <script>
        $('.select2').select2();

        ensenarImagenes(chicoOChica("{{Auth::guard('web')->user()->sex}}"));

        var oficinas;
        $('#editarPerfil').on('click', function(){
            var sex="#user";
            sex += "@php Print(Auth::guard('web')->user()->sex); @endphp";
            $(sex).prop('checked', true);
        });

        $('#paisOficinas').change(function(event){
            $("#ciudadOficinas").removeAttr("disabled");
            $("#ciudadOficinas").empty();
            oficinas = @json($oficinas);
            var ciudad="";
            $('<option/>', {
                disabled: true,
                selected: true,
                text: "-- Elige Ciudad --"
            }).appendTo($("#ciudadOficinas"));
            $(oficinas).each(function(index, oficina){
                if (event.target.value == oficina.pais) {
                    if (ciudad != oficina.ciudad) { //ESTO FUNCIONA PORQUE VIENEN ORDENADOS DESDE LA QUERY
                        ciudad = oficina.ciudad;

                        $('<option/>', {
                            value: oficina.ciudad,
                            text: oficina.ciudad
                        }).appendTo($("#ciudadOficinas"));
                    }
                }
            });
        });

        $('#ciudadOficinas').change(function(event){
            $("#calleOficinas tbody").empty();
            $("#calleOficinas").removeClass("hidden");
            var ciudad = event.target.value;
            $(oficinas).each(function(index, oficina){
                if (ciudad == oficina.ciudad){
                    ($("#calleOficinas tbody")).append("<tr>" +
                        "<td>"+oficina.calle+"</td>"+
                        "<td>"+oficina.num_calle+"</td>"+
                        "<td>"+oficina.cp+"</td>"+
                        "<td><input type='radio' name='ciudad' value='"+oficina.id+"'/></td>"+
                        "</tr>");
                }
            });
        });




    </script>
@endsection