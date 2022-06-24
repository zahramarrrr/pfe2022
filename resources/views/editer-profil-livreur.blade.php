@extends("layouts.livreur")
 @section("content")
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Editer le profil</h1>
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
                        <!-- Profile Edit Form -->
                        <form method="POST" action="{{ route('update.profillivreur') }}">
                            @csrf
                            <div class="row mb-3">


                            <div class="tab-content pt-2">
                                <h5 class="card-title">Informations personnelles:</h5>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 label " class="label">Nom: </label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Nom" id="Nom" value="{{$livreur->Nom}}">
                                        @if ($errors->has('Nom'))
                                    <span class="text-danger">{{ $errors->first('Nom') }}</span>
                                @endif
                             </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-lg-3 col-md-4 label " class="label">Prénom:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Prenom" id="Prenom" value="{{$livreur->Prenom}}" />
                                        @if ($errors->has('Prenom'))
                                    <span class="text-danger">{{ $errors->first('Prenom') }}</span>
                                @endif
                                    </div>
                                </div>
           
                                <div class="row mb-3">
                                    <label for="Address" class="col-lg-3 col-md-4 label " class="label">Adresse:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Adresse" id="Adresse" value="{{$livreur->Adresse}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-lg-3 col-md-4 label " class="label">Téléphone:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Telephone" id="Telephone" value="{{$livreur->Telephone}}">
                                        @if ($errors->has('Telephone'))
                                    <span class="text-danger">{{ $errors->first('Telephone') }}</span>
                                @endif
                            </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-lg-3 col-md-4 label " class="label">Adresse d'email:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$livreur->email}}">
                                        @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                              </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="TypePermis" class="col-lg-3 col-md-4 label " class="label">Type Permis:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="TypePermis" id="TypePermis" value="{{$livreur->TypePermis}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="TypeVehicule" class="col-lg-3 col-md-4 label " class="label">Type Vehicule:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="TypeVehicule" id="TypeVehicule" value="{{$livreur->TypeVehicule}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="DateNaiss" class="col-lg-3 col-md-4 label " class="label">Date Naissance:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="date" class="form-control" name="DateNaiss" id="DateNaiss" value="{{$livreur->DateNaiss}}">
                                    </div>
                                </div>
                                <div class="text-center">
                                    
                                <button type="submit" class="btn2">Enregistrer les modifications</button>
                                    
                                </div>
                        </form><!-- End Profile Edit Form -->

                    </div>
                </div>
            </div>
        </div>
        @endsection
        