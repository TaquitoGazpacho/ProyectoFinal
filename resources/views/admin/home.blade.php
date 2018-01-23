@extends('fijas.adminMaster')

@section('pageHeader', 'Admin Home')
@section('pageDescription', "Datos")

@section('contenido')
    <br/>
    <div class="row">
        <section class="col-lg-8 col-lg-offset-2">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li class="header" id="taquiTotal"></li>
                    <li class="pull-left header"><i class="fa fa-inbox"></i> Taquillas</li>
                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart  active" id="graficoTaquillas" style="position: relative; height: 300px;"></div>
                </div>
            </div>
            <!-- /.nav-tabs-custom -->
        </section>

        <section class="col-lg-8 col-lg-offset-2">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Visitors Report</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <div class="pad">
                                <!-- Map will be created here -->
                                <div id="world-map-markers" style="height: 325px;"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-4">
                            <div class="pad box-pane-right bg-green" style="min-height: 280px">
                                <div class="description-block margin-bottom">
                                    <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                    <h5 class="description-header">8390</h5>
                                    <span class="description-text">Visits</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="description-block margin-bottom">
                                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                    <h5 class="description-header">30%</h5>
                                    <span class="description-text">Referrals</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="description-block">
                                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                    <h5 class="description-header">70%</h5>
                                    <span class="description-text">Organic</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
        </section>
    </div>

@endsection

@section('js')
    <script>

        // Donut Chart
        $('#taquiTotal').text('Total: '+@json($taquillas).original.total);
        var donut = new Morris.Donut({
            element  : 'graficoTaquillas',
            resize   : true,
            colors   : ['#3c8dbc', '#f56954', '#00a65a'],
            data     : [
                { label: 'Libres', value: @json($taquillas).original.libres  },
                { label: 'Ocupadas', value: @json($taquillas).original.ocupadas },
                { label: 'Estropeadas', value: @json($taquillas).original.estropeadas }
            ],
            hideHover: 'auto'
        });

        /* jVector Maps
       * ------------
       * Create a world map with markers
       */
        var oficinas = @json($oficinas).original[0];
        console.log(oficinas);

        var objetoOficina=[];
        for (var i = 0; i < oficinas.length; i++){
            element = { latLng: [parseFloat(oficinas[i].lat), parseFloat(oficinas[i].alt)], name: oficinas[i].calle };
            objetoOficina.push(element);
        }

        $('#world-map-markers').vectorMap({
            map              : 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity     : 0.7,
            hoverColor       : false,
            backgroundColor  : 'transparent',
            regionStyle      : {
                initial      : {
                    fill            : 'rgba(210, 214, 222, 1)',
                    'fill-opacity'  : 1,
                    stroke          : 'none',
                    'stroke-width'  : 0,
                    'stroke-opacity': 1
                },
                hover        : {
                    'fill-opacity': 0.7,
                    cursor        : 'pointer'
                },
                selected     : {
                    fill: 'yellow'
                },
                selectedHover: {}
            },
            markerStyle      : {
                initial: {
                    fill  : '#3C8DBC',
                    stroke: '#111'
                }
            },
            markers: objetoOficina
        });

    </script>
@endsection