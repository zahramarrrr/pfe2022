<?php

use App\Models\User;

?>
@extends("layouts.livreur")
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
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes affecter par jour:</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-archive"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Affect_Livreur) as date , count(*) as nb'))->where('ID_Livreur', Auth::user()->id)->whereNotNull('Date_Affect_Livreur')->groupBy(DB::raw("DATE(Date_Affect_Livreur)"))->get();
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
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes livrées par jour:</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-truck"></i>

                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Livraison) , count(*) as a'))->where('ID_Livreur', Auth::user()->id)->whereNotNull('Date_Livraison')->groupBy(DB::raw("DATE(Date_Livraison)"))->get();
                      $s = 0;
                      $i = 0;
                      foreach ($commande as $cmd) {
                        $x = $cmd->a;

                        $s = $s + $x;
                        $i = $i + 1;
                      }
                      $m = $s / $i;


                      ?>
                      {{$m}}
                    </h6>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Agent Card -->

          <!-- agent Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">



              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes retournées par jour:</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-bag-x"></i>

                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Retour) , count(*) as b'))->where('ID_Livreur', Auth::user()->id)->whereNotNull('Date_Retour')->groupBy(DB::raw("DATE(Date_Retour)"))->get();
                      $s = 0;
                      $i = 0;
                      foreach ($commande as $cmd) {
                        $x = $cmd->b;

                        $s = $s + $x;
                        $i = $i + 1;
                      }
                      $m = $s / $i;


                      ?>
                      {{ round($m);}}
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