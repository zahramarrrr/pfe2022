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
   
      </div>
      @if(Auth::user()->Role =='admin')
      <form method="post" action="{{ route('validercommande' ,  ['id' => $commande->id])}}">
      @elseif(Auth::user()->Role =='agent')
      <form method="post" action="{{ route('preparercommande' ,  ['id' => $commande->id])}}">
      @elseif(Auth::user()->Role =='livreur')
      <form method="post" action="{{ route('livrercommande' ,  ['id' => $commande->id])}}">
              @endif 
 
@csrf
      <div class="form-row table-responsive">
        <table class="table">
  
          <tbody>
            <tr class="space-row">
              <th>date:</th>
              <td id="date-val">{{$commande->Date}}</td>
            </tr>
            <tr class="space-row">
              <th>temps:</th>
              <td id="temps-val">{{$commande->Heure}}</td>
            </tr>
            <tr class="space-row">
              <th>nom:</th>
              <td id="nom-val">{{$commande->Nom}}</td>
            <tr class="space-row">
              <th>prénom:</th>
              <td id="prenom-val">{{$commande->Prenom}}</td>
            </tr>
            <tr class="space-row">
              <th>téléphone:</th>
              <td id="telephone-val">{{$commande->Telephone}}</td>
            </tr>
            <tr class="space-row">
              <th>Addresse mail:</th>
              <td id="email-val">{{$commande->Email}}</td>
            </tr>
            <tr class="space-row">
              <th>Adresse 1:</th>
              <td id="adresse1-val">{{$commande->Adresse}}</td>
            </tr>

            <tr class="space-row">
              <th>Governorat:</th>
              <td id="governorat-val">{{$commande->Governorat}}</td>
            </tr>
            <tr class="space-row">
              <th>ville</th>
              <td id="ville-val">{{$commande->Ville}}</td>
            </tr>
            <tr class="space-row">
              <th>code postal</th>
              <td id="code_postal-val">{{$commande->Code_postal}}</td>
            </tr>
            <tr class="space-row">
              <th>ID Commande:</th>
              <td id="ID_commande-val">{{$commande->ID_commande}} </td>
            </tr>
            <tr class="space-row">
              <th>poids:</th>
              <td id="poids-val">{{$commande->Poids}}</td>
            </tr>
            <tr class="space-row">
              <th>mode de paiment:</th>
              <td id="paiment-val">{{$commande->Paiement}}</td>
            </tr>
            <tr class="space-row">
              <th>total prix:</th>
              <td id="prix-val">{{$commande->Prix}}</td>
            </tr>
            <tr class="space-row">
              <th>description:</th>
              <td id="description-val">{{$commande->Description}}</td>
            </tr>

          </tbody>

        </table>
      </div>


      <?php
if(Auth::user()->Role =='admin')
{
echo ' <button type="submit">valider</button>';
}
 
elseif(Auth::user()->Role =='agent')
{
  echo ' <button type="submit">preparer</button>';
}
elseif(Auth::user()->Role =='livreur')
{
  echo ' <button type="submit">livrer</button>';
}
else
{
echo '';
}
?>
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