<?php

use App\models\Notifications;

$NotificationsCommandes = Notifications::where('Notifiable', 'livreur')->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Espace livreur</title>
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
  <link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href='{{asset("assets/css/style.css") }}' rel="stylesheet">
  <link href='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") }}' rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">MaCommande</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->



<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">



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
                  {{$notifs->ID_Personnel}} {{$notifs->texte}} {{$notifs->ID_commande}}
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
      <span class="d-none d-md-block dropdown-toggle ps-2">{{$livreur-> Nom}} {{$livreur-> Prenom}}</span>
    </a><!-- End Profile Iamge Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
      <li class="dropdown-header">
        <h6> {{$livreur-> Nom}} {{$livreur-> Prenom}}</h6>
        <span class="h6">livreur d'entrepôt</span>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="profillivreur">
          <i class="bi bi-person"></i>
          <span class="h6">Mon Profil</span>
        </a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="editer-profil-livreur/{{Auth::user()->id}}">
          <i class="bi bi-gear"></i>
          <span class="h6">Editer profil</span>
        </a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <a class="dropdown-item d-flex align-items-center" href="MDPlivreur">
          <i class="bi bi-gear"></i>
          <span class="h6">Changer mot de passe</span>
        </a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>



      <!-- End Profile Dropdown Items -->

</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

  <aside id="sidebar" class="sidebar">



    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/Declarer-commande">
          <i class="bi bi-journal-text"></i><span>Déclarer une commande rétournée</span>
        </a>

      </li><!-- End declarer commande nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/Declarer-commande">
          <i class="bi bi-journal-text"></i><span>Liste des commandes retournées</span>
        </a>

      </li>



      </li><!-- End liste des commandes nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="contact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
      <!-- End Contact Page Nav -->
      <form action="{{ route('logout') }}" method="POST" class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        @csrf
        <a class="logout" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
          {{ __('Déconnexion') }}
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
  <script src='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ) }}' integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" ) }}' crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#master').on('click', function(e) {
        if ($(this).is(':checked', true)) {
          $(".sub_chk").prop('checked', true);


        } else {
          $(".sub_chk").prop('checked', false);
        }
      });
    });
  </script>
  <script>
    $('.preparationv').on('click', function(e) {
      var allVals = [];
      $(".sub_chk:checked").each(function(e) {
        allVals.push($(this).attr('data-id'));
      });
      if (allVals.length <= 0) {
        alert("Please select row.");
      }


      $.ajax({
        url: "{{ route('livrer')}} ",
        type: "POST",
        data: {

          'vals': allVals,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
          // location.reload();

          $("#livree").show();

          //  console.log(response);
          // alert(response.success);

        },
        error: function(error) {
          console.log(response);

          alert('erreur');
        }
      });




    });
  </script>
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
      msg = JSON.stringify(data.message[2]);
      id = JSON.stringify(data.message[3]);

      notifmsg = comm + msg + id;
      msg = notifmsg.replace(/["']/g, " ");
      //   alert(JSON.stringify(data.message[2])+" | "+JSON.stringify(data.message[3]));
      oldcontent = document.getElementById('notif').innerHTML;
      document.getElementById('notif').innerHTML = "<a href=" + urlcmd + "><li><hr class='dropdown-divider'></li><div id='notif'><li class='notification-item'><i class='bi bi-exclamation-circle text-warning'></i><div><h4>" + msg + "</h4></div></li></div></li></a>" + oldcontent;
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        language: {
          url: "{{ asset('assets/datatable-fr-FR.json') }}"
        },
        "searching": true
      });
    });
  </script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>

</html>