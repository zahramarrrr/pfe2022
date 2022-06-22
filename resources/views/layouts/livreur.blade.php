<?php

use App\models\Notifications;

$NotificationsCommandes = Notifications::where('Notifiable', 'livreur')->where('ID_Notifiable',  Auth::user()->id)->where('read_at', null)->get();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Livreur</title>

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
  <link href='{{asset("//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" ) }}'rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href='{{asset("assets/css/style.css") }}' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href='{{asset("https://fonts.googleapis.com/css?family=Roboto|Varela+Round") }}'>
  <link rel="stylesheet" href='{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css") }}'>
  <link rel="stylesheet" href='{{asset("https://fonts.googleapis.com/icon?family=Material+Icons") }}'>
  <link rel="stylesheet" href='{{asset("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") }}'>
  <script src='{{asset("https://code.jquery.com/jquery-3.5.1.min.js") }}'></script>
  <script src='{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js") }}'></script>
  <script src='{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js") }}'></script>
  <script src='{{asset("https://js.pusher.com/7.0/pusher.min.js") }}'></script>

  <link href='{{asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/boxicons/css/boxicons.min.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/quill/quill.snow.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/quill/quill.bubble.css" ) }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/remixicon/remixicon.css") }}' rel="stylesheet">
  <link href='{{asset("assets/vendor/simple-datatables/style.css") }}' rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href='{{asset("assets/css/style.css" ) }}' rel="stylesheet">
  <link href='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css") }}' rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href='{{asset("https://fonts.googleapis.com/css?family=Roboto|Varela+Round") }}'>
  <link rel="stylesheet" href='{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css") }}'>
  <link rel="stylesheet" href='{{asset("https://fonts.googleapis.com/icon?family=Material+Icons") }}'>
  <link rel="stylesheet" href='{{asset("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") }}'>
  <script src='{{asset("https://code.jquery.com/jquery-3.5.1.min.js") }}'></script>
  <script src='{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js") }}'></script>
  <script src='{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js") }}'></script>
  <script src='{{asset("https://js.pusher.com/7.0/pusher.min.js") }}'></script>

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
      <a href="{{(('livreur'))}}" class="logo d-flex align-items-center">
        <img src='{{asset("assets/img/logo.png") }}' alt="">
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
              <a href="{{route('listenotiflivreur')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            @foreach($notif as $notifs)

            <a href="{{route('commande.details' , ['id' => $notifs->ID_commande]) }}">
              <li>
                <hr class='dropdown-divider'>
              </li>
              <?php
              if (($notifs->read_at) == null)

                echo ' <div id="notif" style="background-color:grey;" >';
              else
                echo ' <div id="notif" style="background-color:white;" >';

              ?>
              <li class='notification-item'>
                <i class='bi bi-exclamation-circle text-warning'></i>
                <div>
                  <h4>
                    {{$notifs->Text_Notif}} {{$notifs->ID_commande}}
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
          <img src='{{asset("assets/img/profile-img.png") }}' alt="Profile" class="rounded-circle">
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
            <a class="dropdown-item d-flex align-items-center" href="{{ url('profillivreur') }}">
              <i class="bi bi-person"></i>
              <span class="h6">Mon Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ url('editer-profil-livreur',['id' => $livreur->id]) }}">
              <i class="bi bi-gear"></i>
              <span class="h6">Editer profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ url('mdplivreur') }}">
              <i class="bi bi-gear"></i>
              <span class="h6">Changer le mot de passe</span>
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
        <a class="nav-link collapsed" href="{{ url('livree_livreur') }}"><i class="bi bi-bag-check"></i>
          <span>Les commandes livrées</span>
        </a>

      </li><!-- End declarer commande nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('cmd_retournee') }}">
        <i class="bi bi-bag-x"></i><span>Les commandes retournées</span>
        </a>

      </li>



      </li><!-- End liste des commandes nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('contactview') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
      <!-- End Contact Page Nav -->
      <form action="{{ route('logout') }}" method="POST"   href="pages-login.html">
         
         @csrf
         <a class="nav-link collapsed bi bi-arrow-left"  href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
             {{ __('Déconnexion') }}
</a>
</form>

      <!-- END contact -->



      </li><!-- End retour Nav -->






    </ul>

  </aside><!-- End Sidebar-->

  @yield("content")
     <!-- Footer -->
     <footer id="footer" class="footer">

<div class="container-fluid ">
  <div class="copyright">
    © Copyright <strong><span>MaCommande</span></strong>. All Rights Reserved
  </div>

</footer>
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
  <script src='{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js") }}' integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--   <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script> -->
  <!--===============================================================================================-->
  <script async src='{{asset("https://www.googletagmanager.com/gtag/js?id=UA-23581568-13") }}'></script>
  <!--===============================================================================================-->
  <script src='{{asset("https://code.jquery.com/jquery-3.5.1.js") }}'></script>
  <script src='{{asset("https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js") }}'></script>
  <script src='{{asset("https://code.jquery.com/jquery-3.5.1.js") }}'></script>
  <!--===============================================================================================-->
  <script src='{{asset("https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js") }}'></script>
  <!--===============================================================================================-->
  <script src='{{asset("https://cdn.datatables.net/1.11.5/js/dataTables.semanticui.min.js") }}'></script>
  <!--===============================================================================================-->

  <script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js") }}'></script>
  <script>
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
  <script type="text/javascript">
    $('#livrer').on('click', function(e) {
      var allVals = [];
      $(".sub_chk:checked").each(function(e) {
        allVals.push($(this).attr('data-id'));
      });
      if (allVals.length <= 0) {
        $("#erreur").show();
        location.reload();
        setTimeout(function() {
          location.reload();
        }, 2500);
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
          setTimeout(function() {
            location.reload();
          }, 2500);
          console.log(response);
          //  console.log(response);
          // alert(response.success);

        },
        error: function(error) {
          console.log(response);

          $("#erreur").show();
          setTimeout(function() {
            location.reload();
          }, 2500);
        }
      });




    });
  </script>
  <!-- pour livrer une seule cmd-->
  <script>
    function getId(monId) {
      cmdid = monId.id;
      $.ajax({
        url: "{{ route('livraison')}} ",
        type: "POST",
        data: {

          'vals': cmdid,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
          //  location.reload();
          $("#livree").show();
          setInterval(function() {
            location.reload();
          }, 2500);
          // console.log(response);
          // alert(response.success);

        },
        error: function(error) {
          console.log(response);

          $("#erreur").show();
          setTimeout(function() {
            location.reload();
          }, 2500);
        }
      });




    };
  </script>
  <!-- livrer commande page details -->
  <script>
    $('#livrer').on('click', function(e) {
      cmdid = $(this).attr('data-id');
      console.log(cmdid);
      $.ajax({
        url: "{{ route('livrercommande')}} ",
        type: "POST",
        data: {

          'vals': cmdid,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
          $("#livree").show();
          top.location.href = "{{url('livreur')}}";


        },
        error: function(error) {
          console.log(response);

          /*   $("#err").show();
                    setTimeout(function(){
             location.reload(); 
          }, 2500);   */
        }
      });




    });
  </script>
  <!-- retournee cmd -->
  <script>
    $('#retourner').on('click', function(e) {
      cmdid = $(this).attr('data-id');
      console.log(cmdid);
      $.ajax({
        url: "{{ route('retourner')}} ",
        type: "POST",
        data: {

          'vals': cmdid,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
          console.log(response);

          $("#succ").show();
          top.location.href = "{{url('livreur')}}";

        },
        error: function(error) {
          console.log(response);

          $("#err").show();
          setTimeout(function() {
            location.reload();
          }, 2500);
        }
      });




    });
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

  <script type="text/javascript">
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d76c5db9b1fa63985fd9', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      idcommande = JSON.stringify(data.message);
      urlcmd = JSON.stringify(data.message[0]);
      msg = JSON.stringify(data.message[1]);
      id = JSON.stringify(data.message[2]);

      notifmsg = msg + id;
      msg = notifmsg.replace(/["']/g, " ");
      //   alert(JSON.stringify(data.message[2])+" | "+JSON.stringify(data.message[3]));
      oldcontent = document.getElementById('notif').innerHTML;
      document.getElementById('notif').innerHTML = "<a href=" + urlcmd + "><li><hr class='dropdown-divider'></li><div id='notif' style='background-color:grey;'><li class='notification-item'><i class='bi bi-exclamation-circle text-warning'></i><div><h4>" + msg + "</h4></div></li></div></li></a>" + oldcontent;
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