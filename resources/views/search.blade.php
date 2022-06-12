@extends('view')
@section('content')

<table class="table table-hover mb-0">
                            <thead>
                                <tr class="align-self-center">
                                   
                                    <th>ID commande</th>
                                    <th>Date de commande</th>
                                    <th>téléphone</th>
                                    <th>Statut</th>
                                    <th></th>
                                </tr>

                            </thead>
                            <tbody>
                         
                            @foreach($commande as $commande)

                                <tr>
                                    
                                    <td><img src="assets/img/avatar4.png" alt="" class="thumb-sm rounded-circle mr-2">{{$commande->ID_commande}}</td>
                                    <td>{{$commande->date}}</td>
                                    <td>{{$commande->Telephone}}</td>
                                    <td> <span class="badge badge-success m-0">Declarée</span></td>
                                    <td><a href="#" class="view"  data-toggle="tooltip" data-original-title="View" data-toggle="modal" data-target="#infos" class="btn btn-primary"><i class="material-icons"></i></a>
                                         <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a></span>
                                         
                                         <button type="button" data-toggle="modal" data-target="#infos" class="btn btn-primary">details</button>
                                   <a href="edit-commande/{{$commande->id}}">edit </a>
                                   <a href="/delete-commande/{{$commande->id}}">delete</a>
                                        </td>
                                        </tr>
                                       
                                        @endforeach

                                </tbody>
                        </table>
@endsection