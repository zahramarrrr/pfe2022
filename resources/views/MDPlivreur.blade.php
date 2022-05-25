
  @extends("layouts.livreur")
 @section("content")
  <main id="main" class="main">

    <div class="pagetitle">
  <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Commer%C3%A7ant">page d'accueil</a></li>

          <li class="breadcrumb-item active">Changer le mot de passe</li>
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
                <!-- 
                    Change Password Form 
                <form method="POST" action="">
            @csrf


                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">mot de passe actuel</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">nouveau mot de passe</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Réécrivez votre mot de passe</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                    </div>




                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Changer mot de passe</button>
                    </div>
                </form> -->
                <!-- End Change Password Form -->
                @if(Session::has('erreur'))
                <div class="alert alert-danger" role="alert">{{Session::get('erreur')}} </div>
                
        @elseif(Session::has('old password'))
        <div class="alert alert-danger" role="alert">{{Session::get('old password')}} </div>
    
        @elseif(Session::has('success'))
        <div class="alert alert-success" role="alert">{{Session::get('success')}} </div>
    
       
        @endif
                <form method="POST" action="{{ route('updatemdp') }}">
            @csrf
            <div class="row mb-3">


<div class="tab-content pt-2">
    <h5 class="card-title">Changer le mot de passe:</h5>
         
            <div class="row mb-3">
                <x-label class="col-lg-3 col-md-4 label" for="password" :value="__('Actuel:')" />
                <div class="col-md-8 col-lg-9">
                <x-input id="old_password" class="form-control" type="password" name="old_password" required />
            </div>
            </div>

            <!-- Password -->
            <div class="row mb-3">
                <x-label class="col-lg-3 col-md-4 label" for="password" :value="__('Nouveau: ')" />
<div class="col-md-8 col-lg-9">
                <x-input id="password"  class="form-control" type="password" name="password" required />
            </div>
</div>

            <!-- Confirm Password -->
            <div class="row mb-3">
                <x-label class="col-lg-3 col-md-4 label"  for="password_confirmation" :value="__('Confirmer:')" />
                <div class="col-md-8 col-lg-9">
                <x-input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required />
            </div>
            </div>
                                            <div class="text-center">

                                    
              <button type="submit" class="btn2" >Modifier</button>
            </div>
        </form>
               
            </div>
        </div>
    </div>
</div>
    </section>
  </main>
  @endsection

