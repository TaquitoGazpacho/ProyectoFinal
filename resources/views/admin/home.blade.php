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

        /* Morris.js Charts */
        // Sales chart
//        var area = new Morris.Area({
//            element   : 'revenue-chart',
//            resize    : true,
//            data      : [
//                { y: '2011 Q1', item1: 2666, item2: 2666 },
//                { y: '2011 Q2', item1: 2778, item2: 2294 },
//                { y: '2011 Q3', item1: 4912, item2: 1969 },
//                { y: '2011 Q4', item1: 3767, item2: 3597 },
//                { y: '2012 Q1', item1: 6810, item2: 1914 },
//                { y: '2012 Q2', item1: 5670, item2: 4293 },
//                { y: '2012 Q3', item1: 4820, item2: 3795 },
//                { y: '2012 Q4', item1: 15073, item2: 5967 },
//                { y: '2013 Q1', item1: 10687, item2: 4460 },
//                { y: '2013 Q2', item1: 8432, item2: 5713 }
//            ],
//            xkey      : 'y',
//            ykeys     : ['item1', 'item2'],
//            labels    : ['Item 1', 'Item 2'],
//            lineColors: ['#a0d0e0', '#3c8dbc'],
//            hideHover : 'auto'
//        });

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

        // Fix for charts under tabs
        $('.box ul.nav a').on('shown.bs.tab', function () {
            area.redraw();
            donut.redraw();
            line.redraw();
        });

    </script>
@endsection