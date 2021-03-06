
@extends("layouts.commerçant")
 @section("content")
  <main id="main" class="main">

    <div class="pagetitle">
  <h1>profile</h1>
  <nav>
                <ol class="breadcrumb">
                  
                </ol>
            </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
              <h2>{{$comm-> Prenom}} {{$comm-> Nom}} </h2>
              <h3>{{$comm-> Role}}</h3>
              
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
                  <div class="col-lg-3 col-md-4 label " class="label">Nom: </div>
                  <div class="col-lg-9 col-md-8">{{$comm-> Nom}}</div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label" class="label">Prénom:</div>
                  <div class="col-lg-9 col-md-8">{{$comm-> Prenom}}</div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label" class="label">Poste:</div>
                  <div class="col-lg-9 col-md-8"> {{$comm-> Role}}</div>
                </div>


                <div class="row">
                <div class="col-lg-3 col-md-4 label" class="label">Adresse:</div>
                  <div class="col-lg-9 col-md-8">{{$comm-> Adresse}}</div>
                </div>

                <div class="row">
                <div class="col-lg-4 col-md-4 label" class="label">Télèphone:</div>
                  <div class="col-lg-7 col-md-7">(+216) {{$comm-> Telephone}}</div>
                </div>


                <div class="row">
                <div class="col-lg-5 col-md-4 label" class="label">Adresse d'email:</div>
                  <div class="col-lg-7 col-md-8">{{$comm-> email}}</div>
                </div>
                <div class="row">
                <div class="col-lg-5 col-md-4 label" class="label">Date Naissance:</div>
                  <div class="col-lg-7 col-md-8">{{$comm-> DateNaiss}}</div>
                </div>
               
                <div class="row">
                <div class="col-lg-7 col-md-4 label" class="label">Telephone Societe:</div>
                  <div class="col-lg-6 col-md-8">{{$comm-> TelephoneSociete}}</div>
                </div>  <div class="row">
                <div class="col-lg-5 col-md-4 label" class="label">Email Societe:</div>
                  <div class="col-lg-6 col-md-8">{{$comm-> EmailSociete}}</div>
                </div>  <div class="row">
                <div class="col-lg-6 col-md-4 label" class="label">Raison Sociale:</div>
                  <div class="col-lg-6 col-md-8">{{$comm-> RaisonSociale}}</div>
                </div>  <div class="row">
                <div class="col-lg-5 col-md-4 label" class="label">Nom Societe:</div>
                  <div class="col-lg-7 col-md-8">{{$comm-> NomSociete}}</div>
                </div>  <div class="row">
          










            </div>

          </div>
        </div>
    </section>

  </main><!-- End #main -->
  @endsection






