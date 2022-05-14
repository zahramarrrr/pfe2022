@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Liste des commandes validées</h1>
        <nav>
            <ol class="breadcrumb">
            </ol>
        </nav>
    </div>

    @if(Session::has('commande_delete'))
    <span>{{Session::get('commande_delete')}}</span>
    @endif


    <div class="container">
        <div class="height d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                affecter un agent
              </button>
        </div>
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
                                    <td></td>
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
  <!-- Modal -->
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Basic Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    @if(Session::has('affecter'))
                <span>{{Session::get('affecter')}} </span>
                @endif

                <div>
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th>ID agent</th>
                                <th>Nom</th>
                                <th>email</th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach($agents as $agent)

                            <tr>

                                <td><img src="assets/img/avatar.png" alt="" class="thumb-sm rounded-circle mr-2">{{$agent->id}}</td>
                                <td>{{$agent->Nom}}</td>
                                <td>{{$agent->email}}</td>
                                <td><button class='affectagent' data-id="{{$agent->id}}"><input type="button" value="Affecter"></button></td>


                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->

            </main>



@endsection