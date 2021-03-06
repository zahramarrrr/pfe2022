<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Commerçant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
   <!--===============================================================================================-->
  <link href='{{asset("assets/img/favicon.png") }}' rel="icon">
  <!--===============================================================================================-->
  <link href='{{asset("assets/img/apple-touch-icon.png") }}' rel="apple-touch-icon">
  <!--===============================================================================================-->
  <link href='{{asset("https://fonts.gstatic.com") }}' rel="preconnect">
  <!--===============================================================================================-->
  <link href='{{asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i") }}' rel="stylesheet">
  <!--===============================================================================================-->  
  <link href='{{asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/vendor/boxicons/css/boxicons.min.css" ) }}'rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/vendor/quill/quill.snow.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/vendor/quill/quill.bubble.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/vendor/remixicon/remixicon.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/vendor/simple-datatables/style.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("assets/css/style.css") }}' rel="stylesheet">
  <!--===============================================================================================-->
  <link href='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") }}' rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3") }}' crossorigin="anonymous">
<!--===============================================================================================-->
<link href='{{asset("assets/declaration/vendor/mdi-font/css/material-design-iconic-font.min.css") }}' rel="stylesheet" media="all">
<!--===============================================================================================-->
<link href='{{asset("assets/declaration/vendor/font-awesome-4.7/css/font-awesome.min.css") }}' rel="stylesheet" media="all">
<!--===============================================================================================-->
<link href='{{asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i") }}' rel="stylesheet">
<!--===============================================================================================-->
<link href='{{asset("assets/declaration/vendor/select2/select2.min.css") }}' rel="stylesheet" media="all">
<!--===============================================================================================-->
<link href='{{asset("assets/declaration/vendor/datepicker/daterangepicker.css") }}' rel="stylesheet" media="all">
<!--===============================================================================================-->
<link rel="stylesheet" href='{{asset("https://fonts.googleapis.com/css?family=Roboto|Varela+Round") }}'>
<!--===============================================================================================-->
<link rel="stylesheet" href='{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css") }}'>
<!--===============================================================================================-->
<link rel="stylesheet" href='{{asset("https://fonts.googleapis.com/icon?family=Material+Icons") }}'>
<!--===============================================================================================-->
<link rel="stylesheet" href='{{asset("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") }}'>
<!--===============================================================================================-->
<script src='{{asset("https://code.jquery.com/jquery-3.5.1.min.js") }}'></script>
<!--===============================================================================================-->
<script src='{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js") }}'></script>
<!--===============================================================================================-->
<script src='{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js") }}'></script>
<!--===============================================================================================-->
<link rel="icon" type="image/png" href='{{asset("images/icons/favicon.ico") }}'/>
<!--===============================================================================================-->

<!--===============================================================================================-->
<link href='{{asset("assets/declaration/css/main.css") }}' rel="stylesheet" media="all">
<!--===============================================================================================-->
<link href='{{asset("//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css") }}' rel="stylesheet">
<link rel="stylesheet" href="assets/Calendrier/css/style.css">

</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="{{url('commercant')}}" class="logo d-flex align-items-center">
        <img src='{{asset("assets/img/logo.png") }}' alt="">
        <span class="d-none d-lg-block">MaCommande</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
    
    <nav class="header-nav ms-auto">
        
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="true">
  <img src='{{asset("assets/img/profile-img.png") }}' alt="Profile" class="rounded-circle">
  <span class="d-none d-md-block dropdown-toggle ps-2"> {{$comm-> Nom}} {{$comm-> Prenom}}</span>
</a>
<!-- End Profile image-->
<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
  <li class="dropdown-header">
  <h6>{{$comm-> Nom}} {{$comm-> Prenom}}</h6>
    <span class="h6" >Commerçant</span>
  </li>
  <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('profilcommercant') }}">
                <i class="bi bi-person"></i>
                <span class="h6">Mon Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('editer-profil-commercant',['id' => $comm->id]) }}">
                <i class="bi bi-gear"></i>
                <span class="h6">Editer profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('mdpcommercant') }}">
                <i class="bi bi-gear"></i>
                <span>Changer le mot de passe</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
<!-- End Profile -->
  </header>
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    
    <li class="nav-item">
        <a class="nav-link collapsed"href="{{ url('Declarer') }}">
        <i class="bi bi-bag-plus"></i><span>Déclarer une commande</span>
        </a>
        </li><!-- End declarer commande nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('declaree_commercant') }}">
        <i class="bi bi-bag"></i>
          <span>les commandes déclarées</span>
        </a>
      </li><!-- End liste des commandes nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('contactview') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
      <form action="{{ route('logout') }}" method="POST"   href="pages-login.html">
         
                        @csrf
                        <a class="nav-link collapsed bi bi-arrow-left"  href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Déconnexion') }}
</a>
      </form>
      </br>

<div class="row justify-content-center">
  <div class="col-md-18">
    <div class="today">
      <div class="today-piece  top  day"><?php
// Return current date from the remote server
$date = date(' h:i:s ');
echo $date;
?></div>
      <div class="today-piece  middle  month"><?php
// Return current date from the remote server
$date = date('  d/m/y ');
echo $date;
?></div>
      <div class="today-piece  middle  date"><div class="today-piece  middle  month"></div></div>
</div>
    </div>
  </div>
</div>
      <!-- END contact -->


    
      </li>
  </aside>
  <!-- End Sidebar-->
@yield("content")
     <!-- Footer -->
     <footer id="footer" class="footer">

<div class="container-fluid ">
  <div class="copyright">
    © Copyright <strong><span>MaCommande</span></strong>. All Rights Reserved
  </div>

</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/apexcharts/apexcharts.min.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/chart.js/chart.min.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/echarts/echarts.min.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/quill/quill.min.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/simple-datatables/simple-datatables.js") }}'></script>
     <!--===============================================================================================-->
     <script src='{{asset("assets/vendor/tinymce/tinymce.min.js") }}'></script>
     <!--===============================================================================================-->
    <script src='{{asset("assets/vendor/php-email-form/validate.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("assets/js/main.js") }}'></script>
    <!--===============================================================================================-->
    <svg id="SvgjsSvg1145" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1146"></defs><polyline id="SvgjsPolyline1147" points="0,0"></polyline><path id="SvgjsPath1148" d="M-1 270.2L-1 270.2C-1 270.2 128.2247596153846 270.2 128.2247596153846 270.2C128.2247596153846 270.2 213.7079326923077 270.2 213.7079326923077 270.2C213.7079326923077 270.2 299.1911057692308 270.2 299.1911057692308 270.2C299.1911057692308 270.2 384.67427884615387 270.2 384.67427884615387 270.2C384.67427884615387 270.2 470.15745192307696 270.2 470.15745192307696 270.2C470.15745192307696 270.2 555.640625 270.2 555.640625 270.2C555.640625 270.2 555.640625 270.2 555.640625 270.2 "></path></svg>
    <!--===============================================================================================-->
    <script src='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js") }}' integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src='{{asset("assets/declaration/vendor/jquery/jquery.min.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("assets/declaration/vendor/select2/select2.min.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("assets/declaration/vendor/datepicker/moment.min.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("assets/declaration/vendor/datepicker/daterangepicker.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("assets/declaration/js/global.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("https://code.jquery.com/jquery-3.5.1.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("https://cdn.datatables.net/1.11.5/js/dataTables.semanticui.min.js") }}'></script>
    <!--===============================================================================================-->
    <script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js") }}'></script>
    <!--===============================================================================================-->
    <script >
    $(document).ready(function() {
    $('#tablecommandes').DataTable({
        language: {
            url: "{{ asset('assets/datatable-fr-FR.json') }}"
        },
        "searching": true
    } );
} );
    </script>
   <!--===============================================================================================-->
  <script src='{{asset("assets/js/main.js") }}'></script>

  <!--===============================================================================================-->
  <script async src='{{asset("https://www.googletagmanager.com/gtag/js?id=UA-23581568-13") }}'></script>
  <!--===============================================================================================-->
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  </script>
<!--===============================================================================================-->

  <script src='{{asset("//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js") }}'></script>
  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        language: {
          url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/fr-FR.json"
        },
        "searching": true
      });
    });
  </script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
 </body>
</html>