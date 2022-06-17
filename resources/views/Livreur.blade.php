<?php

use App\Models\User;

?>
@extends("layouts.livreur")
@section("content")
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commandes livrées</h1>


  </div>


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
                  </tr>

                </thead>
                <tbody>

                  @foreach($commande as $com)
                  <tr id="tr_{{$com->id}}">
                    <td><input type="checkbox" class="sub_chk" data-id="{{$com->id}}"></td>

                    <td class="sorting_1"><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$com->ID_commande}}</td>
                    <td>{{$com->Date_Affect_Agent}}</td>
                    <td>{{$com->Description}}</td>

                    <?php
                    $commercant = User::where('id', $com->ID_Commercant)->first();

                    if (is_null($com->ID_Commercant)) {
                      $societe = "admin";
                    } else        $societe = $commercant->NomSociete;



                    ?>
                    <td>{{$societe}}</td>
                    <td><span class="badge bg-success" style="font-size:0.8rem;">{{$com->Etat}}</span></a>
                    </td>

                    <td>
                      <a href="{{route('commande.details' , ['id' => $com->id]) }}"><i class="bi bi-eye" style="font-size:2rem;"></i>
                    </td>
            



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