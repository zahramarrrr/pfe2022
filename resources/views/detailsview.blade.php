!DOCTYPE html>
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.semanticui.min.css" rel="stylesheet">

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
                            <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/profil-commer%C3%A7ant">
                                <i class="bi bi-person"></i>
                                <span>Mon Profil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/profil-commer%C3%A7ant">
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
                <a class="nav-link collapsed" href="http://127.0.0.1:8000/Declarer-commande">
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
                <a class="nav-link collapsed" href="http://127.0.0.1:8000/contact">
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

<!-- Modal -->

@foreach($commandes as  $commande)


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
                         
                      @endforeach






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


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>