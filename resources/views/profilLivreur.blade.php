@extends("layouts.livreur")
@section("content")
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Profil</h1>
    <nav>
                <ol class="breadcrumb">
                  
                </ol>
            </nav>
  </div><!-- End Page Title -->


  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src='{{asset("assets/img/profile-img.png") }}' alt="Profile" class="rounded-circle">
          <h2>{{$livreur->Nom}} {{$livreur->Prenom}}</h2>
          <h3>Livreur</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">



          </ul>
          <div class="tab-content pt-2">



            <h5 class="card-title">Informations personnelles:</h5>

            <div class="row">
              <div class="col-lg-3 col-md-4 label ">Nom:</div>
              <div class="col-lg-9 col-md-8">{{$livreur-> Nom}}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Prénom:</div>
              <div class="col-lg-9 col-md-8">{{$livreur-> Prenom}}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Poste:</div>
              <div class="col-lg-9 col-md-8"> {{$livreur-> Role}}</div>
            </div>


            <div class="row">
              <div class="col-lg-3 col-md-4 label">Adresse:</div>
              <div class="col-lg-9 col-md-8">{{$livreur-> Adresse}}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Télèphone:</div>
              <div class="col-lg-9 col-md-8">(+216) {{$livreur-> Telephone}}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Adresse d'email:</div>
              <div class="col-lg-9 col-md-8">{{$livreur-> email}}</div>
            </div>
            <div class="row">

              <div class="col-lg-3 col-md-4 label" class="label">Date Naissance:</div>
              <div class="col-lg-9 col-md-8">{{$livreur->DateNaiss}}</div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 label" class="label">Type Permis:</div>
              <div class="col-lg-9 col-md-8">{{$livreur-> TypePermis}}</div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 label" class="label">Type Vehicule:</div>
              <div class="col-lg-9 col-md-8">{{$livreur-> TypeVehicule}}</div>
            </div>
            <div class="row">








            </div>

          </div>
        </div>
        </section>

</main><!-- End #main -->

@endsection