<?php

use App\Models\User;

?>
@extends("layouts.commerçant")
@section("content")
<main id="main" class="main">
<div class="pagetitle">
            <h1>Espace personnel</h1>
            <nav>
                <ol class="breadcrumb">
                  
                </ol>
            </nav>
      <!-- Left side columns -->
      <div class="col-lg-11">
        <div class="row">
          <!-- Livreurs Card -->
          

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card card-body">



              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes déclarées par jour:</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-archive"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Declaration) as date , count(*) as nb'))->where('ID_Commercant', Auth::user()->id)->groupBy(DB::raw("DATE(Date_Declaration)"))->get();
                      $s = 0;
                      $i = 0;
                      foreach ($commande as $cmd) {
                        $x = $cmd->nb;

                        $s = $s + $x;
                        $i = $i + 1;
                      }
                      $m = $s / $i;


                      ?>
                      {{round($m);}}
                    </h6>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
       
          <!-- agent Card -->
      






        </div>
      </div>
    </div>
  </section>
</main>

@endsection