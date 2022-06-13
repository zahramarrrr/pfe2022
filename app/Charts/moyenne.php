<?php

namespace App\Charts;

use DateTime;
use Carbon\Carbon;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class moyenne
{
    protected $chart;

    public function __construct(LarapexChart $chart12)
    {
        $this->chart12 = $chart12;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $to=Carbon::now();
        $from=Carbon::now()->subDays(15);   
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
  //$date=($l->Date_Livraison)-($l->Date_Date_Declaration);
   // $totalDuration = Carbon::parse($l)->diffIndays(Carbon::parse($dec));
  //  dd($date);
  
}

//dd($x);
$date_aff = DB::table('commandes')
->select(DB::raw('DATE(Date_Affect_Livreur) as affect '))
->whereBetween('Date_Affect_Livreur', [$from, $to])
->groupBy(DB::raw("DATE(Date_Affect_Livreur)"))
->pluck('affect');



;//dd($liv,$dec);
 return $this->chart12->areaChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('taieb', $x)
            ->addData('bechir', $y)
             ->setXAxis($date_aff->all());
    }
}
