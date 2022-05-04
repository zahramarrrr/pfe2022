<?php

use App\models\Notifications;

$NotificationsCommandes = Notifications::where('type', 'livreur')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
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
        <img src="assets/img/logo.png" alt="">
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
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="">
            <li class="dropdown-header">
              Vous avez {{count($NotificationsCommandes)}} nouvelles alertes
              <a href="http://127.0.0.1:8000/liste-notification-livreur"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>


            <li>
              <hr class='dropdown-divider'>
            </li>

            <div id='notif'>


              <li>
                <hr class='dropdown-divider'>
              </li>

              <div id='notif'>
                @foreach($notif as $notif)

                <li class='notification-item'>

                  <i class='bi bi-exclamation-circle text-warning'></i>
                  <div>
                    <h4>
                      <a href="{{route('commande.details' , ['id' => $notif->id]) }}">

                        Admin vous a affecté la commande {{$notif->ID_commande}}
                      </a>
                    </h4>
                  </div>

                </li>
                @endforeach

              </div>
        </li>

        </div>
        </li>
      </ul><!-- End Notification Dropdown Items -->


      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="true">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">{{$livreur->name}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
          <li class="dropdown-header">
            <h6>{{$livreur->name}}</h6>
            <span>livreur </span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="profillivreur">
              <i class="bi bi-person"></i>
              <span>Mon Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="editer-profil-livreur/{{$livreur->id}}">
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


            <form action="{{ route('logout') }}" method="POST" class="nav-link collapsed" href="pages-login.html">
              <i class="bi bi-box-arrow-in-right">
              @csrf
              <a class="dropdown-item d-flex align-items-center" class="logout" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Logout') }}
              </a></i>
            </form>

          </li>

        </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="http://127.0.0.1:8000/Admin">
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
            <a href="http://127.0.0.1:8000/Listecommercant">
              <i class="bi bi-circle"></i><span>Commerçants</span>
            </a>
          </li>
          <li>
            <a href="http://127.0.0.1:8000/ListeAgent">
              <i class="bi bi-circle"></i><span>Agents d'entrepots</span>
            </a>
          </li>
          <li>
            <a href="http://127.0.0.1:8000/ListeLivreur">
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
            <a href="http://127.0.0.1:8000/listedec2">
              <i class="bi bi-circle"></i><span>Liste des commandes déclarées</span>
            </a>
          </li>
          <li>
            <a href="http://127.0.0.1:8000/liste-commande-valide">
              <i class="bi bi-circle"></i><span>Liste des commandes validées</span>
            </a>
          </li>
          <li>
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





  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des commandes à préparer</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>

    @if(Session::has('preparer'))
    <span>{{Session::get('preparer')}}</span>
    @endif
    <div id="tablecommandes_wrapper" class="dataTables_wrapper dt-semanticUI no-footer">
      <div class="ui stackable grid">

      </div>
      <div class="row dt-table">
        <div class="sixteen wide column">
          <table id="tablecommande_agent" class="ui celled table dataTable no-footer" style="width: 100%;" aria-describedby="tablecommandes_info">
            <thead>
              <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID commande: activer pour trier la colonne par ordre décroissant" style="width: 149px;">ID commande</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="Date de commande: activer pour trier la colonne par ordre croissant" style="width: 149px;">Date de commande</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="téléphone: activer pour trier la colonne par ordre croissant" style="width: 149px;">téléphone</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="Etat actuel: activer pour trier la colonne par ordre croissant" style="width: 149px;">Etat actuel</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label=": activer pour trier la colonne par ordre croissant" style="width: 149px;"></th>
              </tr>

            </thead>
            <tbody>

              @foreach($commandes as $com)
              <tr class="odd">

                <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$com->ID_commande}}</td>
                <td>{{$com->date}}</td>
                <td>{{$com->telephone}}</td>
                <td> <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">{{$com->etat}}</button></td>

                <td>
                  <button class='prep' data-id="{{$com->id}}"><input type="button" value="preparer"></button>
                </td>


              </tr>


              @endforeach
            </tbody>

          </table>

        </div>
      </div>

    </div>
    <div class="flex items-center justify-end mt-4">


  </main>

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
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d76c5db9b1fa63985fd9', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      idcommande = JSON.stringify(data.message[2]);
      urlcmd = JSON.stringify(data.message[0]);

      notifmsg = "Admin vous a affecté la commande " + idcommande;

      //alert(JSON.stringify(data.message[0])+" | "+JSON.stringify(data.message[1]));
      oldcontent = document.getElementById('notif').innerHTML;
      document.getElementById('notif').innerHTML = "<a href=" + urlcmd + "><li><hr class='dropdown-divider'></li><div id='notif'><li class='notification-item'><i class='bi bi-exclamation-circle text-warning'></i><div><h4>" + notifmsg + "</h4></div></li></div></li></a>" + oldcontent;
    });
  </script>
</body>

</html>