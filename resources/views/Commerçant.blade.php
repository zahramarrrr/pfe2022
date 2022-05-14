@extends("layouts.commerçant")
@section("content")
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commandes déclarées</h1>
  </div>

  @if(Session::has('commande_delete'))
  <span>{{Session::get('commande_delete')}}</span>
  @endif
  <div id="tablecommandes_wrapper" class="dataTables_wrapper dt-semanticUI no-footer">
    <div class="ui stackable grid">

    </div>
    <div class="row dt-table">
      <div class="sixteen wide column">
        <table id="table" class="ui celled table" style="width:100%">
          <thead>
            <tr>
              <th class="sorting sorting_asc" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID commande: activer pour trier la colonne par ordre décroissant" style="width: 149px;">ID commande</th>
              <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="Date de commande: activer pour trier la colonne par ordre croissant" style="width: 149px;">Nom et prénom</th>
              <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="téléphone: activer pour trier la colonne par ordre croissant" style="width: 149px;">téléphone</th>
              <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="téléphone: activer pour trier la colonne par ordre croissant" style="width: 149px;">Gouvernorat</th>
              <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="téléphone: activer pour trier la colonne par ordre croissant" style="width: 149px;">Date</th>

              <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="Etat actuel: activer pour trier la colonne par ordre croissant" style="width: 149px;">Etat actuel</th>
              <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label=": activer pour trier la colonne par ordre croissant" style="width: 149px;"></th>
            </tr>

          </thead>
          <tbody>
            @foreach($commandes as $commande)
            <tr class="odd">

              <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$commande->ID_commande}}</td>
              <td>{{$commande->Nom}} {{$commande->Prenom}}</td>
              <td>{{$commande->Telephone}}</td>
              <td>{{$commande->Governorat}}</td>
              <td>{{$commande->created_at}}</td>
              <td><span class="badge bg-success">{{$commande->Etat}}</span></td>

              <td><a href="{{route('commande.details' , ['id' => $commande->id]) }}"><i class="material-icons"></i></a>

              </td>
            </tr>
            @endforeach

          </tbody>

        </table>
      </div>
    </div>

  </div>
  </div>
  @endsection