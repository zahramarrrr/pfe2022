@extends("layouts.Agent")
@section("content")
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commandes à préparer</h1>
  </div>

  @if(Session::has('preparer'))
  <span>{{Session::get('preparer')}}</span>
  @endif
  <div id="prep" class="alert alert-success" role="alert" style="display:none">
commande(s) préparée(s) avec succée(s)</div>
  <div class="container">
  <button class='preparation' id="preparer">Préparation</button>

    <div class="height d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="col-xl-12">
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
                    <th>Details</th>

                  </tr>

                </thead>
                <tbody>

                  @foreach($commandes as $com)
                  <tr class="odd">
                  <tr id="tr_{{$com->id}}">
                    <td><input type="checkbox" class="sub_chk" data-id="{{$com->id}}"></td>

                    <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$com->ID_commande}}</td>
                    <td>{{$com->Date_Affect_Agent}}</td>
                    <td>{{$com->Description}}</td>

                    <td>{{$commercant->societe}}</td>
                    <td><span class="badge bg-success">{{$com->Etat}}</span></td>

                    <td>
                      <a href="{{route('commande.details' , ['id' => $com->id]) }}"><i class="material-icons"></i></a>
                    </td>




                    @endforeach
                </tbody>
              </table>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection