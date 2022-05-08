@extends("layouts.admin")
 @section("content")
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Commer%C3%A7ant">page d'accueil</a></li>

                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2> {{$admin->name}}</h2>
                        <h3>Administrateur depot</h3>
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
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editer Profil</button>
                            </li>

                        </ul>
                        <!-- Profile Edit Form -->
                        <form method="POST" action="{{ route('update.profiladmin') }}">
                            @csrf
                            <div class="row mb-3">



                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom </label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$admin->name}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">prénom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="prenom" id="prenom" value="{{$admin->prenom}}" />

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Poste</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Role" id="Role" value="{{$admin->Role}}">
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Addresse</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="adresse" id="adresse" value="{{$admin->adresse}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">téléphone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="tel" id="tel" value="{{$admin->tel}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$admin->email}}">
                                    </div>
                                </div>


                                <div class="text-center">
                                    
                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                    
                                </div>
                        </form><!-- End Profile Edit Form -->

                    </div>
                </div>
            </div>
        </div>

        @endsection
