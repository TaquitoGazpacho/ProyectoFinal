<div id="nav">
    <div class="navbar navbar-inverse navbar-static-top">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a id="menu-toggle" href="#" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="navbar-brand text-center" href="{{ route('index') }}">Lock<span>Box</span></a>
                </div>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="color"><a href="{{ route('index') }}">Home<span class="animacion-linea"></span></a></li>
                        <li class="color"><a href="{{ route('index') }}#servicios">Servicios<span class="animacion-linea"></span></a></li>
                        <li class="color"><a href="{{ route('index') }}#opiniones">Opiniones<span class="animacion-linea"></span></a></li>
                        <li class="color"><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa<span class="animacion-linea"></span></a></li>
                        <li class="color"><a href="{{ route('index') }}#contactanos">Contáctanos<span class="animacion-linea"></span></a></li>
                    </ul>

                    @if(Auth::guard('web')->check())
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="{{ asset(Auth::guard('web')->user()->image) }}" class="user-image " alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">{{ Auth::guard('web')->user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header hide-mobile">
                                        <img src="{{ asset(Auth::guard('web')->user()->image) }}" class="img-circle" alt="User Image">

                                        <p>
                                            {{ Auth::guard('web')->user()->name }}
                                            <small>{{ Auth::guard('web')->user()->email }}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="{{ route('home.pedidos') }}" class="btn btn-default btn-flat">Tu cuenta</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-error btn-flat">Cerrar sesión</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Regístrate</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>