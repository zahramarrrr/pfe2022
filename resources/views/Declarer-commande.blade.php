<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>page liste</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
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
</head>

<body>

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
  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Declaration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/Commer%C3%A7ant">page d'accueil</a></li>
          
          <li class="breadcrumb-item active">Declaration</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
	<div class="page-content" style="background-image: url('images/wizard-v1.jpg')">
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div  id="form-total" role="application" class="wizard clearfix">
             
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Etape 1</span>
			            	<span class="step-text">client</span>
			            </h2>
			            <section>
			            <div class="inner">
                    <div class="form-row">
                      <div class="form-holder form-holder-2">
                         <label for="date" class="form-holder form-holder-2">Date</label>
                           <div class="col-sm-10">
                               <input type="date" placeholder="date" class="form-control" id="date" name="date" required="" aria-required="true" aria-invalid="false">
                           </div>
                      </div>
         
                  <div class="form-holder form-holder-2">
                  <label for="temps" class="form-holder form-holder-2">Temps</label>
                    <div class="col-sm-10">
                      <input type="time" placeholder="temps" class="form-control" id="temps" name="temps" required>
                    </div>
                   </div>
                </div>
								
                <div class="form-row">
									<div class="form-holder">
										<label for="nom">Nom*</label>
										<input type="text" placeholder="nom" class="form-control" id="nom" name="nom" required >
									</div>
									<div class="form-holder">
										<label for="prenom">Prénom*</label>
										<input type="text" placeholder="prénom" class="form-control" id="prenom" name="prenom" required>
									</div>
                  <div class="form-holder">
                    <label for="telephone">téléphone</label>
                    <input type="text" placeholder="numero" class="form-control" id="telephone" name="telephone" required>
                  </div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Email*</label>
										<input type="email" placeholder=" Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
                <div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="adresse1">Adresse 1*</label>
										<input type="text" placeholder="Adresse 1" class="form-control" id="adresse1" name="adresse1" required>
									</div>
								</div>
                <div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="adresse2">Adresse 2</label>
										<input type="text" placeholder="Adresse 2" class="form-control" id="adresse2" name="adresse2" >
									</div>
								</div>
                <div class="form-row">
                <div class="form-holder form-holder-2">
                    <label for="pays">pays</label>
                      <input type="text" class="form-control" id="pays" placeholder="Pays">
                </div>
                
                <div class="form-holder form-holder-2">
                <label for="ville">ville</label>
                    <select class="form-select" id="ville" aria-label="State">
                      <option selected value="monastir">monastir</option>
                      <option value="sousse">sousse</option>
                      <option value="mahdia">mahdia</option>
                    </select>
                    
                </div>
               
                
                <div class="form-holder form-holder-2">
                <label for="code_postal">code postal</label>
                    <input type="text" class="form-control" id="code_postal" placeholder="code postal">
                    
                </div>
                </div>
							</div>

			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Etape 2</span>
			            	<span class="step-text">Commande</span>
			            </h2>
			            <section>
			                <div class="inner">
                      <div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="ID_commande">ID Commande</label>
										<input type="text" name="ID_commande" class="card-number" id="ID_commande" placeholder="ex: 489050625008xxxx">
									</div>
									<div class="form-holder">
										<label for="poids">poids en gramme</label>
										<input type="text" name="poids" class="cvc" id="poids" placeholder="00g">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="paiment">mode de paiment</label>
										<select name="paiment" id="paiment" class="form-control">
											<option value="" disabled selected>choisir le type de paiment</option>
											<option value="a la livraison">paiment a la livraison</option>
											<option value="en ligne">paiment en ligne</option>
										
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
                      <label>total prix</label>
                      <input type="text" class="form-control" id="prix" aria-label="Amount (to the nearest dollar)">
                      <span > .00$</span>
                    </div>
</div>
                <div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="description">description du commande*</label>
										<input type="text" placeholder="description" class="form-control" id="description" name="description" >
									</div>
								</div>
									
							
</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-number">Etape 3</span>
			            	<span class="step-text">Confirmation </span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Confirmer </h3>
								<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>date:</th>
												<td id="date-val"></td>
											</tr>
                      <tr class="space-row">
												<th>temps:</th>
												<td id="temps-val"></td>
											</tr>
                      <tr class="space-row">
												<th>nom:</th>
												<td id="nom-val"></td>
                        <tr class="space-row">
                         <th>prénom:</th>
												<td id="prenom-val"></td>
											</tr>
                      <tr class="space-row">
												<th>téléphone:</th>
												<td id="telephone-val"></td>
											</tr>
											<tr class="space-row">
												<th>Addresse mail:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>Adresse 1:</th>
												<td id="adresse1-val"></td>
											</tr>
                      <tr class="space-row">
												<th>Adresse 2:</th>
												<td id="adresse2-val"></td>
											</tr>
                      <tr class="space-row">
												<th>pays:</th>
												<td id="pays-val"></td>
                      </tr>
                      <tr class="space-row">
                      <th>ville</th>
												<td id="ville-val"></td>
                       </tr>
                       <tr class="space-row">
                         <th>code postal</th>
												<td id="code_postal-val"></td>
											</tr>
											<tr class="space-row">
												<th>ID Commande:</th>
												<td id="ID_commande-val"></td>
											</tr>
											<tr class="space-row">
												<th>poids:</th>
												<td id="poids-val"></td>
											</tr>
											<tr class="space-row">
												<th>mode de paiment:</th>
												<td id="paiment-val"></td>
											</tr>
											<tr class="space-row">
												<th>total prix:</th>
												<td id="prix-val"></td>
											</tr>
                      <tr class="space-row">
												<th>description:</th>
												<td id="description-val"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
           
			            </section>
                  
		        	</div>
              
		        </form>
            
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>