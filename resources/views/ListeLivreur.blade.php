@extends("layouts.admin")
 @section("content")
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>La liste des livreurs </h1>
      
    </div>


    <div >
    <button type="button" class="btn4" onclick="window.location.href ='ajoutlivreur'" ></i> Ajouter</button>
</div>
        <div class="col-xl-18">
          <div class="card">
           

                
             
          <div class="card-body">
            <table id="table" class="ui celled table" style="width:100%">
                              <thead>
                                <tr>

                    <th>ID Agent d'entrepot</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Adresse d'email</th>
                    <th>Télèphone</th>
                    <th></th>


                  </tr>

                </thead>
                <tbody>
                  @foreach($livreur as $l)
                  <tr>

                    <td><img src="assets/img/avatar.png" alt="" class="thumb-sm rounded-circle mr-2">{{$l->id}}</td>
                   
                    <td>{{$l->Nom}}</td>
                    <td>{{$l->Prenom}}</td>
                    <td>{{$l->Adresse}}</td>
                    <td>{{$l->email}}</td>
                    <td>{{$l->Telephone}}</td>

                  <td>  <a href="Deletepersonnel/{{$l->id}}" ><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>




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
@endsection



