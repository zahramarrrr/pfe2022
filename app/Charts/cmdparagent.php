<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class cmdparagent
{
    protected $chart;

    public function __construct(LarapexChart $chart10)
    {
        $this->chart10 = $chart10;
    }

    public function build() : \ArielMejiaDev\LarapexCharts\PieChart
    {
        
$to=Carbon::now();
$from=Carbon::now()->subDays(7);
        $cmd = Commande::select(DB::raw("COUNT(*) as count"))
        ->whereBetween('Date_Preparation', [$from, $to])
->groupBy(DB::raw("(ID_Agent)"))
->ORDERBY(DB::raw("(ID_Agent)"))
->pluck('count');
$name=Commande::select(DB::raw("ID_Agent"))
->groupBy(DB::raw("(ID_Agent)"))
->ORDERBY(DB::raw("(ID_Agent)"))
->pluck('ID_Agent');
$agent = User::select(DB::raw("Nom"))
->where('Role','agent')
->whereIn('id', $name)
->pluck('Nom');

 


        return $this->chart10->pieChart()
            
            ->addData($cmd->all())
            ->setLabels($agent->all());
    }
}
