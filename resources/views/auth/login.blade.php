<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>welcome</title>
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
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assetslogin1/css/style.css">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
        <!-- ======= Header ======= -->
     <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assetswelcome/img/logo.png" alt="">
        <span>MaCommande</span>
      </a>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link scrollto active" href="#hero">A propos</a></li>
          <li><a class="nav-link scrollto active" href="#about">Contact</a></li>
          <li><a class="nav-link scrollto active" href="http://127.0.0.1:8000/">Retoure</a></li>
      </ul>
           
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

        </div>
     </header>
     <!-- End Header -->
     


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">&mdash; Connexion &mdash;</h2>
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
            
            <div class="form-group mb-3">
                <x-label for="email" :value="__('Adresse mail:')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
            
            
            <div class="form-group mb-3">
                <x-label for="password" :value="__('Mot de passe: ')" />

                <x-input id="password"  class="form-control" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center" >
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            

                <x-button class="ml-3"  class="form-control btn btn-primary rounded submit px-3">
                    {{ __('Connecter') }}
                </x-button>
                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="checkbox-wrap checkbox-primary mb-0" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
                </div>
        </form>
	          
		      </div>
				</div>
			</div>

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
  <script src="assetslogin1/js/jquery.min.js"></script>
  <script src="assetslogin1/js/popper.js"></script>
  <script src="assetslogin1/js/bootstrap.min.js"></script>
  <script src="assetslogin1/js/main.js"></script>

</body>

</html>