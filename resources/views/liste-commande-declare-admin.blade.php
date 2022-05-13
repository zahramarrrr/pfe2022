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







  <button class='validation' id="valider"><input type="button" value="valider"></button>
  </button>



  <div class="container">
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
                  <td>{{$commande->Date}}</td>
                  <td>{{$commande->Telephone}}</td>
                  <td>
                    <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">Details
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn mb-2 mb-md-0 btn-tertiary btn-sm btn-tag mr-4">Etat
                      actuel
                    </button>
                  </td>


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



  </section>

</main><!-- End #main -->

@endsection