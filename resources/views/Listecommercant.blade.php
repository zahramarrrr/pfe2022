@extends("layouts.admin")
@section("content")

<main id="main" class="main">
  <div class="pagetitle">
    <h1>La liste des commerçants</h1>

  </div>
  <div class="container">
    <button type="button" class="btn4" onclick="window.location.href ='ajoutcom'"></i> Ajouter</button>
  </div>

    



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

                    <td><img src='{{asset("assets/img/avatar.png") }}' alt="" class="thumb-sm rounded-circle mr-2">{{$c->id}}</td>

                    <td>{{$c->Nom}}</td>
                    <td>{{$c->Prenom}}</td>
                    <td>{{$c->Adresse}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->Telephone}}</td>

<<<<<<< Updated upstream
                    <td> <a href="Deletepersonnel/{{$c->id}}"><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
=======
                  <td>  <a href="Deletepersonnel/{{$c->id}}" ><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
>>>>>>> Stashed changes




                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>

            </div>
          </div>
        </div>
      </div>
<<<<<<< Updated upstream
    </div>
=======
   
>>>>>>> Stashed changes



    </section>

</main><!-- End #main -->

@endsection