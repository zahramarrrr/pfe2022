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
$from=Carbon::now()->subDays(10);
$sub = Commande::orderBy('Date_Livraison','DESC');

$date = DB::table('commandes')->select(DB::raw('DATE_FORMAT(Date_Livraison, "%W, %d %M %y") as date'))
->ORDERBY(DB::raw('DATE_FORMAT(Date_Livraison, "%W, %d %M %y")','asc'))

->whereBetween('Date_Livraison', [$from, $to])
->groupBy(DB::raw('DATE_FORMAT(Date_Livraison, "%W, %d %M %y")'))
->pluck('date');
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
->setTitle('commandes livrées vs commandes retournées')
->setSubtitle('les 10 derniers jours')
->addData('livré ', $z->all())
->addData('retourné', $x->all())
->setXAxis($date->all());
}
}
