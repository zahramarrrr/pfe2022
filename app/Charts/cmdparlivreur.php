<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class cmdparlivreur
{
    protected $chart;

    public function __construct(LarapexChart $chart11)
    {
        $this->chart11= $chart11;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
            
$to=Carbon::now();
$from=Carbon::now()->subDays(15);
        $cmd = Commande::select(DB::raw("COUNT(*) as count"))
        ->whereBetween('Date_Livraison', [$from, $to])
->groupBy(DB::raw("(ID_Livreur)"))
->ORDERBY(DB::raw("(ID_Livreur)"))
->pluck('count');
$name=Commande::select(DB::raw("ID_Livreur"))
->groupBy(DB::raw("(ID_Livreur)"))
->ORDERBY(DB::raw("(ID_Livreur)"))
->pluck('ID_Livreur');
$agent = User::select(DB::raw("Nom"))
->where('Role','livreur')
->whereIn('id', $name)
->pluck('Nom');

 


        return $this->chart11->pieChart()
            
            ->addData($cmd->all())
            ->setLabels($agent->all());
    }
    }

