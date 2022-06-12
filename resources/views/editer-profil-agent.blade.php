@extends("layouts.agent")
 @section("content")
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Commer%C3%A7ant">Page d'accueil:</a></li>

                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src='{{asset("assets/img/profile-img.png") }}' alt="Profile" class="rounded-circle">
                        <h2>{{$agent-> Nom}} {{$agent-> Prenom}} </h2>
                        <h3>{{$agent-> Role}}</h3>
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
                    <div class="tab-content pt-2">



                     
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
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Nom" id="Nom" value="{{$agent->Nom}}">
                                        @if ($errors->has('Nom'))
                                    <span class="text-danger">{{ $errors->first('Nom') }}</span>
                                @endif
                               </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-lg-3 col-md-4 label ">Prénom:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Prenom" id="Prenom" value="{{$agent->Prenom}}" />
                                        @if ($errors->has('Prenom'))
                                    <span class="text-danger">{{ $errors->first('Prenom') }}</span>
                                @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Job" class="col-lg-3 col-md-4 label ">Poste:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Role" id="Role" value="{{$agent->Role}}">
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="Address" class="col-lg-3 col-md-4 label ">Adresse:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Adresse" id="Adresse" value="{{$agent->Adresse}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-lg-3 col-md-4 label ">Téléphone:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Telephone" id="Telephone" value="{{$agent->Telephone}}">
                                        @if ($errors->has('Telephone'))
                                    <span class="text-danger">{{ $errors->first('Telephone') }}</span>
                                @endif
                             </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-lg-3 col-md-4 label ">Adresse d'email:</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$agent->email}}">
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

        