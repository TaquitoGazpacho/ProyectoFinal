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
        <div class="text-center">
            <h1>REGISTRO</h1>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body sombras">
                        <form id="registerForm" class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="panel-form">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-12 control-label">Nombre <label id="asterisco">*</label></label>
                                    <br/>
                                    <div class="col-md-12 text-center">
                                        <input id="name" type="text" class="inputText" name="name" value="{{ old('name') }}" autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-12 control-label">Apellido <label id="asterisco">*</label></label>
                                    <br/>
                                    <div class="col-md-12 text-center">
                                        <input id="surname" type="text" class="inputText" name="surname" value="{{ old('surname') }}" autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-12 control-label">Teléfono <label id="asterisco">*</label></label>
                                    <br/>
                                    <div class="col-md-12 text-center">
                                        <input id="phone" type="text" class="inputText" name="phone" value="{{ old('phone') }}" autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                    <label for="sex" class="col-md-12 control-label">Género</label>
                                    <br/>
                                    <br/>
                                    <div class="col-md-12">
                                        <div>
                                            <input type="radio" class="radio-btn" id="check1" value="Masculino" name="sex"/>
                                            <label for="check1"><span><i class="fa fa-circle" aria-hidden="true"></i></span>Masculino</label>
                                        </div>

                                        <div>
                                            <input type="radio" class="radio-btn" id="check2" value="Femenino" name="sex"/>
                                            <label for="check2"><span><i class="fa fa-circle" aria-hidden="true"></i></span>Femenino</label>
                                        </div>

                                        <div>
                                            <input type="radio" class="radio-btn" id="check3" value="Otro" name="sex" checked/>
                                            <label for="check3"><span><i class="fa fa-circle" aria-hidden="true"></i></span>Otro</label>
                                        </div>

                                        @if ($errors->has('sex'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sex') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-12 control-label">Email <label id="asterisco">*</label></label>
                                    <br/>
                                    <div class="col-md-12 text-center">
                                        <input id="email" type="email" class="inputText" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-12 control-label">Contraseña <label id="asterisco">*</label></label>
                                    <br/>
                                    <div class="col-md-12 text-center">
                                        <input id="password" type="password" class="inputText" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-12 control-label">Confirmar Contraseña <label id="asterisco">*</label></label>

                                    <div class="col-md-12 text-center">
                                        <input id="password-confirm" type="password" class="inputText" name="password_confirmation">
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
                                <br/>
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            Registrarse
                                        </button>
                                    </div>
                                </div>

                                <div id="erroresRegister"></div>
                            </div>
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

@section('js')
    <script>
        $('.mobile-area').removeClass('mobile-area');
    </script>
@endsection