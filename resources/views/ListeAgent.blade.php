@extends("layouts.admin")
 @section("content")
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>La liste des agents  d'entrepôt</h1>
     
    </div>

   

    <div class="container">
    <button type="button" class="btn4" onclick="window.location.href ='ajoutagent'" ></i> Ajouter</button>
</div>
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
                    <td>{{$agent->Adresse}}</td>
                    <td>{{$agent->email}}</td>
                    <td>{{$agent->Telephone}}</td>
                
                  <td>    
                <form method="POST" action="{{ route('personnel.delete', $agent->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `vous voulez vraiment supprimer cet agent ?`,
              text: "Si vous le supprimez, il disparaîtra pour toujours",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection



