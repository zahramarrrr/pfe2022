@extends("layouts.commerçant")
@section("content")
<main id="main" class="main">
<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
				<li class="breadcrumb-item active">Déclaration</li>
			</ol>
		</nav>
    <section class="section">
      <div class="row">
        <div class="col-lg-15">

          <div class="card">
            <div class="card-body">
                
              <h5 class="card-title"> <img src='{{asset("assets/img/commande.png") }}' alt="Profile" class="img">Formulaire de déclaration</h5>
              @if(Session::has('post_add'))
                    <span>{{Session::get('post_add')}} </span>
                    @endif

              <!-- Horizontal Form -->
              <form class="register-form" id="register-form" method="post" action="{{ route('save.post') }}">
                        @csrf
                <div class="row mb-1">
                <input class="input--style-5" type="text"  name="commercant" style="display:none" value="Auth::user()->id" >

                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nom de client:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="Nom" id="Nom">
                    @if ($errors->has('Nom'))
                                    <span class="text-danger">{{ $errors->first('Nom') }}</span>
                                @endif
                  </div>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Prénom de client:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control"name="Prenom" id="Prenom" >
                    @if ($errors->has('Prenom'))
                                    <span class="text-danger">{{ $errors->first('Prenom') }}</span>
                                @endif
                  </div>
                  
                </div>
                <div class="row mb-1">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse d'email:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="Email" id="Email">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Télèphone:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="Telephone" id="Telephone">
                    @if ($errors->has('Telephone'))
                                    <span class="text-danger">{{ $errors->first('Telephone') }}</span>
                                @endif
                  </div>
                  
                </div>
                <div class="row mb-1">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control"name="Adresse" id="Adresse">
                    @if ($errors->has('Adresse'))
                                    <span class="text-danger">{{ $errors->first('Adresse') }}</span>
                                @endif
                  </div>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Gouvernorat:</label>
                  <div class="col-sm-4">
                  <select  name="Governorat" id="Governorat" class="form-select " class="form-check-label">
                                                        <option class="form-check-label" value="" disabled selected>Gouvernorat</option>
                                                        <option class="form-check-label" value="ARIANA">ARIANA</option>
                                                        <option class="form-check-label"value="BEJA">BEJA</option>
                                                        <option class="form-check-label" value="BEN AROUS">BEN AROUS</option>
                                                        <option class="form-check-label" value="BIZERTE">BIZERTE</option>
                                                        <option class="form-check-label"value="GABES">GABES</option>
                                                        <option class="form-check-label" value="GAFSA">GAFSA</option>
                                                        <option class="form-check-label" value="JENDOUBA">JENDOUBA</option>
                                                        <option class="form-check-label" value="KAIROUAN">KAIROUAN</option>
                                                        <option class="form-check-label" value="KASSERINE">KASSERINE</option>
                                                        <option class="form-check-label"value="KEBILI">KEBILI</option>
                                                        <option class="form-check-label"  value="KEF">KEF</option>
                                                        <option class="form-check-label" value="MAHDIA">MAHDIA</option>
                                                        <option class="form-check-label" value="MANOUBA">MANOUBA</option>
                                                        <option class="form-check-label" value="MEDENINE">MEDENINE</option>
                                                        <option class="form-check-label" value="MONASTIR">MONASTIR</option>
                                                        <option class="form-check-label" value="NABEUL">NABEUL</option>
                                                        <option class="form-check-label" value="SFAX">SFAX</option>
                                                        <option class="form-check-label" value="SIDI BOUZID">SIDI BOUZID</option>
                                                        <option class="form-check-label" value="SILIANA">SILIANA</option>
                                                        <option class="form-check-label" value="SOUSSE">SOUSSE</option>
                                                        <option class="form-check-label" value="TATAOUINE">TATAOUINE</option>
                                                        <option class="form-check-label" value="TOZEUR">TOZEUR</option>
                                                        <option class="form-check-label" value="TUNIS">TUNIS</option>
                                                        <option class="form-check-label" value="ZAGHOUAN">ZAGHOUAN</option>
                                                    </select>
                                                    @if ($errors->has('Governorat'))
                                    <span class="text-danger">{{ $errors->first('Governorat') }}</span>
                                @endif
                  </div>
                  
                </div>
                <div class="row mb-1">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Ville:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control"  name="Ville" id="Ville" >
                    @if ($errors->has('Ville'))
                                    <span class="text-danger">{{ $errors->first('Ville') }}</span>
                                @endif
                  </div>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Code postale:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="Code_postal" id="Code_postal" >
                    @if ($errors->has('Code_postal'))
                                    <span class="text-danger">{{ $errors->first('Code_postal') }}</span>
                                @endif
                  </div>
                  
                </div>
                <div class="row mb-1">
                  <label  class="col-sm-2 col-form-label">ID commande:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="ID_commande" id="ID_commande">
                    @if ($errors->has('ID_commande'))
                                    <span class="text-danger">{{ $errors->first('ID_commande') }}</span>
                                @endif
                  </div>
                  <label  class="col-sm-2 col-form-label">Prix totale:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="Prix" id="Prix">
                    @if ($errors->has('Prix'))
                                    <span class="text-danger">{{ $errors->first('Prix') }}</span>
                                @endif
                  </div>
                  
                </div>
                <div class="row mb-1">
                  <label  class="col-sm-2 col-form-label">Poids:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="Poids" id="Poids">
                    @if ($errors->has('Prix'))
                                    <span class="text-danger">{{ $errors->first('Prix') }}</span>
                                @endif
                  </div>
                  <label class="col-sm-2 col-form-label">Type de paiement</label>
                  <div class="col-sm-4">
                  <div class="form-check">
                  <input type="radio" class="form-check-input" name="Paiement" value="livraison" id="livraison"/>
                  <label  class="form-check-label" for="Paiement">
                      livraison
                  </label>
                    </div>
                    <div class="form-check">
                    <input type="radio" class="form-check-input" name="Paiement" checked value="En ligne" id='enligne'/>
                    <label class="form-check-label" for="Paiement">
                        En ligne
                    </label>
                    @if ($errors->has('Paiement'))
                                    <span class="text-danger">{{ $errors->first('Paiement') }}</span>
                                @endif
                    </div>
                  </div>
                  
                </div>
                <div class="row mb-1">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Description:</label>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="Description" id="Description" style="height: 100px;"></textarea>
                   
                  
                    </div>
                </div>

                <div class="text-center">
                                    
                <a href="{{route('list')}}"> <input class="btn3" type="submit" value="Déclarer" id="submit" name="submit"> </a>                                
            </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

  </main>
  @endsection

 