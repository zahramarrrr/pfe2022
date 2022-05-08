<?php

use App\models\Notifications;

$NotificationsCommandes = Notifications::where('notifiable', 'admin')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css") }}' rel="stylesheet">

  <link href='{{asset("//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css") }}' rel="stylesheet" id="bootstrap-css">
  <!-- Script -->
  <script src='{{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js") }}'></script>
  <script src='{{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js") }}' type='text/javascript'></script>

  <!-- Font Awesome JS -->
  <script defer src='{{asset("https://use.fontawesome.com/releases/v5.0.13/js/solid.js" ) }}'integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
  <script defer src='{{asset("https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js") }}' integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

  <link href='{{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css") }}' rel='stylesheet' type='text/css'>

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

  <script src='{{asset("https://js.pusher.com/7.0/pusher.min.js") }}' ></script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d76c5db9b1fa63985fd9', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      // alert(JSON.stringify(data.message[0])+" | "+JSON.stringify(data.message[1]));
    });
  </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="http://127.0.0.1:8000/Listecommercant" class="logo d-flex align-items-center">
        <img src='{{asset("assets/img/logo.png") }}'  alt="">
        <span class="d-none d-lg-block">MaCommande</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">

        </li>
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">{{count($NotificationsCommandes)}}</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="">
            <li class="dropdown-header">
              Vous avez {{count($NotificationsCommandes)}} nouvelles alertes
              <a href="{{route('listenotif')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            @foreach($notif as $notifs)

            <a href="{{route('commande.details' , ['id' => $notifs->ID_commande]) }}">
              <li>
                <hr class='dropdown-divider'>
              </li>
              <div id='notif'>
                <li class='notification-item'>
                  <i class='bi bi-exclamation-circle text-warning'></i>
                  <div>
                    <h4>
                      {{$notifs->ID_personnel}} {{$notifs->texte}} {{$notifs->ID_commande}}
                    </h4>
                  </div>
                </li>
              </div>
        </li></a>
        @endforeach



      </ul><!-- End Notification Dropdown Items -->


      </li><!-- End Notification Nav -->

    
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="true">
          <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">{{$admin->name}} {{$admin->prenom}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
          <li class="dropdown-header">
            <h6>{{$admin->name}} {{$admin->prenom}}</h6>
            <span>Administrateur </span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="profilAdmin">
              <i class="bi bi-person"></i>
              <span>Mon Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="editer-profil-admin/{{$admin->id}}">
              <i class="bi bi-gear"></i>
              <span>Editer profil</span>
            </a>
          </li>
          <a class="dropdown-item d-flex align-items-center" href="mdp">
                <i class="bi bi-gear"></i>
                <span>modifier mot de passe</span>
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

        </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="">
            <i class="bi bi-grid"></i>
            <span>Tableaux de bord</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>Personnels</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="Listecommercant">
                    <i class="bi bi-circle"></i><span>Commerçants</span>
                </a>
            </li>
            <li>
                <a href="ListeAgent">
                    <i class="bi bi-circle"></i><span>Agents d'entrepots</span>
                </a>
            </li>
            <li>
                <a href="ListeLivreur">
                    <i class="bi bi-circle"></i><span>Livreurs</span>
                </a>
            </li>

        </ul>
    </li><!-- End Personnels Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Commandes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="liste_commande_declare_admin">
                    <i class="bi bi-circle"></i><span>Liste des commandes déclarées</span>
                </a>
            </li>
            <li>
                <a href="liste-validee">
                    <i class="bi bi-circle"></i><span>Liste des commandes validées</span>
                </a>
            </li>
            <li>
            <li>
                <a href="liste-commandes-preparee">
                    <i class="bi bi-circle"></i><span>Liste des commandes préparées</span>
                </a>
            </li>
                <a href="forms-elements.html">
                    <i class="bi bi-circle"></i><span>Liste des commandes retournées</span>
                </a>
            </li>

        </ul>
    </li><!-- End commandes Nav -->

    <form action="{{ route('logout') }}" method="POST" class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>


        @csrf
        <a class="logout" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Logout') }}
        </a>
    </form>

    <!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->


  @yield("content")




 


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
  <script src='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js") }}' integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src='{{asset("https://js.pusher.com/7.0/pusher.min.js") }}'></script>
  <!-- Script -->
  <script src='{{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js") }}'></script>
  <script src='{{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js") }}' type='text/javascript'></script>

  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d76c5db9b1fa63985fd9', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      idcommande = JSON.stringify(data.message);
      urlcmd = JSON.stringify(data.message[0]);
      comm = JSON.stringify(data.message[1]);
      msg= JSON.stringify(data.message[2]);
      id = JSON.stringify(data.message[3]);

      notifmsg = comm + msg +id;
      msg=notifmsg.replace(/["']/g, " ");
      alert(JSON.stringify(data.message[0])+" | "+JSON.stringify(data.message[1])+" | "+JSON.stringify(data.message[2]));
      oldcontent = document.getElementById('notif').innerHTML;
      document.getElementById('notif').innerHTML = "<a href=" + urlcmd + "><li><hr class='dropdown-divider'></li><div id='notif'><li class='notification-item'><i class='bi bi-exclamation-circle text-warning'></i><div><h4>" + msg + "</h4></div></li></div></li></a>" + oldcontent;
    });
  </script>


</body>

</html>