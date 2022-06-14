<?php
use Carbon\Carbon;
use App\Models\Commande;
?>
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
                            
        $to=Carbon::now();
        $from=Carbon::now()->subDays(10);   
$liv1= Commande::where('ID_Livreur',2)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();

$x=array();
foreach($liv1 as $l){
    $totalDuration = Carbon::parse($l->Date_Livraison)->diffIndays(Carbon::parse($l->Date_Affect_Livreur));
    $x=array_merge($x,(array)$totalDuration);
}

    $liv2= Commande::where('ID_Livreur',3)
    ->whereNotNull('Date_Livraison')
    ->whereBetween('Date_Affect_Livreur', [$from, $to])
    ->whereBetween('Date_Livraison', [$from, $to])
    ->get();
    $y=array();
foreach($liv2 as $m){
    $Duration = Carbon::parse($m->Date_Livraison)->diffIndays(Carbon::parse($m->Date_Affect_Livreur));
    $y=array_merge($y,(array)$Duration); 
}
$liv3= Commande::where('ID_Livreur',4)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();
$z=array();
foreach($liv3 as $s){
$Duration1 = Carbon::parse($s->Date_Livraison)->diffIndays(Carbon::parse($s->Date_Affect_Livreur));
$z=array_merge($z,(array)$Duration1); 
}
$liv4= Commande::where('ID_Livreur',5)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();
$v=array();
foreach($liv4 as $p){
$Duration2 = Carbon::parse($p->Date_Livraison)->diffIndays(Carbon::parse($p->Date_Affect_Livreur));
$v=array_merge($v,(array)$Duration2); 
}
$liv5= Commande::where('ID_Livreur',6)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();
$n=array();
foreach($liv5 as $o){
$Duration3 = Carbon::parse($o->Date_Livraison)->diffIndays(Carbon::parse($o->Date_Affect_Livreur));
$n=array_merge($n,(array)$Duration3); 
}
$liv6= Commande::where('ID_Livreur',7)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();
$m=array();
foreach($liv6 as $h){
$Duration4 = Carbon::parse($h->Date_Livraison)->diffIndays(Carbon::parse($h->Date_Affect_Livreur));
$m=array_merge($m,(array)$Duration4); 
}
$liv7= Commande::where('ID_Livreur',8)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();
$d=array();
foreach($liv7 as $q){
$Duration5 = Carbon::parse($q->Date_Livraison)->diffIndays(Carbon::parse($q->Date_Affect_Livreur));
$d=array_merge($d,(array)$Duration5); 
}
$liv8= Commande::where('ID_Livreur',9)
->whereNotNull('Date_Livraison')
->whereBetween('Date_Affect_Livreur', [$from, $to])
->whereBetween('Date_Livraison', [$from, $to])
->get();
$u=array();
foreach($liv8 as $q){
$Duration6 = Carbon::parse($q->Date_Livraison)->diffIndays(Carbon::parse($q->Date_Affect_Livreur));
$u=array_merge($u,(array)$Duration6); 
}

//dd($x);
$date_aff = DB::table('commandes')
->select(DB::raw('DATE(Date_Affect_Livreur) as affect '))
->whereBetween('Date_Affect_Livreur', [$from, $to])
->groupBy(DB::raw("DATE(Date_Affect_Livreur)"))
->pluck('affect');

                            ?>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                  series: [{
          name: 'Taieb',
          data: [ @foreach($x as $key => $value)
                                            '{{$value}}',
                                            @endforeach ]
        }, {
          name: ' Bechir',
          data: [ @foreach($y as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }, {
          name: 'Youssef',
          data: [ @foreach($z as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }, {
          name: 'Boubaker',
          data: [@foreach($v as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }
       , {
          name: 'Imed',
          data: [@foreach($n as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }
        , {
          name: 'Kaies',
          data: [@foreach($m as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Khaled',
          data: [@foreach($d as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Mohamed',
          data: [@foreach($u as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } ],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 10
          },
        },
        xaxis: {
          type: 'date',
          categories: [ @foreach($date_aff as $key => $value)
                                            '{{ $value }}',
                                            @endforeach
          ],
        },
        legend: {
          position: 'right',
          offsetY: 40
        },
        fill: {
          opacity: 1
        }
        }).render();
                            });
                        </script>
<h5>la difference entre affectation et preparation les 10 derniers jours</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection