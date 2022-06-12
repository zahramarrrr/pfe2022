<?php

use App\Models\User;
?>
@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">



                            <div class="card-body">
                                <h5 class="card-title">nombre des agents</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            <?php
                                            $agent = User::where('Role', 'agent')->count();



                                            ?>
                                            {{($agent)}}
                                        </h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                    <!-- agent Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">



                            <div class="card-body">
                                <h5 class="card-title">nombre des livreur</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>

                                    </div>
                                    <div class="ps-3">
                                        <h6>
                                            <?php
                                            $livreur = User::where('Role', 'livreur')->count();



                                            ?>
                                            {{($livreur)}}
                                        </h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Agent Card -->

                    <div class="card info-card customers-card">
                        <div class="card-body">



                            <div class="card-body">
                                <h5 class="card-title">nb des commerçants</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people"></i></div>
                                    <div class="ps-3">
                                        <h6>
                                            <?php
                                            $commerçant = User::where('Role', 'commerçant')->count();



                                            ?>
                                            {{($commerçant)}}
                                        </h6>
                                    </div>
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