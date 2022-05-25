@extends("layouts.admin")
@section("content")
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Liste des commandes retournées</h1>
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
                  
                    <div class="card-body">


                    <table id="table" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="50px"><input type="checkbox" id="master"></th>
                                    <th>ID commande</th>
                                    <th>Date de preparation</th>
                                    <th>Societe commerçante</th>
                                    <th>livreur</th>

                                    <th>Details</th>
                                    <th>Etat actuel</th>

                                </tr>

                            </thead>
                            <tbody>
                                @if($commande->count())

                                @foreach($commande as $cmd)

                             
                                <tr id="tr_{{$cmd->id}}">
                                    <td><input type="checkbox" class="sub_chk" data-id="{{$cmd->id}}"></td>
                                    <td><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$cmd->ID_commande}}</td>
                                    <td>{{$cmd->Date_Preparation}}</td>
                                    <td>{{$commercant->societe}}</td>

                                    <td>{{$cmd->Telephone}}</td>
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


</main>

@endsection
