<?php

namespace App\Charts;

use App\Models\Commande;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class paiement
{
    protected $chart;

    public function __construct(LarapexChart $chart1)
    {
        $this->chart1 = $chart1;
    }

    public function build()
    {
        $enligne= Commande::where('Paiement','En ligne')->count();
$livraison= Commande::where('Paiement','livraison')->count();



        return $this->chart1->pieChart()
            ->setTitle('mode de paiement')
            ->setSubtitle('en ligne ou a la livraison')
            ->setColors(['#ffc63b', '#ff6384'])
            ->addData([$enligne, $livraison])
            ->setLabels(['el ligne', 'a la livraison']);
            
    }
}