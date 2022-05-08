
@extends("layouts.livreur")
 @section("content")
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des commandes à préparer</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>

    @if(Session::has('preparer'))
    <span>{{Session::get('preparer')}}</span>
    @endif
    <div id="tablecommandes_wrapper" class="dataTables_wrapper dt-semanticUI no-footer">
      <div class="ui stackable grid">

      </div>
      <div class="row dt-table">
        <div class="sixteen wide column">
          <table id="tablecommande_agent" class="ui celled table dataTable no-footer" style="width: 100%;" aria-describedby="tablecommandes_info">
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

              @foreach($commandes as $com)
              <tr class="odd">

                <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$com->ID_commande}}</td>
                <td>{{$com->Date}}</td>
                <td>{{$com->Telephone}}</td>
                <td> <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">{{$com->Etat}}</button></td>

                <td>
                  <button class='prep' data-id="{{$com->id}}"><input type="button" value="preparer"></button>
                </td>


              </tr>


              @endforeach
            </tbody>

          </table>

        </div>
      </div>

    </div>
    <div class="flex items-center justify-end mt-4">


  </main>
@endsection
 