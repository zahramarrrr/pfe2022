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
        <a href="forms-elements.html">
          <i class="bi bi-circle"></i><span>Liste des commandes déclarées</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.html">
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
      <h1>Liste des Livreurs</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>
    <div class="dataTable-top"><div class="dataTable-dropdown" style="float:right" >
                  
                  <button type="button" class="btn btn-info add-new" ><i class="fa fa-plus"></i> Ajouter</button>
                    <input class="dataTable-input" placeholder="Search..." type="text"  ></div></div>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover -->
              
                  
                  <!-- END profile-header-tab -->
               </div>
            </div>
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  
                     <div class="row row-space-2">
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png" alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">James Pittman</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Mitchell Ashcroft</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Ella Cabena</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					                          <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Declan Dyson</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">George Seyler</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Patrick Musgrove</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Taj Connal</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Laura Pollock</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Dakota Mannix</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Timothy Woolley</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Benjamin Congreve</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Mariam Maddock</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Blake Gerrald</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <!-- end col-6 -->
                        <!-- begin col-6 -->
                        <div class="col-md-6 m-b-2">
                           <div class="p-10 bg-white">
                              <div class="media media-xs overflow-visible">
                                 <a class="media-left" href="javascript:;">
                                 <img src="assets/img/avatar4.png"  alt="" class="media-object img-circle">
                                 </a>
                                 <div class="media-body valign-middle">
                                    <b class="text-inverse">Gabrielle Bunton</b>
                                 </div>
                                 <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group dropdown">
                                    <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="View"><i class="material-icons"></i></a>
					              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end col-6 -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end #profile-friends tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
         </div>
      </div>
   </div>
</div>
        </div>
    </div>
</div>
</div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>