@extends("layouts.commerçant")
@section("content")
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commandes déclarées</h1>
    <nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
				<li class="breadcrumb-item active">liste des commandes déclarées</li>
			</ol>
		</nav>
  </div>
  

  @if(Session::has('commande_delete'))
  <span>{{Session::get('commande_delete')}}</span>
  @endif
  <div id="tablecommandes_wrapper" class="dataTables_wrapper dt-semanticUI no-footer">
    <div class="ui stackable grid">

    </div>
   
    <div class="card-body">

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

              <td class="sorting_1"><img src="assets/img/comm.png" alt="" class="thumb-sm rounded-circle ">{{$commande->ID_commande}}</td>
              <td>{{$commande->Nom}} {{$commande->Prenom}}</td>
              <td>{{$commande->Telephone}}</td>
              <td>{{$commande->Governorat}}</td>
              <td>{{$commande->created_at}}</td>
              <td><span class="<?php if ($commande->Etat == "declaree") echo 'badge badge-secondary' ;
              else if ($commande->Etat == "validee") echo 'badge badge-primary' ; 
              else if ($commande->Etat == "affecter a un agent") echo 'badge badge-warning' ;
              else if ($commande->Etat == "preparee") echo 'badge badge-danger' ;

              else if ($commande->Etat == "affecter a un livreur") echo 'badge badge-info' ;
              else if ($commande->Etat == "livree") echo 'badge badge-success' ;
              else if ($commande->Etat == "retournee") echo 'badge badge-dark' ;


               ?>" style="font-size:0.8rem;">{{$commande->Etat}}</span></td>

              <td><a href="{{route('commande.details' , ['id' => $commande->id]) }}"><i class="material-icons " style="font-size:2rem;" ></i></a>

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