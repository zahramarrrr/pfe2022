
@extends("layouts.Agent")
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

              <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
              <h2>{{$agent-> Prenom}} {{$agent-> Nom}} </h2>
              <h3>agent d'entrepôt</h3>
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
                  <div class="col-lg-3 col-md-4 label ">Nom </div>
                  <div class="col-lg-9 col-md-8">{{$agent-> Nom}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">prénom</div>
                  <div class="col-lg-9 col-md-8">{{$agent-> Prenom}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Poste</div>
                  <div class="col-lg-9 col-md-8"> {{$agent-> Role}}</div>
                </div>


                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Addresse</div>
                  <div class="col-lg-9 col-md-8">{{$agent-> Adresse}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8">(216) {{$agent-> Telephone}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{$agent-> email}}</div>
                </div>

                <div class="col-lg-3 col-md-4 label" class="label">Date Naissance:</div>
                  <div class="col-lg-9 col-md-8">{{$agent-> DateNaiss}}</div>
                </div>  <div class="row">










            </div>

          </div>
        </div>
    </section>

  </main><!-- End #main -->
  @endsection








  