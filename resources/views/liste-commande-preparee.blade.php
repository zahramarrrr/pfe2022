<?php

use App\Models\User;

?>
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


    <div class="container">
    <button type="button" class="btn4" data-bs-toggle="modal" data-bs-target="#basicModal">
                affecter un livreur
            </button>
</div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="height d-flex justify-content-center align-items-center">
                
                    </div>
                    <div class="card-body">


                    <table id="table" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="50px"><input type="checkbox" id="master"></th>
                                    <th>ID commande</th>
                                    <th>Date de preparation</th>
                                    <th>Societe commerçante</th>

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
                                    <td>{{$commande->Date_Preparation}}</td>
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
<!-- Modal -->

<div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         
                </div>
                <div class="modal-body">

                <div id="err_effect_livreur" class="alert alert-danger" role="alert" style="display:none">
erreur</div>
<div id="affecter_livreur" class="alert alert-success" role="alert" style="display:none">
commande(s) validée(s) avec succée(s)</div>
                    <div>
                        <table class="ui celled table">
                            <thead>
                                <tr>
                                    <th>ID livreur</th>
                                    <th>Nom</th>
                                    <th>commandes affectées</th>
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach($livreurs as $livreur)
                                <?php
                                $cmd = DB::table('commandes')->where('ID_livreur', $livreur->id)->whereDay('Date_Affect_livreur', now())->get();

                                ?>
                                <tr>

                                    <td>{{$livreur->id}}</td>
                                    <td>{{$livreur->Nom}}</td>
                                    <td>{{count($cmd)}}</td>

                                    <td><button class='affectlivreur' data-id="{{$livreur->id}}"><input type="button" value="Affecter"></button></td>


                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- End Basic Modal-->
@endsection
