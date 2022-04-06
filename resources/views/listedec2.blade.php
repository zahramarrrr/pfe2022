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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
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
        <a href="http://127.0.0.1:8000/listedec">
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
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main" >
  <div class="pagetitle">
      <h1>Liste des commandes déclarées</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>
    @if(Session::has('commande_delete'))
        <span>{{Session::get('commande_delete')}}</span>
        @endif
    <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title pb-3 mt-0">Mes commandes</h5>

                    <div class="table-responsive">
                    <div class="row"><div class="eight wide column"><div class="dataTables_length" id="tablecommandes_length"><label>Afficher <select name="tablecommandes_length" aria-controls="tablecommandes" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entrées</label></div></div><div class="right aligned eight wide column"><div id="tablecommandes_filter" class="dataTables_filter ui form"><label>Rechercher:<span class="ui input"><input type="search" class="" placeholder="" aria-controls="tablecommandes"></span></label>
                    <button type="button" class="btn btn-info add-new" onclick="window.location.href ='http://127.0.0.1:8000/ajouter-commande';"><i class="fa fa-plus"></i> Ajouter</button></div></div></div>

                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="align-self-center">
                                   
                                    <th>ID commande</th>
                                    <th>Date de commande</th>
                                    <th>téléphone</th>
                                    <th>Statut</th>
                                    <th></th>
                                </tr>

                            </thead>
                            <tbody>
                            @foreach($commandes as $commande)

                                <tr>
                                    
                                    <td><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$commande->ID_commande}}</td>
                                    <td>{{$commande->date}}</td>
                                    <td>{{$commande->telephone}}</td>
                                    <td> <span class="badge badge-success m-0">Declarée</span></td>
                                    <td><a href="#" data-toggle="modal" data-target="#infos" ><i class="material-icons"></i></a>
                                         <a a href="/delete-commande/{{$commande->id}}" ><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a></span>
                                         
                                   <a href="edit-commande/{{$commande->id}}">edit </a>
                                   <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4" onclick="window.location.href ='http://127.0.0.1:8000/listedec';">+ valider</button>

                                                           </td>
                                                           
                                        </tr>

                                       
                                        @endforeach

                                </tbody>

                        </table>

                    </div>
                    <div class="pt-3 border-top text-right"><a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
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
												<th>Adresse 2:</th>
												<td id="adresse2-val">{{$commande->adresse2}}</td>
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
      </div>
      <div class="modal-footer">
        <em>Informations sous réserve</em>
      </div>
    </div>
  </div>
</main>
     <!-- Vendor JS Files -->
     <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.semanticui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

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
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>