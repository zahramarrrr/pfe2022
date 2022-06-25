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
                <h5 class="card-title">Visualisation <span>| La durée entre l'affecttaion et la préparation</span></h5>
                <!-- div trées importante !!! -->
                <div id="reportsChart" style="min-height: 365px;">



                    <div class="col-12">




                        <script>
                            <?php
                             $to=Carbon::now();
                             $from=Carbon::now()->subDays(10);   
                     $agt1= Commande::where('ID_Agent',10)
                     
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->get();
                     
                     $x=array();
                     foreach($agt1 as $l){
                         $totalDuration = Carbon::parse($l->Date_Preparation)->diffInHours(Carbon::parse($l->Date_Affect_Agent));
                         $x=array_merge($x,(array)$totalDuration);
                     }
                     
                         $agt2= Commande::where('ID_Agent',11)
                         ->whereBetween('Date_Affect_Agent', [$from, $to])
                         ->get();
                         $y=array();
                     foreach($agt2 as $m){
                         $Duration = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                         $y=array_merge($y,(array)$Duration);  
                     }
                     $agt3= Commande::where('ID_Agent',12)
                     ->whereNotNull('Date_Affect_Agent')
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->get();
                     $z=array();
                     foreach($agt3 as $m){
                     $Duration1 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                     $z=array_merge($z,(array)$Duration1);  
                     }
                     $agt4= Commande::where('ID_Agent',13)
                     ->whereNotNull('Date_Affect_Agent')
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->get();
                     $w=array();
                     foreach($agt4 as $m){
                     $Duration2 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                     $w=array_merge($w,(array)$Duration2);  
                     }
                     $agt5= Commande::where('ID_Agent',14)
                     ->whereNotNull('Date_Affect_Agent')
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->get();
                     $n=array();
                     foreach($agt5 as $m){
                     $Duration3 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                     $n=array_merge($n,(array)$Duration3);  
                     }
                     $agt6= Commande::where('ID_Agent',15)
                     ->whereNotNull('Date_Affect_Agent')
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->get();
                     $g=array();
                     foreach($agt6 as $m){
                         $Duration4 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                         $g=array_merge($g,(array)$Duration4);  
                         }
                         $agt7= Commande::where('ID_Agent',16)
                     ->whereNotNull('Date_Affect_Agent')
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->get();
                     $k=array();
                     foreach($agt7 as $m){
                         $Duration5 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                         $k=array_merge($k,(array)$Duration5);  
                         }
                         $agt8= Commande::where('ID_Agent',17)
                         ->whereNotNull('Date_Affect_Agent')
                         ->whereBetween('Date_Affect_Agent', [$from, $to])
                         ->get();
                         $b=array();
                         foreach($agt8 as $m){
                             $Duration6 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                             $b=array_merge($b,(array)$Duration6);  
                             }
                             $agt9= Commande::where('ID_Agent',18)
                             ->whereNotNull('Date_Affect_Agent')
                             ->whereBetween('Date_Affect_Agent', [$from, $to])
                             ->get();
                             $c=array();
                             foreach($agt9 as $m){
                                 $Duration7 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                                 $c=array_merge($c,(array)$Duration7);  
                                 }
                                 $agt10= Commande::where('ID_Agent',19)
                                 ->whereNotNull('Date_Affect_Agent')
                                 ->whereBetween('Date_Affect_Agent', [$from, $to])
                                 ->get();
                                 $d=array();
                                 foreach($agt10 as $m){
                                     $Duration8 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                                     $d=array_merge($d,(array)$Duration8);  
                                     }
                                     $agt11= Commande::where('ID_Agent',20)
                                 ->whereNotNull('Date_Affect_Agent')
                                 ->whereBetween('Date_Affect_Agent', [$from, $to])
                                 ->get();
                                 $t=array();
                                 foreach($agt11 as $m){
                                     $Duration9 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                                     $t=array_merge($t,(array)$Duration9);  
                                     }
                                     $agt12= Commande::where('ID_Agent',21)
                                     ->whereNotNull('Date_Affect_Agent')
                                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                                     ->get();
                                     $i=array();
                                     foreach($agt12 as $m){
                                         $Duration10 = Carbon::parse($m->Date_Preparation)->diffInHours(Carbon::parse($m->Date_Affect_Agent));
                                         $i=array_merge($i,(array)$Duration10);  
                                         }
                     //dd($g);
                     $date_aff = DB::table('commandes')
                     ->select(DB::raw('DATE(Date_Affect_Agent) as affect '))
                     ->whereBetween('Date_Affect_Agent', [$from, $to])
                     ->groupBy(DB::raw("DATE(Date_Affect_Agent)"))
                     ->pluck('affect');
                            ?>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                  series: [{
          name: 'Belhsan',
          data: [ @foreach($x as $key => $value)
                                            '{{$value}}',
                                            @endforeach ]
        }, {
          name: ' Youssef',
          data: [ @foreach($y as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }, {
          name: 'Abderrazek',
          data: [ @foreach($z as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }, {
          name: 'Riadh',
          data: [@foreach($w as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }
       , {
          name: 'Sami',
          data: [@foreach($n as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }
        , {
          name: 'Mohamed',
          data: [@foreach($g as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Romdhana',
          data: [@foreach($k as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Hedi',
          data: [@foreach($b as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Sofiene',
          data: [@foreach($c as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Samir',
          data: [@foreach($d as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Sadok',
          data: [@foreach($t as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        } , {
          name: 'Abdelkarim',
          data: [@foreach($i as $key => $value)
                                            '{{$value}}',
                                            @endforeach]
        }],
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection