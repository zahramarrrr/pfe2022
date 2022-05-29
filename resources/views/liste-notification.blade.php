
@extends("layouts.admin")
@section("content")
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
          <h4 class="card-title">Table with contextual classNames</h4>
          <p class="card-description"> Add className <code>.table-{color}</code></p>
          <div class="table-responsive">
            <table id='table' class="table table-bordered">
              <thead>
                <tr>
                  <th> # </th>
                  <th> id notification </th>
                  <th> id personnel </th>

                  <th> text de notification </th>
                  <th> ID commande </th>
                </tr>
              </thead>
              <tbody>
                @foreach($notification as $notif)

                <tr class="table-info">
                  <td> #</td>

                  <td> {{$notif->id}}</td>
                  <td> {{$notif->ID_Personnel}}</td>

                  <td> {{$notif->texte}} </td>
                  <td> {{$notif->ID_commande}}</td>

                <!--  <td> <a href="{{route('commande.details' , ['id' => $notif->id]) }}"> details</a></td>
-->
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


