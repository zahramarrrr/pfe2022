@extends("layouts.livreur")
@section("content")
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commandes à livrée</h1>

    <button class='btn4' id="livrer">livraison</button>

  </div>


  <div id="livree" class="alert alert-success" role="alert" style="display:none">
    commande(s) livrée(s) avec succée(s)</div>
  <div id="erreur" class="alert alert-danger" role="alert" style="display:none">
    erreur(s)</div>
  <div class="container">
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
                    <th>Détails</th>
                    <th >Action</th>
                  </tr>

                </thead>
                <tbody>

                  @foreach($commande as $com)
                  <tr id="tr_{{$com->id}}">
                    <td><input type="checkbox" class="sub_chk" data-id="{{$com->id}}"></td>

                    <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$com->ID_commande}}</td>
                    <td>{{$com->Date_Affect_Agent}}</td>
                    <td>{{$com->Description}}</td>

                    <td>{{$commercant->societe}}</td>
                    <td><span class="badge bg-success" style="font-size:0.8rem;">{{$com->Etat}}</span></a>
                  </td>

                    <td>
                    <a href="{{route('commande.details' , ['id' => $com->id]) }}"><i class="bi bi-eye" style="font-size:2rem;"></i>
                    </td>
                    <td>    <span><i class="bi bi-truck" onclick="getId(this);"  id="{{$com->id}}"  type="button" style="font-size:2rem;"></i>

                   
</span></td>

                    

                  </tr>
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