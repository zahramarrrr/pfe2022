


<html>
  <head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MaCommande</title>
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

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/login/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
  <script language="JavaScript" type="text/javascript"  >
  $(document).ready(function(){
  $("button").click(function(){
     
        var ID_cmd =$("input:text").val(); 
     
        console.log(JSON.stringify(ID_cmd));
        if (ID_cmd) {
          $.ajax({
            type:'post',
            url:"{{route('chercher')}}",
            data: {

              'ID': ID_cmd,
              "_token": "{{csrf_token()}}",
            },
            success: function(response) {
              $("#res").show();

              console.log(response.etat);
              marker = JSON.stringify(response.etat);

              if (marker =='"déclarée"') {
                $('#declarer')
                  .removeClass('step0')
                  .addClass('active step0')
                  .html(marker);
              } else if (marker =='"validee"') {
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
    
      },
      error: function(error) {
          console.log(response);

          $("#err").show();
      
        }
    });
  }
  })
})
    </script>
   
  </head>
<body>
  


<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <img src="assetswelcome/img/logo.png" alt="">
        <span>MaCommande</span>
      </a>

     
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <section id="Macommande" class="Macommande d-flex align-items-center">
    
    <div class="col-lg-10 ">
    <img src="assetswelcome/img/search2.png" class="img-fluid col-lg-6" alt="">
    
      <form class=" form" action="" >
    
        
         <label class="labelsearch"><i class="bi bi-arrow-down-right"></i> Suivre votre commande par ici :</label>
        <input class=" search" type="text">
        <button  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"type="submit"><i class="bi bi-search"></i></button>
        </form>
    @csrf




    <div id="res" class="card" style="display:none">
      <div class="row d-flex justify-content-between px-3 top">
        <div class="d-flex">
          <h5>ORDER <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
        </div>
        <div class="d-flex flex-column text-sm-right">
          <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
          <p>USPS <span class="font-weight-bold">234094567242423422898</span></p>
        </div>
      </div>
      <!-- Add class 'active' to progress -->
      <div>
        <div class="col-20">
          <ul id="progressbar" class="text-center">

            <li id="declarer" class="step0"></li>
            <li id="valider" class="step0"></li>
            <li id="affecter_agent" class=" step0"></li>
            <li id="preparer" class="step0"></li>
            <li id="affecter_livreur" class="step0"></li>
            <li id="livrer" class="step0"></li>

          </ul>
        </div>
      </div>
      <div class="row justify-content-between top">
        <div class="row d-flex icon-content">
          <img class="icon" src="assetswelcome/img/declaree.png">
          <div class="d-flex flex-column">
            <p class="font-weight-bold">Order<br>Processed</p>
          </div>
        </div>
        <div class="row d-flex icon-content">
          <img class="icon" src="assetswelcome/img/validee.png">
          <div class="d-flex flex-column">
            <p class="font-weight-bold">Order<br>Shipped</p>
          </div>
        </div>
        <div class="row d-flex icon-content">
          <img class="icon" src="assetswelcome/img/livreur.png">
          <div class="d-flex flex-column">
            <p class="font-weight-bold">Order<br>En Route</p>
          </div>
        </div>
        <div class="row d-flex icon-content">
          <img class="icon" src="assetswelcome/img/livree.png">
          <div class="d-flex flex-column">
            <p class="font-weight-bold">Order<br>Arrived</p>
          </div>
        </div>
      </div>
    </div>
  </section>
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Footer -->
  <footer id="footer" class="footer">
<div class="container-fluid ">
  <div class="copyright">
    © Copyright <strong><span>MaCommande</span></strong>. All Rights Reserved
  </div>
</footer>
<!--  End Footer -->
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
    </body>
</html>