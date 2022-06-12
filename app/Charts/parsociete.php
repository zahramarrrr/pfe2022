<?php

namespace App\Charts;

use App\Models\Commande;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class parsociete
{
    protected $chart;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build()
    {

        $PULL= Commande::where('ID_Commercant',23)->count();
        $zara= Commande::where('ID_Commercant',22)->count();
        $GRAIET= Commande::where('ID_Commercant',24)->count();
        $YAGHLEN= Commande::where('ID_Commercant',25)->count();
        $STRASS= Commande::where('ID_Commercant',26)->count();
     
        $MYTEK= Commande::where('ID_Commercant',27)->count();
        $HA= Commande::where('ID_Commercant',28)->count();
        $KAWARJI= Commande::where('ID_Commercant',29)->count();
        $HENI= Commande::where('ID_Commercant',30)->count();
        $MEUBLATEX= Commande::where('ID_Commercant',31)->count();


        
        return $this->chart3->barChart()
        ->setTitle('commande')
        ->setSubtitle('par societe')
        ->addData('PULL AND BEAR', [$PULL])
        ->addData('ZARA', [$zara])
        ->addData('MYTEK', [$MYTEK])
        ->addData('GRAIET', [$GRAIET])
        ->addData('BEN YAGHLEN', [$YAGHLEN])
        ->addData('STRASS', [$STRASS])
        ->addData(' HAMADI ABID', [$HA])
        ->addData(' KAWARJI ', [$KAWARJI])
        ->addData(' HENI COLLECTION', [$HENI])
        ->addData(' MEUBLATEX', [$MEUBLATEX])



        
        
        
        
       
        
        
        
        
        ->setXAxis(['commande']);
}
}