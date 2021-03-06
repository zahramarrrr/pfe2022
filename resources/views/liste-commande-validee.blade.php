<?php

use App\Models\User;

?>
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


   

  

    <div class="container">
        
            <button type="button" class="btn4" data-bs-toggle="modal" data-bs-target="#basicModal">
                Affecter un agent d'entrepôt
            </button>
        </div>
      
            <div class="col-xl-12">
                <div class="card">

                    <div class="card-body">

               
<div            style=" justify-content: space-between";
>
                        <table id="table" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="50px"><input type="checkbox" id="master"></th>
                                    <th>ID commande</th>
                                    <th>Date de validation</th>
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
                                    <td>{{$commande->Date_Validation}}</td>
                                    <?php
                                         $commercant = User::where('id', $commande->ID_Commercant)->first();

                         if (is_null($commande->ID_Commercant)){
                           $societe="admin";
                         
                         }
                         else        $societe=$commercant->NomSociete;

                         
                         
                                           ?>
                                    <td>{{$societe}}</td>
                                    <td>{{$commande->Telephone}}</td>
                                    <td>
                                        <a href="{{route('commande.details' , ['id' => $commande->id]) }}"><i class="bi bi-eye-fill"></i></a>
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
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div id="affected" class="alert alert-success" role="alert" style="display:none">
                        commande(s) affectée(s) avec succée(s)</div>

                    <div id="erreur" class="alert alert-danger" role="alert" style="display:none">
                        erreur</div>
                    <div>
                        <table class="ui celled table">
                            <thead>
                                <tr class=" labeldetail1">
                                    <th>ID </th>
                                    <th>Nom</th>
                                    <th>Commandes </th>
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach($agents as $agent)
                                <?php
                                $cmd = DB::table('commandes')->where('ID_Agent', $agent->id)->whereDay('Date_Affect_Agent', now())->get();

                                ?>
                                <tr class="labeldetail">

                                    <td>{{$agent->id}}</td>
                                    <td>{{$agent->Nom}}</td>
                                    <td>{{count($cmd)}}</td>

                                    <td><input class="btn4" class='affectagent' data-id="{{$agent->id}}"  type="button" value="Affecter"></td>


                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- End Basic Modal-->

</main>



@endsection