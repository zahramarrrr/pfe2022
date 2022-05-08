@extends("layouts.commerçant")
 @section("content")
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
  <span class="d-none d-md-block dropdown-toggle ps-2">{{$comm-> Nom}} {{$comm-> Prenom}}</span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 54px);">
  <li class="dropdown-header">
  <h6>{{$comm-> Nom}} {{$comm-> Prenom}}</h6>
    <span class="h6" >Commerçant</span>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="profilcommercant">
      <i class="bi bi-person"></i>
      <span class="h6">Mon Profil</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="editer-profil-commercant/{{$comm->id}}">
      <i class="bi bi-gear"></i>
      <span class="h6">Editer profil</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="mdp">
      <i class="bi bi-gear"></i>
      <span class="h6">Changer mot de passe</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>


  <li>
    <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/login">
      <i class="bi bi-box-arrow-right"></i>
      <span class="h6">Deconnexion</span>
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

      <li class="nav-heading"></li>
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
          <span>Login</span>
        </a>
      </li><!-- End retour Nav -->
      </ul>
       </aside><!-- End Sidebar-->
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Déclaration d'une commande</h2>
                </div>
                <div class="card-body">
                @if(Session::has('post_add'))
        <span>{{Session::get('post_add')}} </span>
        @endif
                <form  class="register-form" id="register-form"   method="post" action="{{ route('save.post') }}">
                @csrf
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                       
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Nom</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Nom"id="Nom">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name">Prénom</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Prenom" id="Prenom">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Adresse d'email</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Email"id="Email">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name" class="label1">Télèphone</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Telephone" id="Telephone">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Adresse</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Adresse"id="Adresse">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name">Gouvernorat</div>
                                    <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="Governorat" id="Governorat">
                                        <option value="0">Gouvernorat</option>
                                    <option value="ARIANA">ARIANA</option>
                                     <option value="BEJA">BEJA</option>
                                     <option value="BEN AROUS">BEN AROUS</option>
                                     <option value="BIZERTE">BIZERTE</option>
                                     <option value="GABES">GABES</option>
                                     <option value="GAFSA">GAFSA</option>
                                     <option value="JENDOUBA">JENDOUBA</option>
                                     <option value="KAIROUAN">KAIROUAN</option>
                                     <option value="KASSERINE">KASSERINE</option>
                                     <option value="KEBILI">KEBILI</option>
                                     <option value="KEF">KEF</option>
                                     <option value="MAHDIA">MAHDIA</option>
                                     <option value="MANOUBA">MANOUBA</option>
                                     <option value="MEDENINE">MEDENINE</option>
                                     <option value="MONASTIR">MONASTIR</option>
                                     <option value="NABEUL">NABEUL</option>
                                     <option value="SFAX">SFAX</option>
                                     <option value="SIDI BOUZID">SIDI BOUZID</option>
                                     <option value="SILIANA">SILIANA</option>
                                     <option value="SOUSSE">SOUSSE</option>
                                     <option value="TATAOUINE">TATAOUINE</option>
                                     <option value="TOZEUR">TOZEUR</option>
                                     <option value="TUNIS">TUNIS</option>
                                     <option value="ZAGHOUAN">ZAGHOUAN</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                                    
                
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Ville</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Ville"id="Ville">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name">Code postal</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Code_postal" id="Code_postal">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">ID commande</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ID_commande"id="ID_commande">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name"></div>
                                        <div class="input-group-desc">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Prix totale</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Prix"id="Prix" >
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name">Paiemenent</div>
                                    <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="paiement">
                                            <option disabled="disabled" selected="selected" id="Paiement">Mode  de paiement</option>
                                            <option value="livraison">a la livraison</option>
                                            <option value="enligne">en ligne</option>
                        
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Poids</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Poids"id="Poids">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name">Description</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="Description" id="Description">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="name">Date</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="Date" id="Date" >
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-2">
                                    <div class="name">Heure </div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="Time" name="Heure" id="Heure">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                        <a  href="{{route('list')}}"> <input class="btn btn--radius-2 btn--red" type="submit" value="Déclarer" id="submit" name="submit" > </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection