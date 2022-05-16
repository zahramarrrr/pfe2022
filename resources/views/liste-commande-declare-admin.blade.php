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


  <div id="err_validation" class="alert alert-danger" role="alert" style="display:none">
selectionner une commande</div>


  <div id="valider" class="alert alert-success" role="alert" style="display:none">
commande(s) validée(s) avec succée(s)</div>

  <button class='validation' id="valider"><input type="button" value="valider"></button>
  </button>



  <div class="container" id="reload_declaree">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">

          <div class="card-body">

            <table id="table" class="ui celled table" style="width:100%">
              <thead>
                <tr>
                  <th width="50px"><input type="checkbox" id="master"></th>
                  <th>ID commande</th>
                  <th>Date de commande</th>
                  <th>Societe commerçante</th>

                  <th>téléphone</th>
                  <th>Details</th>
                  <th>Etat actuel</th>

                </tr>

              </thead>
              <tbody>
                @if($commandes->count())

                @foreach($commandes as $key => $commande)

                <tr id="tr_{{$commande->id}}">
                  <td><input type="checkbox" class="sub_chk" data-id="{{$commande->id}}"></td>
                  <td><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$commande->ID_commande}}</td>
                  <td>{{$commande->created_at}}</td>
                  <td>{{$commercant->societe}}</td>

                  <td>{{$commande->Telephone}}</td>
                  <td>
                  <a href="{{route('commande.details' , ['id' => $commande->id]) }}"><i class="material-icons"></i></a>
                  </td>
                  
                  <td><span class="badge bg-success">{{$commande->Etat}}</span></td>

                 


                </tr>

                @endforeach
                @endif

              </tbody>

            </table>

          </div>
        </div>
      </div>
    </div>
  </div>




</main><!-- End #main -->

@endsection