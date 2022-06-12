<?php

namespace App\Charts;

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
        
        return $this->chart12->areaChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
