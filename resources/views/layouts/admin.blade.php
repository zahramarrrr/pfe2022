<?php

use App\Models\User;
use App\models\Notifications;

$NotificationsCommandes = Notifications::where('Notifiable', 'admin')->where('read_at', null)->get();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Administrateur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css") }}' rel="stylesheet">

  <link href='{{asset("//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css") }}' rel="stylesheet" id="bootstrap-css">
  <!-- Script -->
  <script src='{{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js") }}'></script>
  <script src='{{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js") }}' type='text/javascript'></script>

  <!-- Font Awesome JS -->
  <script defer src='{{asset("https://use.fontawesome.com/releases/v5.0.13/js/solid.js" ) }}' integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
  <script defer src='{{asset("https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js") }}' integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

  <link href='{{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css") }}' rel='stylesheet' type='text/css'>

  <!-- Favicons -->
  <link href='{{asset("assets/img/favicon.png") }}' rel="icon">
  <link href='{{asset("assets/img/apple-touch-icon.png") }}' rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
     <a href="{{url('admin')}}"> <div  class="logo d-flex align-items-center" >
        <img src='{{asset("assets/img/logo.png") }}' alt="">
        <span class="d-none d-lg-block">MaCommande</span>
      </div></a>
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
              <a href="{{url('liste-notification')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">Afficher toutes</span></a>
            </li>
            @foreach($notif as $notifs)

            <a href="{{route('commande.details' , ['id' => $notifs->ID_commande]) }}">
              <li>
                <hr class='dropdown-divider'>
              </li>
              <?php
              if (($notifs->read_at) == null)

                echo ' <div id="notif" style="background-color:#DCDCDC;" >';
              else
                echo ' <div id="notif" style="background-color:white;" >';

              ?>
              <li class='notification-item'>
                <i class='bi bi-exclamation-circle text-warning'></i>
                <div>
                  <h4>
                    <?php
                    $user = User::where('id', $notifs->ID_Notifieur)->first();

                    ?>
                    {{$user->Nom}} {{$notifs->Text_Notif}} {{$notifs->ID_commande}}
                  </h4>

                </div>
              </li>
              </div>
        </li>
        </div>
        </li></a>
        @endforeach



      </ul><!-- End Notification Dropdown Items -->


      </li><!-- End Notification Nav -->


      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="true">
          <img src='{{asset("assets/img/profile-img.png") }}' alt="Profil" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">{{$admin->Nom}} {{$admin->Prenom}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
          <li class="dropdown-header">
            <h6>{{$admin->Nom}} {{$admin->Prenom}}</h6>
            <span>Administrateur </span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ url('profilAdmin') }}">
              <i class="bi bi-person"></i>
              <span>Mon Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ url('editer-profil-admin',['id' => $admin->id]) }}">
              <i class="bi bi-gear"></i>
              <span>Editer profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ url('mdpadmin') }}">
              <i class="bi bi-gear"></i>
              <span>Changer le mot de passe</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

        </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
          <a class="nav-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
          <i class="bi bi-bar-chart"></i><span>Tableaux de bord</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>

        
        <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
          
            <li> <a href="{{ url('jour_bat') }}"> <i class="bi bi-circle"></i><span>Les commandes livrées par rapport aux retournées</span> </a></li>

            <li> <a href="{{url('cmd_jour')}}"> <i class="bi bi-circle"></i><span>Les commandes livrées par rapport aux déclarées et préparées</span> </a></li>
            <li> <a href="{{url('cmd_societe')}}"> <i class="bi bi-circle"></i><span> Les commandes par société</span> </a></li>
            <li> <a href="{{url('cmd_region')}}"> <i class="bi bi-circle"></i><span>Les commandes par région</span> </a></li>
            <li> <a href="{{url('cmd_agent')}}"> <i class="bi bi-circle"></i><span>Les commandes par agent d'entrepôt</span> </a></li>
            <li> <a href="{{url('cmd_livreur')}}"> <i class="bi bi-circle"></i><span>Les commandes par livreur</span> </a></li>
            <li> <a href="{{url('duree')}}"> <i class="bi bi-circle"></i><span>La durée entre la déclaration et la livraison</span> </a></li>
            <li> <a href="{{url('diff_affect_liv')}}"> <i class="bi bi-circle"></i><span>La durée entre l'affectation et la livraison</span> </a></li>
            <li> <a href="{{url('diff_affect_prep')}}"> <i class="bi bi-circle"></i><span>La durée entre l'affectation et la préparation</span> </a></li>

          
        </ul>
      </li>
      <!-- End Dashboard Nav -->
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item nav-link collapsed" data-bs-target="#components-nav"> 
            <i class="bi bi-person"></i> <span>Personnels</span> </a></li>
        <!-- End Dashboard Nav -->

        <ul id="components-nav" data-bs-parent="#sidebar-nav">
          
          <li class="nav-item">
            <a href="{{ url('Listecommercant') }}" class="nav-link collapsed" data-bs-target="#components-nav">
              <i class="bi bi-person"></i><span>Commerçants</span><i class="bi bi-chevron"></i>
            </a>


          </li>
          

          <li class="nav-item">
            <a href="{{url('ListeAgent')}}" class="nav-link collapsed" data-bs-target="#components-nav">
              <i class="bi bi-person"></i>
              <span>Agents d'entrepots</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('ListeLivreur') }}" class="nav-link collapsed" data-bs-target="#components-nav">
              <i class="bi bi-person"></i>
        <span>Livreurs</span>
            </a>
          </li>

        </ul>
        </li><!-- End Personnels Nav -->

        <li class="nav-item">
            <a href="{{ url('ajoutCommande') }}" class="nav-link collapsed" data-bs-target="#components-nav">
         
              
            <i class="bi bi-bag"></i></i><span>Déclarer une commande</span>
              </a>
            </li>
        <li class="nav-item nav-link collapsed" data-bs-target="#components-nav"> 
            <i class="bi bi-journal-text"></i><span>Les Commandes</span>
          </a>
        </li>
        
        <ul id="components-nav" data-bs-parent="#sidebar-nav">
        
          <li class="nav-item">
            <a href="{{ url('commande_declaree_admin') }}" class="nav-link collapsed" data-bs-target="#components-nav">
         
              
            <i class="bi bi-bag"></i></i><span>Les commandes déclarées</span>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ url('liste-validee') }}" class="nav-link collapsed" data-bs-target="#components-nav">
         
            
            <i class="bi bi-bag"></i><span>Les commandes validées</span>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ url('liste-commandes-preparee') }}" class="nav-link collapsed" data-bs-target="#components-nav">
         
              
            <i class="bi bi-bag"></i><span>Les commandes préparées</span>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ url('liste-commandes-livree') }}" class="nav-link collapsed" data-bs-target="#components-nav">
         
          
            <i class="bi bi-bag"></i><span>Les commandes livrées</span>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ url('liste-commandes-retournee') }}" class="nav-link collapsed" data-bs-target="#components-nav">
         
           
            <i class="bi bi-bag"></i><span>Les commandes retournées</span>
              </a>
            </li>

          </ul>
        </li><!-- End commandes Nav -->

        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST" href="pages-login.html">

            @csrf
            <a class="nav-link collapsed bi bi-arrow-left" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
              {{ __('Déconnexion') }}
            </a>
          </form>

          <!-- END contact -->



        </li>

  </aside><!-- End Sidebar-->


  @yield("content")

     <!-- Footer -->
     <footer id="footer" class="footer">

<div class="container-fluid ">
  <div class="copyright">
    © Copyright <strong><span>MaCommande</span></strong>. All Rights Reserved
  </div>

</footer>
<!--  End Footer -->





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

  <script src='{{asset("assetsajout/js/jquery.min.js") }}'></script>
  <script src='{{asset("assetsajout/js/popper.js") }}'></script>
  <script src='{{asset("assetsajout/js/bootstrap.min.js") }}'></script>
  <script src='{{asset("assetsajout/js/jquery.validate.min.js") }}'></script>
  <script src='{{asset("assetsajout/js/main.js") }}'></script>

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
      // alert(JSON.stringify(data.message[0])+" | "+JSON.stringify(data.message[1])+" | "+JSON.stringify(data.message[2]));
      oldcontent = document.getElementById('notif').innerHTML;
      document.getElementById('notif').innerHTML = "<a href=" + urlcmd + "><li><hr class='dropdown-divider'></li><div id='notif' style='background-color:#DCDCDC;'><li class='notification-item'><i class='bi bi-exclamation-circle text-warning'></i><div><h4>" + msg + "</h4></div></li></div></li></a>" + oldcontent;
    });
  </script>
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
    $('#validation').on('click', function(e) {
      var allVals = [];
      $(".sub_chk:checked").each(function(e) {
        allVals.push($(this).attr('data-id'));
      });
      if (allVals.length <= 0) {
        $("#err_validation").show();
        //    location.reload();
        setTimeout(function() {
          location.reload();
        }, 1600);
      }


      $.ajax({
        url: "{{ route('valider')}} ",
        type: "POST",
        data: {

          'vals': allVals,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
          //   console.log(response);
          //  alert(response.success);
          $("#valider").show();

          setTimeout(function() {
            location.reload();
          }, 1600);

        },
        error: function(error) {
          $("#err_validation").show();
          //    location.reload();
          setTimeout(function() {
            location.reload();
          }, 2500);
        }
      });




    });
  </script>





  <script>
    $('.affectagent').on('click', function(e) {
      var allVals = [];
      agentid = $(this).attr('data-id');
      $(".sub_chk:checked").each(function(e) {
        allVals.push($(this).attr('data-id'));
      });
      if (allVals.length <= 0) {
        $("#erreur").show();
        //location.reload();
        setTimeout(function() {
          location.reload();
        }, 1600);
      }


      $.ajax({
        url: "{{route('affecteragent')}}",
        type: "POST",
        data: {
          'agentid': agentid,

          'vals': allVals,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {

          // alert(response.success);
          // location.reload();
          setTimeout(function() {
            $("#affected").show();

            $("#basicModal").modal('hide');

            location.reload();
          }, 1600);
          //   console.log(response);

          //alert(response.success);

        },
        error: function(error) {
          console.log(response);
          alert(response.success);

          $("#erreur").show();
          //location.reload();
          setTimeout(function() {
            location.reload();
          }, 1600);
        }
      });




    });
  </script>





  <script>
    $('#affectlivreur').on('click', function(e) {
      var allVals = [];
      livreurid = $(this).attr('data-id');
      $(".sub_chk:checked").each(function(e) {
        allVals.push($(this).attr('data-id'));
      });
      if (allVals.length <= 0) {
        $("#err_effect_livreur").show();
        //location.reload();
        setTimeout(function() {
          location.reload();
        }, 1600);
      }


      $.ajax({
        url:"{{route('affecterlivreur')}}",
        type: "POST",
        data: {
          'livreurid': livreurid,

          'vals': allVals,
          "_token":"{{csrf_token()}}",
        },
        success: function(response) {
          // console.log(response);
          // $("#exampleModal").hide();
          //alert(response.success);
          $("#affecter_livreur").show();

          //location.reload();
          setTimeout(function() {
            $("#basicModal").modal('hide');

            location.reload();
          }, 1600);

        },
        error: function(error) {

          $("#err_effect_livreur").show();
          setTimeout(function() {
            location.reload();
          }, 1600);
        }
      });

    });
  </script>
  <!-- valider commande page details -->
  <script>
    $('#valider').on('click', function(e) {
      cmdid = $(this).attr('data-id');
      console.log(cmdid);
      $.ajax({
        url: "{{ route('validercommande')}} ",
        type: "POST",
        data: {

          'vals': cmdid,
          "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
          $("#validee").show();
          // location.reload();
          /* if(response.redirect_url){
       window.location=data.redirect_url; 
       return redirect()->route('commande_declaree_admin'); */
          //  }
          /* 
                  setTimeout(function(){
           location.reload(); 
        }, 2500);      
        console.log(response); */
          // alert(response.success);
          top.location.href = "{{url('liste-validee')}}";
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