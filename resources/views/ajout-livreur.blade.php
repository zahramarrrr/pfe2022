@extends("layouts.admin")
 @section("content")
<main id="main" class="main" >

            <!-- Recent Sales -->
            
            <x-auth-validation-errors class="mb-4" :errors="$errors" />


            <form method="POST" action="{{ route('create.livreur') }}">
      @csrf

      <div class="container">
        <div class="row justify-content-center">
          
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-6">
                  <div class="contact-wrap w-100 p-md-5 p-4">

                    <p class="card-title">Entrez les informations nécessaires:</p>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <x-label class="col-lg-3 col-md-4 label "  for="name" :value="__('Nom:')" />

                          <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="form-group">
                          <x-label class="col-lg-3 col-md-4 label "  for="prenom" :value="__('Prénom:')" />
                          <input type="text" class="form-control" name="prenom" id="prenom">
                        </div>
                        <div class="form-group">
                          <x-label class="col-lg-3 col-md-4 label "  for="adresse" :value="__('Adresse:')" />
                          <input type="text" class="form-control" name="adresse" id="adresse">
                        </div>
                        <div class="form-group">
                          <x-label class="col-lg-3 col-md-4 label "  for="tel" :value="__('Télèphone:')" />
                          <input type="text" class="form-control" name="tel" id="tel">
                        </div>
                      </div>
                      <div class="col-md-12">
                      </div>


                      <div class="mt-4">
                        <x-label class="col-lg-3 col-md-4 label "  for="email" :value="__('Adresse mail:')" />

                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                      </div>

                

                      <div class="mt-4">

                        <x-button class="btn4">
                          {{ __('Ajouter') }}
                        </x-button>
                      </div>
                    </div>
    </form>
									
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
    <img  src="assetsajout/images/livreur.png" >   
      
						
				
</div>

  </main><!-- End #main -->

  @endsection

	
