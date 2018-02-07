@extends('user.userMaster')

@section('contenido')
    <div class="hidden-lg hidden-md col-xs-offset-1 col-sm-offset-5 ">
        <h1>Suscripción</h1>
    </div>
    <form  action="{{route('cambiarSuscripcion')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-lg-offset-0 col-md-offset-0">
                <div class="pricingTable azul1">
                    <div class="pricingTable-header">
                        <span class="price-value">10<span class="currency">€/mes</span></span>
                        <h3 class="title">Básico</h3>
                    </div>
                    <ul class="pricing-content">
                        <li>Entregas ilimitadas</li>
                        <li>Taquillas pequeñas y medianas</li>
                        <li>Acceso a cualquier oficina de tu país</li>
                        <li>Transporte estandar</li>
                        <li>Servicio de asistencia</li>
                    </ul>
                    <button type="submit" name="button1" class="pricingTable-signup" value="Contrata Plan">Contrata Plan</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-offset-0">
                <div class="pricingTable azul2">
                    <div class="pricingTable-header">
                        <span class="price-value">20<span class="currency">€/mes</span></span>
                        <h3 class="title">Premium</h3>
                    </div>
                    <ul class="pricing-content">
                        <li>Entregas ilimitadas</li>
                        <li>Taquilllas pequeñas y medianas</li>
                        <li>Acceso a cualquier oficina de 3 paises</li>
                        <li>Transporte estandar y premium</li>
                        <li>Servicio de asistencia</li>
                    </ul>
                    <button type="submit" name="button2" class="pricingTable-signup" value="Contrata Plan">Contrata Plan</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-lg-offset-0 col-md-offset-0">
                <div class="pricingTable azul3">
                    <div class="pricingTable-header">
                        <span class="price-value">50<span class="currency">€/mes</span></span>
                        <h3 class="title">Empresa</h3>
                    </div>
                    <ul class="pricing-content">
                        <li>Entregas ilimitadas</li>
                        <li>Taquillas pequeñas, medianas y grandes</li>
                        <li>Acceso a oficinas de cualquier país</li>
                        <li>Transporte estandar y premium</li>
                        <li>Servicio de asistencia</li>
                    </ul>
                    <button type="submit" name="button3" class="pricingTable-signup" value="Contrata Plan">Contrata Plan</button>
                </div>
            </div>
        </div>
    </form>
@endsection