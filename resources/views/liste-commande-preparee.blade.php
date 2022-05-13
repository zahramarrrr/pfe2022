@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Liste des commandes préparées</h1>
        <nav>
            <ol class="breadcrumb">
            </ol>
        </nav>
    </div>

    @if(Session::has('commande_delete'))
    <span>{{Session::get('commande_delete')}}</span>
    @endif


    <div class="container">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="height d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-primary" id="affecter" data-toggle="modal" data-target="#exampleModal">
                            affecter livreur</button>
                    </div>
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

                                @foreach($commandes as $commande)

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


</main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header float-right">
                <h5>User details</h5>
                <div class="text-right"><i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i></div>
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

                            @foreach($livreurs as $livreur)

                            <tr>

                                <td><img src="assets/img/avatar.png" alt="" class="thumb-sm rounded-circle mr-2">{{$livreur->id}}</td>
                                <td>{{$livreur->Nom}}</td>
                                <td>{{$livreur->email}}</td>
                                <td><button class='affectlivreur' data-id="{{$livreur->id}}"><input type="button" value="Affecter"></button></td>


                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">fermer</button>
        </div>
    </div>
</div>
@endsection
