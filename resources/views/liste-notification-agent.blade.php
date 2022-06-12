
<?php

use App\Models\Commande;

?>
@extends("layouts.agent")
@section("content")
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des notifications</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>


    <div id="err_preparation" class="alert alert-danger" role="alert" style="display:none">erreur</div>
  <div id="prep" class="alert alert-success" role="alert" style="display:none">
    commande(s) préparée(s) avec succée(s)</div>


    <div class="col-lg-12 stretch-card">
      <div class="card">
        <div class="card-body">
        <button class='btn4' id="preparation">Préparation</button>

          <div class="table-responsive">
            <table id='table' class="table table-bordered">
              <thead>
                <tr>
                <th width="50px"><input type="checkbox" id="master"></th>

                  <th> Notifieur </th>

                  <th> text de notification </th>
                  <th> ID commande </th>
                  <th> date affectation</th>
                  <th> Etat </th>

                  <th> Action </th>


                </tr>
              </thead>
              <tbody>
                @foreach($notification as $n)
                <?php

$com = Commande::where('id', $n->ID_commande)->first();
?>
                <tr id="tr_{{$com->id}}">
                    <td><input type="checkbox" class="sub_chk" data-id="{{$com->id}}"></td>

                  <td> Admin</td>
                  <td> {{$n->Text_Notif}}</td>
    
                  <td> {{$n->ID_commande}}</td>
                  <td> {{$com->Date_Affect_Agent}}</td>
                  <td> {{$com->Etat}}</td>

                <!--  <td> <a href="{{route('commande.details' , ['id' => $n->id]) }}"> details</a></td>
-->

<td> <button onclick="getId(this);" id="{{$com->id}}" type="button">preparer</button>
                </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>





    <main>
    @endsection


