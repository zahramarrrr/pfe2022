@extends("layouts.index")
@section("content")



  
  <section id="Macommande" class="Macommande d-flex align-items-center">
    
  <div class="col-lg-10 ">
  <img src="assetswelcome/img/search2.png" class="img-fluid col-lg-6" alt="">
  
    <form class=" form" action="" >
  
      
       <label class="labelsearch"><i class="bi bi-arrow-down-right"></i> Suivre votre commande par ici :</label>
      <input class=" search" type="text">
      <button  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"type="submit"><i class="bi bi-search"></i></button>
      </form>
    
  </div><!-- End sidebar search formn-->


  </div><!-- End sidebar recent posts-->

  
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
            <img class="icon"src="assetswelcome/img/validee.png">
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
    </div>
  </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection