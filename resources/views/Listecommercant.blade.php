@extends("layouts.admin")
@section("content")

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Liste des commerçants</h1>
    <nav>
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div>
  <div class="container">
    <button type="button" class="btn4" onclick="window.location.href ='ajoutcom'" ></i> Ajouter</button>
</div>

  <div class="dataTable-top">
    <div class="dataTable-dropdown" style="float:right">



      <div class="row">
        <div class="col-lg-3">

          <div class="accordion" id="accordionExample">

            <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">


          </div>
        </div>



      </div>
    </div>



    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="dataTable-dropdown" style="float:right">



            
          <div class="card-body">
            <table id="table" class="ui celled table" style="width:100%">
                              <thead>

                  <th>ID commerçant</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Adresse</th>
                  <th>Adresse d'email</th>
                  <th>Télèphone</th>
                  <th></th>


                </tr>

              </thead>
              <tbody>
                @foreach($comm as $c)
                <tr>

                  <td><img src="assets/img/avatar.png" alt="" class="thumb-sm rounded-circle mr-2">{{$c->id}}</td>

                  <td>{{$c->Nom}}</td>
                  <td>{{$c->Prenom}}</td>
                  <td>{{$c->adresse}}</td>
                  <td>{{$c->email}}</td>
                  <td>{{$c->telephone}}</td>

                  <td> <a href="Deletepersonnel/{{$c->id}}"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>




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



  </section>

</main><!-- End #main -->

@endsection