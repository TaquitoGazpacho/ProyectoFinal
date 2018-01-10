@extends('fijas.adminMaster')

@section('pageHeader', 'X')
@section('pageDescription', 'x')

@section('contenido')
    {{--ESTOY VACIO POR DENTRO, DESPUES TENDRE GRAFICOS Y COSAS CHULAS <br/>--}}
    {{--<img src="https://pm1.narvii.com/6356/18eecd4d6611feb73b8741a070220bd77fcb7a63_hq.jpg" alt="Es tan blandito que me quiero morir!!" />--}}

    <br/>
    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li class="header" id="taquiTotal"></li>
                    <li class="pull-left header"><i class="fa fa-inbox"></i> Taquillas</li>
                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart  active" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
            </div>
            <!-- /.nav-tabs-custom -->
        </section>
    </div>
@endsection

@section('js')
    <script>

        // Donut Chart
        $('#taquiTotal').text('Total: '+@json($taquillas).original.total);
        var donut = new Morris.Donut({
            element  : 'sales-chart',
            resize   : true,
            colors   : ['#3c8dbc', '#f56954', '#00a65a'],
            data     : [
                { label: 'Libres', value: @json($taquillas).original.libres  },
                { label: 'Ocupadas', value: @json($taquillas).original.ocupadas },
                { label: 'Estropeadas', value: @json($taquillas).original.estropeadas }
            ],
            hideHover: 'auto'
        });

    </script>
@endsection