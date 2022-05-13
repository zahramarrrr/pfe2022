@extends("layouts.admin")
 @section("content")
<main id="main" class="main" >

            <!-- Recent Sales -->
            
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('create.com') }}">
      @csrf

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Ajouter un commerçant:</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-6">
                  <div class="contact-wrap w-100 p-md-5 p-4">

                    <p class="mb-4">Entrez les informations nécessaires:</p>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <x-label for="Nom" :value="__('Nom')" />

                          <x-input id="Nom" class="form-control" type="text" name="Nom"  required autofocus />
                        </div>
                        <div class="form-group">
                          <x-label for="Prenom" :value="__('Prénom')" />
                          <input type="text" class="form-control" name="Prenom" id="Prenom">
                        </div>
                        <div class="form-group">
                          <x-label for="adresse" :value="__('Adresse')" />
                          <input type="text" class="form-control" name="adresse" id="adresse">
                        </div>
                        <div class="form-group">
                          <x-label for="telephone" :value="__('Télèphone')" />
                          <input type="text" class="form-control" name="telephone" id="telephone">
                        </div>
                      </div>
                      <div class="col-md-12">
                      </div>


                      <div class="mt-4">
                        <x-label for="email" :value="__('Adresse d email')" />

                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                      </div>

              

                      <div class="mt-4">

                        <x-button class="btn btn-primary">
                          {{ __('Ajouter') }}
                        </x-button>
                      </div>
                    </div>
    </form>

									
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" src='{{asset("assetsajout/images/commerçant.png") }}'>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	

  </main><!-- End #main -->

	

@endsection