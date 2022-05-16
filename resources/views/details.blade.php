



@extends("layouts.admin")
 @section("content")
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des commandes déclarées</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>
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
      <div class="form-row table-responsive">
        <table class="table">
  
          <tbody>
            <tr class="space-row">
              <th>date:</th>
              <td id="date-val"></td>
            </tr>
            <tr class="space-row">
              <th>temps:</th>
              <td id="temps-val"></td>
            </tr>
            <tr class="space-row">
              <th>nom:</th>
              <td id="nom-val">{{$commande->Nom}}</td>
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
              <th>Adresse 1:</th>
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


      <?php
if(Auth::user()->Role =='admin')
{
echo ' <button type="submit">valider</button>';
}
 
elseif(Auth::user()->Role =='agent')
{
  echo ' <button type="submit">preparer</button>';
}
elseif(Auth::user()->Role =='livreur')
{
  echo ' <button type="submit">livrer</button>';
}
else
{
echo '';
}
?>
    </form>

  </main>
  @endsection
 