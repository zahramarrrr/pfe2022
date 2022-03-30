<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Declaration</title>
<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
<main id="main" class="main">

  <div class="pagetitle">
      <h1>Liste des commandes déclarées</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Commer%C3%A7ant">page d'accueil</a></li>
          
          <li class="breadcrumb-item active">liste</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
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
  <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
  <span class="d-none d-md-block dropdown-toggle ps-2">Commerçant X</span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
  <li class="dropdown-header">
    <h6>Commerçant X</h6>
    <span>responsable vente en ligne</span>
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

</ul><!-- End Profile Dropdown Items -->
  
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
        <a class="nav-link collapsed"href="http://127.0.0.1:8000/Declarer-commande">
          <i class="bi bi-journal-text"></i><span>Déclarer une commande</span>
        </a>
     
        </li><!-- End declarer commande nav -->
    

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/liste-commande-declare">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>la liste des commandes déclarées</span>
        </a>
        
      </li><!-- End liste des commandes nav -->

      <li class="nav-heading">contact</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/page-contact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
<!-- END contact -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://127.0.0.1:8000/Commer%C3%A7ant">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>retour</span>
        </a>
      </li><!-- End retour Nav -->
      </ul>
       </aside><!-- End Sidebar-->

  

        
  <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                @if(Session::has('post_add'))
        <span>{{Session::get('post_add')}}</span>
        @endif
                    <form method="POST" class="register-form" id="register-form"   method="post" action="{{ route('save.post') }}">
                    @csrf
                    <div class="form-row">
                                <div class="form-input">
                                    <input type="date" placeholder="date" class="form-control" id="date" name="date" required="" aria-required="true" aria-invalid="false">
                                 </div>
                                <div class="form-input">
                                  <input type="time"  class="form-control" id="temps" name="temps" required>
                                </div>
                          </div>
                           <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="nom" class="required">Nom du client</label>
                                    <input type="text" name="nom" id="nom" />
                                </div>
                                <div class="form-input">
                                    <label for="prenom" class="required">Prénom du client</label>
                                    <input type="text" name="prenom" id="prenom" />
                                </div>
                                <div class="form-input">
                                    <label for="telephone" class="required">Téléphone</label>
                                    <input type="text" name="telephone" id="telephone" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="adresse1" class="required">Adresse 1</label>
                                    <input type="text" name="adresse1" id="adresse1" />
                                </div>
                                <div class="form-input">
                                    <label for="adresse2" class="required">Adresse 2</label>
                                    <input type="text" name="adresse2" id="adresse2" />
                                </div>
                                <div class="form-row">
                                  <div class="form-input">
                               <label for="governorat" class="required">Governorat</label>
                                     <select name="governorat" id="governorat">
                                    <option value="0">Sélectionner le gouvernorat</option>
                                  	<option value="1">ARIANA</option>
																		 <option value="2">BEJA</option>
																		 <option value="3">BEN AROUS</option>
																		 <option value="4">BIZERTE</option>
																		 <option value="5">GABES</option>
																		 <option value="6">GAFSA</option>
																		 <option value="7">JENDOUBA</option>
																		 <option value="8">KAIROUAN</option>
																		 <option value="9">KASSERINE</option>
																		 <option value="10">KEBILI</option>
																		 <option value="11">KEF</option>
																		 <option value="12">MAHDIA</option>
																		 <option value="13">MANOUBA</option>
																		 <option value="14">MEDENINE</option>
																		 <option value="15">MONASTIR</option>
																		 <option value="16">NABEUL</option>
																		 <option value="17">SFAX</option>
																		 <option value="18">SIDI BOUZID</option>
																		 <option value="19">SILIANA</option>
																		 <option value="20">SOUSSE</option>
																		 <option value="21">TATAOUINE</option>
																		 <option value="22">TOZEUR</option>
																		 <option value="23">TUNIS</option>
																		 <option value="24">ZAGHOUAN</option>
																	  </select>
                                 </div>
                                 <div class="form-input">
                                  <label for="ville" class="required">ville</label>
                                    <input type="text" name="ville" id="ville" />
                                  </div>
                                    <div class="form-input">
                                    <label for="code_postal" class="required">code postal</label>
                                    <input type="text" name="code_postal" id="code_postal" />
                                </div>
                            </div>
                          </div>
                            <div class="form-group">
                            <div class="form-input">
                                    <label for="ID_commande">ID Commande</label>
                                    <input type="text" name="ID_commande" id="ID_commande" />
                                </div>
                                
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="paiement">Mode de paiement </label>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="paiement" id="livraison" value="livraison">
                                            <label for="livraison">a la livraison</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="paiement" id="enligne" value="enligne">
                                            <label for="enligne">en ligne</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="poids">Poids du commande</label>
                                    <input type="text" name="poids" id="poids" />
                                </div>
                                <div class="form-input">
                                    <label for="prix">prix total</label>
                                    <input type="text" name="prix" id="prix" />
                                </div>
                                <div class="form-input">
                                    <label for="description">description du commande</label>
                                    <input type="textarea" name="description" id="description" />
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>




  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</section>
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
  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>