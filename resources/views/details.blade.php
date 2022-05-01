<?php

use App\models\Notifications;

$NotificationsCommandes = Notifications::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

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
      alert(JSON.stringify(data));
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
            <span class="badge bg-primary badge-number">{{count($NotificationsCommandes)}}</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="">
            <li class="dropdown-header">
              Vous avez {{count($NotificationsCommandes)}} nouvelles alertes
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <div id='notif'>
              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>

                </div>
              </li>
              </a>
              <li>
                <hr class="dropdown-divider">
              </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>


        </div>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin X</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
            <li class="dropdown-header">
              <h6>Admin X</h6>
              <span>responsable depot</span>
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
      <h1>Liste des commandes déclarées</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>
    <?php // dd($commandes); 
    ?>
    @if(Session::has('commande_valider'))
    <span>{{Session::get('commande_valider')}} </span>
    @endif
    <form method="post" action="{{ route('valider' , ['id' => $commande->id])}}">
      @csrf
      <h4 class="modal-title">Plus d'informations</h4>
      </div>
      <div class="modal-body">
        <div class="form-row table-responsive">
          <table class="table">
            <tbody>

              <tr class="space-row">
                <th>date:</th>
                <td id="date-val">{{$commande->date}}</td>
              </tr>
              <tr class="space-row">
                <th>temps:</th>
                <td id="temps-val">{{$commande->temps}}</td>
              </tr>
              <tr class="space-row">
                <th>nom:</th>
                <td id="nom-val">{{$commande->nom}}</td>
              <tr class="space-row">
                <th>prénom:</th>
                <td id="prenom-val">{{$commande->prenom}}</td>
              </tr>
              <tr class="space-row">
                <th>téléphone:</th>
                <td id="telephone-val">{{$commande->telephone}}</td>
              </tr>
              <tr class="space-row">
                <th>Addresse mail:</th>
                <td id="email-val">{{$commande->email}}</td>
              </tr>
              <tr class="space-row">
                <th>Adresse 1:</th>
                <td id="adresse1-val">{{$commande->adresse1}}</td>
              </tr>

              <tr class="space-row">
                <th>Governorat:</th>
                <td id="governorat-val">{{$commande->governorat}}</td>
              </tr>
              <tr class="space-row">
                <th>ville</th>
                <td id="ville-val">{{$commande->ville}}</td>
              </tr>
              <tr class="space-row">
                <th>code postal</th>
                <td id="code_postal-val">{{$commande->code_postal}}</td>
              </tr>
              <tr class="space-row">
                <th>ID Commande:</th>
                <td id="ID_commande-val">{{$commande->ID_commande}} </td>
              </tr>
              <tr class="space-row">
                <th>poids:</th>
                <td id="poids-val">{{$commande->poids}}</td>
              </tr>
              <tr class="space-row">
                <th>mode de paiment:</th>
                <td id="paiment-val">{{$commande->paiement}}</td>
              </tr>
              <tr class="space-row">
                <th>total prix:</th>
                <td id="prix-val">{{$commande->prix}}</td>
              </tr>
              <tr class="space-row">
                <th>description:</th>
                <td id="description-val">{{$commande->description}}</td>
              </tr>

            </tbody>
          </table>
        </div>
        <a href="{{route('Commande.valider')}}"><input class="submit-btn" type="submit" value="valider" id="submit" name="submit" /> </a>

      </div>
      <div class="modal-footer">
        <em>Informations sous réserve</em>
      </div>

    </form>

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
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

</body>

</html>