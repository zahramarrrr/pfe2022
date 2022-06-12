<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Days;

class cmdparjour
{
    protected $chart;

    public function __construct(LarapexChart $chart5)
    {
        $this->chart5 = $chart5;
    }
  
  
    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        

$to=Carbon::now();
$from=Carbon::now()->subDays(7);
$date = DB::table('commandes')->select(DB::raw('DAYNAME(Date_Livraison) as date'))
->whereBetween('Date_Livraison', [$from, $to])
->groupBy(DB::raw("DAYNAME(Date_Livraison)"))
->ORDERBY(DB::raw("DAYNAME(Date_Livraison)",'desc'))
->pluck('date');
$retour = DB::table('commandes')->select(DB::raw('DAYNAME(Date_Retour) as retour'))
->whereBetween('Date_Livraison', [$from, $to])
->groupBy(DB::raw("DAYNAME(Date_Retour)"))
->ORDERBY(DB::raw("DAYNAME(Date_Retour)",'desc'))
->pluck('retour');
$z = Commande::select(DB::raw("COUNT(*) as count"))
->whereBetween('Date_Livraison', [$from, $to])
->groupBy(DB::raw("DAYNAME(Date_Livraison)"))
->ORDERBY(DB::raw("DAYNAME(Date_Livraison)",'desc'))
->pluck('count');
$x = Commande::select(DB::raw("COUNT(*) as count"))
->whereBetween('Date_Retour', [$from, $to])
->groupBy(DB::raw("DAYNAME(Date_Retour)"))
->ORDERBY(DB::raw("DAYNAME(Date_Retour)",'desc'))
->pluck('count');
//dd($date);

return $this->chart5->barChart()
->setTitle('commandes livré vs commandes retournée')
->setSubtitle('en fonction de jour de la semaine')
->addData('livré ', $z->all())
->addData('retourné', $x->all())
->setXAxis($date->all(),$retour->all());
}
}
