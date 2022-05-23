@extends($type)
@section("content")
<<main id="main" class="main">

  <div class="col-md-12">
    <div class="row">

      <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
        <div class="row">
          <div class="receipt-header">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="receipt-left">
                <img alt="iamgurdeeposahan" src='{{asset("assets/img/commande.png") }}' style="width: 71px; border-radius: 43px;">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-right">
              <div class="receipt-right">
                <h5>Company Name.</h5>
                <p>+1 3649-6589 <i class="fa fa-phone"></i></p>
                <p>company@gmail.com <i class="fa fa-envelope-o"></i></p>
                <p>USA <i class="fa fa-location-arrow"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div id="succ" class="alert alert-success" role="alert" style="display:none">
    commande(s) retournée(s) avec succée(s)</div>
  <div id="err" class="alert alert-danger" role="alert" style="display:none">
    erreur(s)</div>
        <div class="row">
          <div class="receipt-header receipt-header-mid">
            <div class="col-xs-8 col-sm-8 col-md-8 text-left">

            </div>

          </div>
        </div>

        <div>

          <?php // dd($commandes); 
          ?>

        </div>
        @if(Auth::user()->Role =='admin')
        <form method="post" action="{{ route('validercommande' ,  ['id' => $commande->id])}}">
          @elseif(Auth::user()->Role =='agent')
          <form method="post" action="{{ route('preparercommande' ,  ['id' => $commande->id])}}">
            @elseif(Auth::user()->Role =='livreur')
            <form method="post" action="{{ route('livrercommande' ,  ['id' => $commande->id])}}">
              @endif

              @csrf
              <div class="tab-content pt-2">
                <table class="table table-bordered">

                  <tbody>
                    <tr class="space-row">
                      <th>nom:</th>
                      <td data-id="$commande->id" id="nom-val">{{$commande->Nom}}</td>
                    <tr class="space-row">
                      <th>prénom:</th>
                      <td id="prenom-val">{{$commande->Prenom}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>téléphone:</th>
                      <td id="telephone-val">{{$commande->Telephone}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>Addresse mail:</th>
                      <td id="email-val">{{$commande->Email}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>Adresse:</th>
                      <td id="adresse1-val">{{$commande->Adresse}}</td>
                    </tr>

                    <tr class="space-row">
                      <th>Governorat:</th>
                      <td id="governorat-val">{{$commande->Governorat}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>ville</th>
                      <td id="ville-val">{{$commande->Ville}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>code postal</th>
                      <td id="code_postal-val">{{$commande->Code_postal}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>ID Commande:</th>
                      <td id="ID_commande-val">{{$commande->ID_commande}} </td>
                    </tr>
                    <tr class="space-row">
                      <th>poids:</th>
                      <td id="poids-val">{{$commande->Poids}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>mode de paiment:</th>
                      <td id="paiment-val">{{$commande->Paiement}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>total prix:</th>
                      <td id="prix-val">{{$commande->Prix}}</td>
                    </tr>
                    <tr class="space-row">
                      <th>description:</th>
                      <td id="description-val">{{$commande->Description}}</td>
                    </tr>

                  </tbody>

                </table>
              </div>
              <button id="retourner" data-id="{{$commande->id}}" type="button">retournée</button>


              <?php
              if (Auth::user()->Role == 'admin') {
                echo ' <button type="submit">valider</button>';
              } elseif (Auth::user()->Role == 'agent') {
                echo ' <button type="submit">preparer</button>';
              } elseif (Auth::user()->Role == 'livreur') {
                echo ' <button type="submit">livrer</button>';
                echo '';

              } else {
                echo '';
              }
              ?>
            </form>

            </main>

            @endsection