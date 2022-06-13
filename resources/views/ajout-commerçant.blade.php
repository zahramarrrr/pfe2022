@extends("layouts.admin")
@section("content")
<main id="main" class="main">

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

                        <x-input id="Nom" class="form-control" type="text" name="Nom" />
                        @if ($errors->has('Nom'))
                        <span class="text-danger">{{ $errors->first('Nom') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <x-label for="Prenom" :value="__('Prénom')" />
                        <input type="text" class="form-control" name="Prenom" id="Prenom">
                        @if ($errors->has('Prenom'))
                        <span class="text-danger">{{ $errors->first('Prenom') }}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <x-label for="Adresse" :value="__('Adresse')" />
                        <input type="text" class="form-control" name="Adresse" id="Adresse">
                      </div>

                      <div class="col-md-12">
                      </div>
                      <div class="form-group">
                        <x-label for="Telephone" :value="__('Télèphone')" />
                        <input type="text" class="form-control" name="Telephone" id="Telephone">
                      </div>

                      <div class="form-group">
                        <x-label for="TelephoneSociete	" :value="__('Telephone Societe	')" />
                        <input type="text" class="form-control" name="TelephoneSociete	" id="TelephoneSociete	">
                      </div>

                      <div class="form-group">
                        <x-label for="EmailSociete	" :value="__('Email Societe	')" />
                        <input type="text" class="form-control" name="EmailSociete	" id="EmailSociete	">
                      </div>

                      <div class="form-group">
                        <x-label for="RaisonSociale	" :value="__(' Raison Sociale	')" />
                        <input type="text" class="form-control" name="RaisonSociale	" id="RaisonSociale	">
                      </div>

                      <div class="form-group">
                        <x-label for="NomSociete	" :value="__(' Nom Societe 	')" />
                        <input type="text" class="form-control" name="NomSociete	" id="NomSociete	">
                      </div>

                      <div class="form-group">
                        <x-label for="DateNaiss	" :value="__('  Date Naiss 	')" />
                        <input type="date" class="form-control" name="DateNaiss	" id="DateNaiss	">
                      </div>

                      <div class="mt-4">
                        <x-label for="email" :value="__('Adresse d email')" />

                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                      </div>



                      <div class="mt-4">

                        <x-button class="btn btn-primary">
                          {{ __('Ajouter') }}
                        </x-button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>


  </div>
  </div>
  <div class="col-lg-6 d-flex align-items-stretch">
    <div class="info-wrap w-100 p-5 img" style="background-image: url(assetsajout/images/commerçant.png);">

    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


</main><!-- End #main -->
@endsection