<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>page liste</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href='{{asset("assets/img/favicon.png") }}' rel="icon">
  <link href='{{asset("assets/img/apple-touch-icon.png") }}' rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href='{{asset("https://fonts.gstatic.com") }}' rel="preconnect">
  <link href='{{asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i") }}' rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href='{{asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/boxicons/css/boxicons.min.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/quill/quill.snow.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/quill/quill.bubble.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/remixicon/remixicon.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/simple-datatables/style.css") }}' rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href='{{asset("assets/css/style.css") }}' rel="stylesheet">
  <link href='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") }}' rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <div href="index.html" class="logo d-flex align-items-center">
        <img src='{{asset("assets/img/logo.png") }}' alt="">
        <span class="d-none d-lg-block">MaCommande</span>
</div>
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
            <img src='{{asset("assets/img/profile-img.png") }}' alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$livreur-> name}} {{$livreur-> prenom}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
            <li class="dropdown-header">
              <h6> {{$livreur-> name}} {{$livreur-> prenom}}</h6>
              <span>Livreur</span>
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
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear"></i>
                <span >Editer profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear"></i>
                <span>Changer mot de passe</span>
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
     
  <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/page-contact">
          <i class="bi bi-envelope"></i>
          <span>Liste des commandes à livrées</span>
        </a>
      </li>

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/Declarer-commande">
          <i class="bi bi-journal-text"></i><span>Déclarer une commande rétournée</span>
        </a>

      </li><!-- End declarer commande nav -->
      <!-- End declarer commande nav -->


      </li><!-- End liste des commandes nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/page-contact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
      <!-- End Contact Page Nav -->
      <form action="{{ route('logout') }}" method="POST"  class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
                        @csrf
                        <a  class="logout" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
      </form>
      <!-- END contact -->


    
      </li><!-- End retour Nav -->






    </ul>

  </aside><!-- End Sidebar-->

  @yield("content")

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src='{{asset("assets/vendor/apexcharts/apexcharts.min.js") }}'></script>
  <script src='{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
  <script src='{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.js") }}'></script>

  <script src='{{asset("assets/vendor/chart.js/chart.min.js") }}'></script>
  <script src='{{asset("assets/vendor/echarts/echarts.min.js") }}'></script>
  <script src='{{asset("assets/vendor/quill/quill.min.js") }}'></script>
  <script src='{{asset("assets/vendor/simple-datatables/simple-datatables.js") }}'></script>
  <script src='{{asset("assets/vendor/tinymce/tinymce.min.js") }}'></script>
  <script src='{{asset("assets/vendor/php-email-form/validate.js") }}'></script>

  <!-- Template Main JS File -->
  <script src='{{asset("assets/js/main.js") }}'></script>
  <script src='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ) }}'integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p") }}' crossorigin="anonymous"></script>

</body>

</html>