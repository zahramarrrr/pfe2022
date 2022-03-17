
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assetswelcome/img/favicon.png" rel="icon">
  <link href="assetswelcome/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetswelcome/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetswelcome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetswelcome/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetswelcome/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetswelcome/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetswelcome/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetswelcome/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Adresse mail')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetswelcome/vendor/purecounter/purecounter.js"></script>
  <script src="assetswelcome/vendor/aos/aos.js"></script>
  <script src="assetswelcome/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetswelcome/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assetswelcome/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetswelcome/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assetswelcome/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetswelcome/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

 
