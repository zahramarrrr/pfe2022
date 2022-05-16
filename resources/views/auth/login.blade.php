@extends("layouts.login")
@section("content")

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
       
					<h2 class="heading-section"><i class="bi bi-box-arrow-in-right"></i> Se connecter </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					
				</div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div> 
            
            <div class="form-group mb-3"  >
                <x-label class="labellogin" for="email" :value="__('Adresse mail:')" />

                <x-input  id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div>
            
            
            <div class="form-group mb-3"  class="labellogin">
                <x-label class="labellogin" for="password" :value="__('Mot de passe: ')" />

                <x-input id="password"  class="form-control" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

           
                <x-button class="ml-3"  class="form-control btn btn-primary rounded submit px-3">
                    {{ __('Connecter') }}
                </x-button>
                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="labellogin" href="{{ route('password.request') }}">
                        {{ __('Reinitialiser mot de passe ?') }}
                    </a>
                @endif
                </div>
        </form>
	          
		      </div>
				</div>
			</div>
@endsection
  