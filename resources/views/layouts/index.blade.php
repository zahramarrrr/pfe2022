
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
</head>
<body>     
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assetswelcome/img/logo.png" alt="">
        <span>MaCommande</span>
      </a>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link scrollto active" href="#hero">A propos</a></li>
          <li><a class="nav-link scrollto active" href="#about">Contact</a></li>
      </ul>
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <form action="{{ route('logout') }}" method="POST"  class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
                        @csrf
                        <a  class="logout" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
      </form>
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @endauth
                </div>
            @endif
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
    @yield('content')
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
	<script src="assets/contact/js/main.js"></script>
</body>

</html>