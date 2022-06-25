@extends("layouts.admin")
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
                        <h2> {{$admin->Nom}}</h2>
                        <h3> Administrateur </h3>
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
                        <form method="POST" action="{{ route('update.profilAgent') }}">
                            @csrf
                            <div class="row mb-3">


                            <div class="tab-content pt-2">
                                <h5 class="card-title">Informations personnelles:</h5>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-lg-3 col-md-4 label ">Nom: </label>
                                    <div class="col-md-8 col-lg-8">
                                        <input type="text" class="form-control" name="Nom" id="Nom" value="{{$admin->Nom}}">
                                        @if ($errors->has('Nom'))
                                    <span class="text-danger">{{ $errors->first('Nom') }}</span>
                                @endif
                               </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-lg-4 col-md-4 label ">Prénom:</label>
                                    <div class="col-md-4 col-lg-8">
                                        <input type="text" class="form-control" name="Prenom" id="Prenom" value="{{$admin->Prenom}}" />
                                        @if ($errors->has('Prenom'))
                                    <span class="text-danger">{{ $errors->first('Prenom') }}</span>
                                @endif
                                    </div>
                                </div>
                   


                                <div class="row mb-3">
                                    <label for="Job" class="col-lg-3 col-md-4 label ">Poste:</label>
                                    <div class="col-md-4 col-lg-8">
                                        <input type="text" class="form-control" name="Role" id="Role" value="{{$admin->Role}}">
                                    </div>
                                </div>
       

                                <div class="row mb-3">
                                    <label for="Adresse" class="col-lg-4 col-md-4 label ">Adresse:</label>
                                    <div class="col-md-4 col-lg-8">
                                        <input type="text" class="form-control" name="Adresse" id="Adresse" value="{{$admin->Adresse}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-lg-5 col-md-4 label ">Téléphone:</label>
                                    <div class="col-md-5 col-lg-7">
                                        <input type="text" class="form-control" name="Telephone" id="Telephone" value="{{$admin->Telephone}}">
                                        @if ($errors->has('Telephone'))
                                    <span class="text-danger">{{ $errors->first('Telephone') }}</span>
                                @endif
                             </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="DateNaiss" class="col-lg-6 col-md-4 label " class="label">Date Naissance:</label>
                                    <div class="col-md-8 col-lg-6">
                                        <input type="date" class="form-control" name="DateNaiss" id="DateNaiss" value="{{$admin->DateNaiss}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-lg-6 col-md-4 label ">Adresse d'email:</label>
                                    <div class="col-md-6 col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$admin->email}}">
                                        @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
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
