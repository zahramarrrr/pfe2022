@extends("layouts.commerçant")
@section("content")
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
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
                    @if(Session::has('commandes_update'))
        <span>{{Session::get('commandes_update')}}</span>
        @endif
                    <!-- Profile Edit Form -->
                    <form method="POST" action="{{ route('update.profilcommercant')}}">
                        @csrf
                        <div class="row mb-3">
                            <div class="tab-content pt-2">
                                <h5 class="card-title">Informations personnelles:</h5>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 label " class="label">Nom: </label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Nom" id="Nom" value="{{$comm->Nom}}">
                                        @if ($errors->has('Nom'))
                                        <span class="text-danger">{{ $errors->first('Nom') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-lg-3 col-md-4 label " class="label">Prénom:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Prenom" id="Prenom" value="{{$comm->Prenom}}" />
                                        @if ($errors->has('Prenom'))
                                        <span class="text-danger">{{ $errors->first('Prenom') }}</span>
                                        @endif
                                    </div>
                                </div>
                       
                                <div class="row mb-3">
                                    <label for="DateNaiss" class="col-lg-3 col-md-4 label " class="label">Date Naissance:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="date" class="form-control" name="DateNaiss" id="DateNaiss" value="{{$comm->DateNaiss}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-lg-3 col-md-4 label " class="label">Adresse d'email:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$comm->email}}">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Adresse" class="col-lg-3 col-md-4 label " class="label">Adresse commerçant:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Adresse" id="Adresse" value="{{$comm->Adresse}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="EmailSociete" class="col-lg-3 col-md-4 label " class="label">Email Societe:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="EmailSociete" id="EmailSociete" value="{{$comm->EmailSociete}}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="NomSociete" class="col-lg-3 col-md-4 label " class="label">Nom Societe:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="NomSociete" id="NomSociete" value="{{$comm->NomSociete}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="TelephoneSociete" class="col-lg-3 col-md-4 label " class="label">Telephone Societe:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="TelephoneSociete" id="TelephoneSociete" value="{{$comm->TelephoneSociete}}">
                                        @if ($errors->has('TelephoneSociete'))
                                        <span class="text-danger">{{ $errors->first('TelephoneSociete') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="RaisonSociale" class="col-lg-3 col-md-4 label " class="label">Raison Sociale:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="RaisonSociale" id="RaisonSociale" value="{{$comm->RaisonSociale}}">
                                    </div>
                                </div>


                                <div class="text-center">

                                    <button type="submit" class="btn4">Enregistrer les modifications</button>

                                </div>
                            </div>
                        </div>
                    </form><!-- End Profile Edit Form -->
                </div>
            </div>
        </div>
    </div>
</main>

@endsection