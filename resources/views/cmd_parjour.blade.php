@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Reports <span>/Today</span></h5>
                <!-- div trées importante !!! -->
                <div id="reportsChart" style="min-height: 365px;">



                    <div class="col-12">




                        <script>
                            <?php
                            $z = DB::table('commandes')->select(DB::raw('DATE(Date_Declaration) as date , count(*) as nb'))->groupBy(DB::raw("DATE(Date_Declaration)"))->get();
                            $l = DB::table('commandes')->select(DB::raw('DATE(Date_Livraison) as livraison , count(*) as l'))->whereNotNull('Date_Livraison')->groupBy(DB::raw("DATE(Date_Livraison)"))->get();
                            $r = DB::table('commandes')->select(DB::raw('DATE(Date_Retour) as retour , count(*) as r'))->whereNotNull('Date_Retour')->groupBy(DB::raw("DATE(Date_Retour)"))->get();

                            //dd($z)
                            ?>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                    series: [{
                                        name: 'declarée par jour',
                                        data: [
                                            @foreach($z as $key => $value)
                                            '{{ $value->nb }}',
                                            @endforeach
                                        ],
                                    }, {
                                        name: 'cmd livré',
                                        data: [
                                            @foreach($l as $key => $value)
                                            '{{ $value->l }}',
                                            @endforeach
                                        ],
                                    }, {
                                        name: 'cmd retournée',
                                        data: [
                                            @foreach($r as $key => $value)
                                            '{{ $value->r }}',
                                            @endforeach
                                        ]
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'area',
                                        toolbar: {
                                            show: false
                                        },
                                    },
                                    markers: {
                                        size: 7
                                    },
                                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                    fill: {
                                        type: "gradient",
                                        gradient: {
                                            shadeIntensity: 1,
                                            opacityFrom: 0.3,
                                            opacityTo: 0.4,
                                            stops: [0, 90, 100]
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'smooth',
                                        width: 6
                                    },
                                    xaxis: {
                                        type: 'date',
                                        categories: [
                                            @foreach($z as $key => $value)
                                            '{{ $value->date }}',

                                            @endforeach
                                        ]
                                    },
                                    tooltip: {
                                        x: {
                                            format: 'dd/MM/yy HH:mm'
                                        },
                                    }
                                }).render();
                            });
                        </script>
<h5> les cmd retournee livree et declaree lkol bel date </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection