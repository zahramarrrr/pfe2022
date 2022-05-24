
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!--===============================================================================================-->
  <link href="assetswelcome/img/favicon.png" rel="icon">
<!--===============================================================================================-->
  <link href="assetswelcome/img/apple-touch-icon.png" rel="apple-touch-icon">
<!--===============================================================================================-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/vendor/aos/aos.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/vendor/remixicon/remixicon.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="assetswelcome/css/style.css" rel="stylesheet">
<!--===============================================================================================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/contact/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/css/util.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/contact/css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/login/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>
<body >     
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assetswelcome/img/logo.png" alt="">
        <span>MaCommande</span>
      </a>

      <nav id="navbar" class="navbar">
      <ul>
          
          <li><a class="getstarted scrollto" href="#about">Contact</a></li>
      </ul>
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <form action="{{ route('logout') }}" method="POST"  class="getstarted scrollto" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
                        @csrf
                        <a  class="logout" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
      </form>
                        <a href="{{ url('/home') }}" class="getstarted scrollto">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="getstarted scrollto">Se connecter</a>

                    @endauth
                </div>
            @endif
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- ======= Hero Section ======= -->
  <section id="Macommande" class="Macommande d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Optimisez votre gestion des commandes</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">optimisez et automatisez vos processus avec une gestion des commandes ouverte, agile et robuste.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="client" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Suivre votre commande</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 Macommande-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assetswelcome/img/Macommande-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
    <!-- ======= Features Section ======= -->
    <section id="features" class="features Macommande d-flex align-items-center"> 
      

      <div class="container" data-aos="fade-up">

        <header class="section-header">
      
          <p>Une solution compléte qui offre:</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="assetswelcome/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Gestion des commandes</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Gestion des livreurs</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Gestion des agents d'entrepot</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Alerte/Notifications</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>visualisation des performances des Livreur ainsi que les agents d'entrepot</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Accés gratuit pour les clients</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!--===============================================================================================-->
<script src="assetswelcome/vendor/purecounter/purecounter.js"></script>
 <!--===============================================================================================-->
  <script src="assetswelcome/vendor/aos/aos.js"></script>
  <!--===============================================================================================-->
  <script src="assetswelcome/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--===============================================================================================-->
  <script src="assetswelcome/vendor/glightbox/js/glightbox.min.js"></script>
  <!--===============================================================================================-->
  <script src="assetswelcome/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!--===============================================================================================-->
  <script src="assetswelcome/vendor/swiper/swiper-bundle.min.js"></script>
  <!--===============================================================================================-->
  <script src="assetswelcome/vendor/php-email-form/validate.js"></script>
  <!--===============================================================================================-->
  <script src="assetswelcome/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="assets/contact/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
	<script src="assets/contact/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/contact/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
	<script src="assets/contact/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
	<script src="assets/contact/vendor/tilt/tilt.jquery.min.js"></script>
  <!--===============================================================================================-->
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
<script type="text/javascript">
      $('.verifier').on('click', function(e) {
        var ID_cmd = $('input[name="idcommande"]').val();
        console.log(ID_cmd)

        if (ID_cmd) {
          $.ajax({
            type: 'post',
            url: "{{ route('chercher')}} ",
            data: {

              'ID': ID_cmd,
              "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
              $("#res").show();

              console.log(response);
              marker = JSON.stringify(response.etat);

              if (marker == '"declaree"') {
                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              } else if (marker == '"validee"') {
                //  $('#progressbar').append( '<li id="declarer" class="active step0"></li><li id="valider" class="active step0"></li><li id="affecter_agent" class=" step0"></li><li id="preparer" class="step0"></li><li id="affecter_livreur" class="step0"></li><li id="livrer" class="step0"></li>');

                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                 ;
                $('#valider')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              }
              else if (marker == '"affecter a un agent"') {
                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                  ;
                $('#valider')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#affecter_agent')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              }
              else if (marker == '"preparee"') {
                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                  ;
                $('#valider')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#affecter_agent')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#preparer')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              }
              else if (marker == '"affecter a un livreur"') {
                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                  ;
                $('#valider')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#affecter_agent')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#preparer')
                  .removeClass('step0')
                  .addClass('active step0')
                 ;
                  $('#affecter_livreur')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              }
              else if (marker == '"livree"') {
                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                  ;
                $('#valider')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#affecter_agent')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#preparer')
                  .removeClass('step0')
                  .addClass('active step0')
                 ;
                  $('#affecter_livreur')
                  .removeClass('step0')
                  .addClass('active step0')
                ;
                  $('#livrer')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              }
            }
          });
        } else {

          $('#res')
            .removeClass('font-weight-bold')
            .addClass('text-nowrap')
            .html("Entrez le nom de l'utilisateur");;
        }
      });
    </script>

</body>

</html>