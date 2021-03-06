<?php

use App\Models\User;
use App\Models\Commande;
?>
@extends("layouts.admin")
@section("content")

<main id="main" class="main">

  <script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
      event.preventDefault();
      let href = $(this).attr('data-attr');
      $.ajax({
        url: href,
        beforeSend: function() {
          $('#loader').show();
        },
        // return the result
        success: function(result) {
          $('#smallModal').modal("show");
          $('#smallBody').html(result).show();
        },
        complete: function() {
          $('#loader').hide();
        },
        error: function(jqXHR, testStatus, error) {
          console.log(error);
          alert("Page " + href + " cannot open. Error:" + error);
          $('#loader').hide();
        },
        timeout: 8000
      })
    });
  </script>









<div class="pagetitle">
            <h1>Espace personnel</h1>
            <nav>
                <ol class="breadcrumb">
                  
                </ol>
            </nav>
  </div><!-- End Page Title -->


  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-11">
        <div class="row">
          <!-- Livreurs Card -->
          <div class="col-xxl-4 col-md-6">


            <div class="card info-card revenue-card">



              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes déclarées par jour: </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-bag-plus"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Declaration) as date , count(*) as nb'))->groupBy(DB::raw("DATE(Date_Declaration)"))->get();
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
          </div>
          <!-- End Livreurs Card -->

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card card-body">



              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-right"></i>Moyenne des commandes préparées par jour:</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-archive"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      <?php
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Preparation) as date , count(*) as nb'))->whereNotNull('Date_Preparation')->groupBy(DB::raw("DATE(Date_Preparation)"))->get();
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
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Livraison) , count(*) as a'))->whereNotNull('Date_Livraison')->groupBy(DB::raw("DATE(Date_Livraison)"))->get();
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
                      $commande = DB::table('commandes')->select(DB::raw('DATE(Date_Retour) , count(*) as b'))->whereNotNull('Date_Retour')->groupBy(DB::raw("DATE(Date_Retour)"))->get();
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

</main><!-- End #main -->


@endsection