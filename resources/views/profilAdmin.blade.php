
@extends("layouts.admin")
 @section("content")
  <main id="main" class="main">

    <div class="pagetitle">
  <h1>Profil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Commer%C3%A7ant">Page d'accueil</a></li>

          <li class="breadcrumb-item active">profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>{{$admin-> name}} {{$admin-> prenom}} </h2>
              <h3>{{$admin-> Role}}</h3>
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

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
                </li>


              </ul>
              <div class="tab-content pt-2">



                <h5 class="card-title">Informations personnelles:</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label " class="label">Nom: </div>
                  <div class="col-lg-9 col-md-8">{{$admin-> name}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label" class="card-title">Prénom:</div>
                  <div class="col-lg-9 col-md-8">{{$admin-> prenom}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Poste:</div>
                  <div class="col-lg-9 col-md-8"> {{$admin-> Role}}</div>
                </div>


                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Adresse:</div>
                  <div class="col-lg-9 col-md-8">{{$admin-> adresse}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label" class="label">Télèphone:</div>
                  <div class="col-lg-9 col-md-8">(216) {{$admin-> tel}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Adresse d'email:</div>
                  <div class="col-lg-9 col-md-8">{{$admin-> email}}</div>
                </div>

             










            </div>

          </div>
        </div>
    </section>

  </main><!-- End #main -->
  @endsection







  