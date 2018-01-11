@extends('user.userMaster')

@section('contenido')
    <div role="tabpanel" class="tab-pane" id="suscripcion">
        <div class="container">
            <div class="heading">
                <h2 style="color: #F96F00;"><strong>Planes a gusto de todos</strong></h2>
                <p>Nos adaptamos a tus necesidades</p>
            </div><!-- //end heading -->
            <form action="{{route('cambiarSuscripcion')}}" method="post">
                {{ csrf_field() }}
                <div class="row db-padding-btm db-attached">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="db-wrapper">
                            <div class="db-pricing-eleven db-bk-color-one">
                                <div class="price">
                                    10<sup>€</sup>
                                    <small>anuales</small>
                                </div>
                                <div class="type">
                                    Básico
                                </div>
                                <ul>

                                    <li><i class="glyphicon glyphicon-print"></i>1 taquilla</li>
                                    <li><i class="glyphicon glyphicon-time"></i>Usos ilimitados</li>
                                    <li><i class="glyphicon glyphicon-trash"></i>Tamaño taquillas:<br>Pequeña y mediana</li>
                                </ul>
                                <div class="pricing-footer">

                                    <input type="submit" name="button1" class="btn db-button-color-square btn-lg" value="Contrata Plan" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="db-wrapper">
                            <div class="db-pricing-eleven db-bk-color-two popular">
                                <div class="price">
                                    20<sup>€</sup>
                                    <small>anuales</small>
                                </div>
                                <div class="type">
                                    Premium
                                </div>
                                <ul>

                                    <li><i class="glyphicon glyphicon-print"></i>3 taquilla</li>
                                    <li><i class="glyphicon glyphicon-time"></i>Usos ilimitados</li>
                                    <li><i class="glyphicon glyphicon-trash"></i>Tamaño taquillas:<br>Peuqeña, mediana y grande</li>
                                </ul>
                                <div class="pricing-footer">

                                    <input type="submit" name="button2" class="btn db-button-color-square btn-lg" value="Contrata Plan" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="db-wrapper">
                            <div class="db-pricing-eleven db-bk-color-three">
                                <div class="price">
                                    150<sup>€</sup>
                                    <small>anuales</small>
                                </div>
                                <div class="type">
                                    Empresas
                                </div>
                                <ul>

                                    <li><i class="glyphicon glyphicon-print"></i>10 taquillas</li>
                                    <li><i class="glyphicon glyphicon-time"></i>Usos ilimitados</li>
                                    <li><i class="glyphicon glyphicon-trash"></i>Tamaños extra aparte de los regulares, bajo necesidad.</li>
                                </ul>
                                <div class="pricing-footer">

                                    <input type="submit" name="button3" class="btn db-button-color-square btn-lg" value="Contrata Plan" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- FIN PRECIO PLANES -->
    </div>
@endsection