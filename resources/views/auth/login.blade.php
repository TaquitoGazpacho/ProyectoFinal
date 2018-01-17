@extends('fijas.master')

@section('section')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form id="loginForm" class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

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
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
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
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                            <div id="erroresLogin"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (alert()->ready())
        <script>
            sweetAlertSimple("{!! alert()->message() !!}", "{!! alert()->option('text') !!}", "{!! alert()->type() !!}");
        </script>
    @endif


    <script>
        window.onload = addEv;
        function addEv() {
            document.getElementById("loginForm").addEventListener('submit', validateLogin);
        }
        function validateLogin(event) {
            var elementos = document.getElementById("loginForm").elements;
            var errores = "";
            for (var i=0;i<elementos.length;i++){
                var eInput = elementos[i];
                if (eInput.name === "email"){
                    if (eInput.value.length === 0) {
                        errores += "<p>Debe introcucir su Email</p>";
                    }
                }
                if (eInput.name === "password"){
                    if (eInput.value.length === 0 ){
                        errores += "<p>Debe introducir su constraseña</p>";
                    }
                }

                if(errores!=""){
                    event.preventDefault();
                    document.getElementById('erroresLogin').innerHTML="<div class='alert alert-danger'>"+errores+"</div>";
                }


            }

        }
    </script>




@endsection




