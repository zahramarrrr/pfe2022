<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>page liste</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End espace-->

                <li class="nav-item dropdown">





                </li><!-- End Notification Nav -->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">comm</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
                        <li class="dropdown-header">
                            <h6> comm</h6>
                            <span>responsable vente en ligne</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/profil">
                                <i class="bi bi-person"></i>
                                <span>Mon Profil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/profil">
                                <i class="bi bi-gear"></i>
                                <span>Editer profil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>


                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/login">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Deconnexion</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->

        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="http://127.0.0.1:8000/Declarer-commande">
                    <i class="bi bi-journal-text"></i><span>Déclarer une commande</span>
                </a>

            </li><!-- End declarer commande nav -->
            <!-- End declarer commande nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="http://127.0.0.1:8000/liste-commande-declare">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>la liste des commandes déclarées</span>
                </a>

            </li><!-- End liste des commandes nav -->

            <li class="nav-heading">contact</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="http://127.0.0.1:8000/page-contact">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->
            <!-- END contact -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="http://127.0.0.1:8000/Commer%C3%A7ant">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>retour</span>
                </a>
            </li><!-- End retour Nav -->






        </ul>

    </aside><!-- End Sidebar-->

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
                        <h2>Commerçant x</h2>
                        <h3>responsable commerçial</h3>
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
                        <form method="POST" action="{{ route('update.profilAgent') }}">
                            @csrf
                            <div class="row mb-3">



                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom </label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$agent->name}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">prénom</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="prenom" id="prenom" value="{{$agent->prenom}}" />

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Poste</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="Role" id="Role" value="{{$agent->Role}}">
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Addresse</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="adresse" id="adresse" value="{{$agent->adresse}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">téléphone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="tel" id="tel" value="{{$agent->tel}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$agent->email}}">
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

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

        <script src="assets/vendor/chart.js/chart.min.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>