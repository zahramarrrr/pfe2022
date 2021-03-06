@extends($type)
@section("content")
<<main id="main" class="main">

  <div class="col-md-10">
    <div class="row">

      <div class="receipt-main col-md-8 col-md-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
        <div class="row">
          <div class="receipt-header">
            
            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
              <div class="receipt-right">
                <h5>Société commerçante:</h5>
                <p>Nom de commerçant:</p>
                <p>Adresse d'email:</p>
                <p>Télèphone:</p>
              </div>
            </div>
          </div>
        </div>
        <div id="succ" class="alert alert-success" role="alert" style="display:none">
          commande(s) retournée(s) avec succée(s)</div>
          <div id="validee" class="alert alert-success" role="alert" style="display:none">
          commande(s) validée(s) avec succée(s)</div>
          <div id="preparee" class="alert alert-success" role="alert" style="display:none">
          commande(s) preparee(s) avec succée(s)</div>
          <div id="livree" class="alert alert-success" role="alert" style="display:none">
          commande(s) livree(s) avec succée(s)</div>
        <div id="err" class="alert alert-danger" role="alert" style="display:none">
          erreur(s)</div>
        <div class="row">
          <div class="receipt-header receipt-header-mid">
            <div class="col-xs-8 col-sm-8 col-md-8 text-left">

            </div>

          </div>
        </div>

        <div>

      
        </div>
       <!--  @if(Auth::user()->Role =='admin')
        <form method="post" action="{{ route('validercommande' ,  ['id' => $commande->id])}}">
          @elseif(Auth::user()->Role =='agent')
          <form method="post" action="{{ route('preparercommande' ,  ['id' => $commande->id])}}">
            @elseif(Auth::user()->Role =='livreur')
            <form method="post" action="{{ route('livrercommande' ,  ['id' => $commande->id])}}">
              @endif -->

              @csrf
              <div class="tab-content pt-2">
                <table class="table table-bordered">

                  <tbody>
                    <tr class="labeldetail ">
                      <th >Nom:</th>
                      <td class=" labeldetail1"data-id="$commande->id" id="nom-val">{{$commande->Nom}}</td>
                    <tr class="labeldetail ">
                      <th>Prénom:</th>
                      <td class=" labeldetail1"id="prenom-val">{{$commande->Prenom}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>téléphone:</th>
                      <td class=" labeldetail1" id="Telephone-val">{{$commande->Telephone}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Addresse mail:</th>
                      <td class=" labeldetail1" id="email-val">{{$commande->Email}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Adresse:</th>
                      <td id="Adresse1-val">{{$commande->Adresse}}</td>
                    </tr>

                    <tr class="labeldetail ">
                      <th>Governorat:</th>
                      <td id="governorat-val">{{$commande->Governorat}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Ville</th>
                      <td id="ville-val">{{$commande->Ville}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Code postal</th>
                      <td id="code_postal-val">{{$commande->Code_postal}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>ID Commande:</th>
                      <td id="ID_commande-val">{{$commande->ID_commande}} </td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Poids:</th>
                      <td id="poids-val">{{$commande->Poids}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Mode de paiment:</th>
                      <td id="paiment-val">{{$commande->Paiement}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>Total prix:</th>
                      <td id="prix-val">{{$commande->Prix}}</td>
                    </tr>
                    <tr class="labeldetail ">
                      <th>description:</th>
                      <td id="description-val">{{$commande->Description}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>Etat:</th>
                    <tr class="labeldetail ">
                      <th>Description:</th>
                      <td id="description-val">{{$commande->Etat}}</td>
                    </tr>
                  </tbody>

                </table>
              </div>


              <?php
              if ((Auth::user()->Role == 'admin') &&(($commande->Etat)=='declaree')) {
                echo '                 
                   <button class="btn4" id="valider" data-id="' . $commande->id . '" type="button">valider</button>
                ';
              } elseif ((Auth::user()->Role == 'agent') &&(($commande->Etat)=='affecter a un agent')){
                echo ' 
                <button class="btn4" id="preparer" data-id="' . $commande->id . '" type="button">preparer</button>
                ';
              } elseif ((Auth::user()->Role == 'livreur')&&(($commande->Etat)=='affecter a un livreur')) {
                echo ' 
                <button class="btn4" id="livrer" data-id="' . $commande->id . '" type="button">livrer</button>

                ';
                echo '           
                   <button class="btn4" id="retourner" data-id="' . $commande->id . '" type="button">retournée</button>
                ';
              } else {
                echo '';
              }
              ?>
            </form>

       </div>
            </div>

            @endsection