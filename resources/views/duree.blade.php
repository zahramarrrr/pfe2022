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
                <h5 class="card-title">Visualisation <span>| La durée entre la déclaration et la livraison</span></h5>
                <!-- div trées importante !!! -->
                <div id="reportsChart" style="min-height: 365px;">



                    <div class="col-12">




                        <script>
                            <?php
                             function secondsToTime($seconds) {
                              $dtF = new \DateTime('@0');
                              $dtT = new \DateTime("@$seconds");
                              return $dtF->diff($dtT)->format('%a days ');}
                             $to=Carbon::now();
                             $from=Carbon::now()->subDays(7);   
                    
                                     $cmd= Commande::
                                     whereNotNull('Date_Livraison')
                                     ->whereBetween('Date_Livraison', [$from, $to])
                                     ->get();
                                     $i=array();
                                     foreach($cmd as $m){
                                         $Duration10 = Carbon::parse($m->Date_Livraison)->diffInSeconds(Carbon::parse($m->Date_Declaration));
                                         $i=array_merge($i,(array)SecondsToTime($Duration10));  

                                      }
                                         

                              // dd($i);
                     $date = DB::table('commandes')
                     ->select(DB::raw('Date_Livraison as date '))
                     ->whereBetween('Date_Livraison', [$from, $to])
                     ->groupBy(DB::raw("Date_Livraison"))
                     ->pluck('date');
                            ?>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                  series: [{
                                     name: 'jours',
          data: [ 
            @foreach($i as $key => $value)
         '{{($value)}}',
         @endforeach ]
        }],
          chart: {
          type: 'area',
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
          type: 'category',
          categories: [ @foreach($date as $key => $value)
                                            '{{ $value }}',
                                            @endforeach
          ]
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