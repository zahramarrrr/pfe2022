@extends("layouts.Agent")
@section("content")
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commandes à préparer</h1>
  </div>

  
    <div id="err_preparation" class="alert alert-danger" role="alert" style="display:none">erreur</div>
    <div id="prep" class="alert alert-success" role="alert" style="display:none">
      commande(s) préparée(s) avec succée(s)</div>
    <button class='btn4' id="preparation">Préparation</button>

  <div class="row">
    <div>
      <div class="card">

        <div class="card-body">

          <table id="table" class="ui celled table" style="width:100%">
            <thead>
              <tr>
                <th width="50px"><input type="checkbox" id="master"></th>
                <th>ID commande</th>
                <th>Date d'affectation</th>
                <th>Description</th>
                <th>Société commerçante</th>

                <th>Etat actuel</th>
                <th>preparer</th>
                <th>Details</th>

              </tr>

            </thead>
            <tbody>

              @foreach($commandes as $com)
              <tr id="tr_{{$com->id}}">
                <td><input type="checkbox" class="sub_chk" data-id="{{$com->id}}"></td>

                <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$com->ID_commande}}</td>
                <td>{{$com->Date_Affect_Agent}}</td>
                <td>{{$com->Description}}</td>

                <td>{{$commercant->societe}}</td>
                <td><span class="badge bg-success">{{$com->Etat}}</span></td>
                <td> <button  data-id="{{$com->id}}" id="preparer" type="button">preparer</button>
                </td>

                <td>
                  <a href="{{route('commande.details' , ['id' => $com->id]) }}"><i class="material-icons"></i></a>
                </td>




              </tr>
              @endforeach

            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
</main>

@endsection