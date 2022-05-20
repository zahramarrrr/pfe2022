@extends("layouts.admin")
 @section("content")
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Liste des agents d'entrepot</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>

    @if(Session::has('delete'))
    <span>{{Session::get('delete')}}</span>
    @endif

    <div class="container">
    <button type="button" class="btn4" onclick="window.location.href ='ajoutagent'" ></i> Ajouter</button>
</div>
<div class="row">
        <div class="col-xl-12">
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
                  @foreach($agents as $agent)
                  <tr>

                    <td><img src="assets/img/avatar.png" alt="" class="thumb-sm rounded-circle mr-2">{{$agent->id}}</td>
                   
                    <td>{{$agent->Nom}}</td>
                    <td>{{$agent->Prenom}}</td>
                    <td>{{$agent->adresse}}</td>
                    <td>{{$agent->email}}</td>
                    <td>{{$agent->telephone}}</td>
                
                  <td>  <a href="Deletepersonnel/{{$agent->id}}" ><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>




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



