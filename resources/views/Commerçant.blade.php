
 @extends("layouts.commerçant")
 @section("content")
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des commandes déclarées</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>

    @if(Session::has('commande_delete'))
    <span>{{Session::get('commande_delete')}}</span>
    @endif
    <div id="tablecommandes_wrapper" class="dataTables_wrapper dt-semanticUI no-footer">
      <div class="ui stackable grid">

      </div>
      <div class="row dt-table">
        <div class="sixteen wide column">
          <table id="tablecommandes" class="ui celled table dataTable no-footer" style="width: 100%;" aria-describedby="tablecommandes_info">
            <thead>
              <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID commande: activer pour trier la colonne par ordre décroissant" style="width: 149px;">ID commande</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="Date de commande: activer pour trier la colonne par ordre croissant" style="width: 149px;">Date de commande</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="téléphone: activer pour trier la colonne par ordre croissant" style="width: 149px;">téléphone</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label="Etat actuel: activer pour trier la colonne par ordre croissant" style="width: 149px;">Etat actuel</th>
                <th class="sorting" tabindex="0" aria-controls="tablecommandes" rowspan="1" colspan="1" aria-label=": activer pour trier la colonne par ordre croissant" style="width: 149px;"></th>
              </tr>

            </thead>
            <tbody>
              @foreach($commandes as $commande)
              <tr class="odd">

                <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$commande->ID_commande}}</td>
                <td>{{$commande->Date}}</td>
                <td>{{$commande->Telephone}}</td>
                <td> <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">{{$commande->Etat}}</button></td>

                <td><a href="#" data-toggle="modal" data-target="#infos"><i class="material-icons"></i></a>

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


  