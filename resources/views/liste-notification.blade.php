

@extends("layouts.admin")
@section("content")
<?php

use App\Models\Commande;

?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des notifications</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>


    

    <div class="col-lg-12 stretch-card">
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">
            <table id='table' class="table table-bordered">
              <thead>
                <tr>

                  <th> Notifieur </th>

                  <th> text de notification </th>
                  <th> ID commande </th>
                  <th> Etat </th>
                  <th>details</th>



                </tr>
              </thead>
              <tbody>
                @foreach($notification as $n)
                <?php

$com = Commande::where('id', $n->ID_commande)->first();
?>
                <tr id="tr_{{$com->id}}">

                  <td> {{$n->Notifieur}}</td>
                  <td> {{$n->Text_Notif}}</td>
    
                  <td> {{$n->ID_commande}}</td>
                  <td> {{$com->Etat}}</td>

                  <td> <a href="{{route('commande.details' , ['id' => $com->id]) }}"> details</a></td>

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


