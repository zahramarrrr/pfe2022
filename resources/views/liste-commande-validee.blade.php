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
                        <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
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
                        <a href="http://127.0.0.1:8000/liste-commande-declare-admin">
                            <i class="bi bi-circle"></i><span>Liste des commandes déclarées</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/liste-commande-validee">
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

        @if(Session::has('commande_delete'))
        <span>{{Session::get('commande_delete')}}</span>
        @endif


        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="height d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-primary" id="affecter" data-toggle="modal" data-target="#exampleModal">
                                affecter agent </button>
                        </div>
                        <div class="card-body">


                            <table id="tablecommandes" class="ui celled table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="50px"><input type="checkbox" id="master"></th>
                                        <th>ID commande</th>
                                        <th>Date de commande</th>
                                        <th>téléphone</th>
                                        <th>Details</th>
                                        <th>Etat actuel</th>

                                    </tr>

                                </thead>
                                <tbody>
                                    @if($commandes->count())

                                    @foreach($commandes as $key => $commande)

                                    <tr id="tr_{{$commande->id}}">
                                        <td><input type="checkbox" class="sub_chk" data-id="{{$commande->id}}"></td>
                                        <td><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$commande->ID_commande}}</td>
                                        <td>{{$commande->date}}</td>
                                        <td>{{$commande->telephone}}</td>
                                        <td>
                                            <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">Details
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">Etat
                                                actuel
                                            </button>
                                        </td>


                                        </td>
                                    </tr>

                                    @endforeach
                                    @endif

                                </tbody>

                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header float-right">
                    <h5>User details</h5>
                    <div class="text-right"><i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i></div>
                </div>
                <div class="modal-body">
                    @if(Session::has('affecter'))
                    <span>{{Session::get('affecter')}} </span>
                    @endif

                    <div>
                        <table class="ui celled table">
                            <thead>
                                <tr>
                                    <th>ID agent</th>
                                    <th>Nom</th>
                                    <th>email</th>
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach($agents as $key => $agent)

                                <tr>

                                    <td><img src="assets/img/avatar.png" alt="" class="thumb-sm rounded-circle mr-2">{{$agent->id}}</td>
                                    <td>{{$agent->name}}</td>
                                    <td>{{$agent->email}}</td>
                                    <td><button class='affectagent' data-id="{{$agent->id}}"><input type="button" value="Affecter"></button></td>


                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">fermer</button>
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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tablecommandes').DataTable({
                language: {
                    url: "{{ asset('assets/datatable-fr-FR.json') }}"
                },
                "searching": true
            });
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
        $('.affectagent').on('click', function(e) {
            var allVals = [];
            agentid = $(this).attr('data-id');
            $(".sub_chk:checked").each(function(e) {
                allVals.push($(this).attr('data-id'));
            });
            if (allVals.length <= 0) {
                alert("Please select row.");
            }


            $.ajax({
                url: "{{ route('affecteragent')}} ",
                type: "POST",
                data: {
                    'agentid': agentid,

                    'vals': allVals,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response);
                    // $("#exampleModal").hide();
                    alert(response.success);

                },
                error: function(error) {
                    alert('erreur');
                }
            });




        });
    </script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>