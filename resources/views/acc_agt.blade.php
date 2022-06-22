<?php

use App\Models\User;

?>
@extends("layouts.agent")
@section("content")
<main id="main" class="main">
<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-11">
        <div class="row">
          <!-- agents Card -->
          

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card card-body">



              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes affecter par jour:</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-archive"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Affect_Agent) as date , count(*) as nb'))->where('ID_Agent', Auth::user()->id)->whereNotNull('Date_Affect_Agent')->groupBy(DB::raw("DATE(Date_Affect_Agent)"))->get();
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
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">



              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes préparées par jour:</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-truck"></i>

                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Preparation) , count(*) as a'))->where('ID_Agent', Auth::user()->id)->whereNotNull('Date_Preparation')->groupBy(DB::raw("DATE(Date_Preparation)"))->get();
                      $s = 0;
                      $i = 0;
                      foreach ($commande as $cmd) {
                        $x = $cmd->a;

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
          </div><!-- End Agent Card -->

         








        </div>
      </div>
    </div>
  </section>
</main>

@endsection