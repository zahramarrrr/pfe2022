@extends("layouts.login")
@section("content")
    <div class="d-flex align-items-center light-blue-gradient" style="height: 100vh;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
                    
                        <div class="card-body">
                            <h3 class="label">Problèmes de connexion ?</h3>
                            <div class="mb-4 text-sm text-gray-600">
                                <div class="form-group" class="form-control">
                                    {{ __('Mot de passe oublié? Pas de probléme. Entrez votre Adresse e-mail et nous vous enverrons un lien pour récupérer votre compte..') }}
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" class="labellogin" :value="__('Adresse mail: ')" />

                                        <x-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <div class="flex items-center justify-end mt-4" class="form-text text-muted">
                                     
                                            <x-button class="form-control btn btn-primary rounded submit px-3">
                                                {{ __('Envoyer un lien de connexion') }}
                                            </x-button>
                                    </div>

                                   @endsection