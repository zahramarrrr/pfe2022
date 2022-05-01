<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assetsforgetpass/css/forget-password.css">
    <title>Forget password Template | Bootcatch themes</title>

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
    </header><!-- End Header -->
    <div class="d-flex align-items-center light-blue-gradient" style="height: 100vh;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card rounded-0 shadow">
                        <div class="card-body">
                            <h3>Problèmes de connexion ?</h3>
                            <div class="mb-4 text-sm text-gray-600">
                                <div class="form-group" class="form-control">
                                    {{ __('Mot de passe oublié? Pas de probléme. Entrez votre adresse e-mail et nous vous enverrons un lien pour récupérer votre compte..') }}
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" :value="__('Adresse e-mail: ')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <div class="flex items-center justify-end mt-4" class="form-text text-muted">
                                     
                                            <x-button class="btn btn-primary">
                                                {{ __('Envoyer un lien de connexion') }}
                                            </x-button>
                                    </div>
                                    <!-- Optional JavaScript -->
                                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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

</body>

</html>