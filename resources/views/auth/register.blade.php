@extends('user.userMaster')

@section('css')
    <style>
        #wrapper{
            padding-left: 0px;
        }
    </style>
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form id="registerForm" class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name *</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label for="surname" class="col-md-4 control-label">Surname *</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="surname" class="col-md-4 control-label">Phone *</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Sex</label>

                                <div class="col-md-6">
                                    {{--<input id="sex" type="text" class="form-control" name="sex" value="{{ old('sex') }}" autofocus>--}}
                                    <label><input id="check1" type="radio" name="sex" value="Masculino" > Masculino</label><br>
                                    <label><input id="check2" type="radio" name="sex" value="Femenino"> Femenino</label><br>
                                    <label><input id="check3" type="radio" name="sex" value="Otro" checked> Otro</label>
                                    @if ($errors->has('sex'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sex') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address *</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password *</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password *</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>
                            {{--<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">--}}
                                {{--<div class="col-md4">--}}
                                    {{--{!! Recaptcha::render() !!}--}}
                                    {{--@if ($errors->has('g-recaptcha-response'))--}}
                                        {{--<span class="help-block">--}}
                                                {{--<strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
                                            {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                            <div id="erroresRegister"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        window.onload = addEv;
        function addEv() {
            document.getElementById("registerForm").addEventListener('submit', validateRegister);
        }
        function validateRegister(event) {
            var elementos = document.getElementById("registerForm").elements;
            var errores = "";
            for (var i=0;i<elementos.length;i++){
                var eInput = elementos[i];
                if (eInput.name === "name"){
                    if (eInput.value.length === 0) {
                        errores += "<p>Debe introcucir su Nombre</p>";
                    }
                }
                if (eInput.name === "surname"){
                    if (eInput.value.length === 0) {
                        errores += "<p>Debe introcucir su Apellido</p>";
                    }
                }
                if (eInput.name === "phone"){
                    if (eInput.value.length === 0 ){
                        errores += "<p>Introduzca un número de teléfono</p>";
                    }
                    else if (eInput.value.length != 9 ){
                        errores += "<p>Introduzca un número de teléfono correcto</p>";
                    }
                }
                if (eInput.name === "email"){
                    if (eInput.value.length === 0) {
                        errores += "<p>Debe introcucir su Email</p>";
                    }
                }
                if (eInput.name === "password"){

                    if (eInput.value.length === 0 ){
                        errores += "<p>Debe introducir su constraseña</p>";
                    }else if(eInput.value.length < 6){
                        errores += "<p>La contraseña debe tener un mínimo de 6 caracteres</p>";
                    }
                }
                if (eInput.name === "password_confirmation"){
                    if (eInput.value.length === 0 ){
                        errores += "<p>Debe repetir su contraseña</p>";
                    }else if(document.getElementsByName("password")[0].value !== document.getElementsByName("password_confirmation")[0].value){
                        errores += "<p>Las contraseñas deben coincidir</p>";
                    }
                }

                if(errores!=""){
                    event.preventDefault();
                    document.getElementById('erroresRegister').innerHTML="<div class='alert alert-danger'>"+errores+"</div>";
                }


            }

        }






    </script>





@endsection
