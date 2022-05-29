@extends("layouts.index")
 @section("content")
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



  @endsection
