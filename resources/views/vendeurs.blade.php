@extends('layouts.app-admin') 

@section('content3')
<main>
    <h2 class="text-center mt-3">liste des Vendeurs</h3>
    <div class="ajout">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#VendeurModal" data-bs-whatever="@mdo"><span><i class="fa-solid fa-circle-plus"></i></span> ajouter</button>

        <div class="modal fade" id="VendeurModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="VendeurModalLabel">Ajouter un Vendeur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="row">
                    <div class="col">
                        <label for="recipient-name" class="col-form-label float-start">Nom:</label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="col">  
                        <label for="recipient-name" class="col-form-label float-start">Prénom:</label>
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="recipient-name" class="col-form-label float-start">Email:</label>
                        <input type="email" class="form-control" >
                    </div>
                    <div class="col">  
                        <label for="recipient-name" class="col-form-label float-start">Téléphone:</label>
                        <input type="tel" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="recipient-name" class="col-form-label float-start">Id du Domaine:</label>
                        <input type="text" class="form-control" >
                    </div>

                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="search-bar">
        <input type="search" placeholder="Rechercher..." name="" id="search-bar">
        <button type="submit">Rechercher</button>
    </div>
    <div class="table-cont">
        <table>
            <thead>                
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Id domaine</th>
                    <th>Actions</th>                 
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->nom}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>{{$user->demandes as $demande}}</td>

                    </tr>
                @endforeach --}}

                {{-- @foreach ($users->demandes as $demande)
                    <tr>
                        {{$demande->nom}}
                    </tr>
                    
                @endforeach
                 --}}
            </tbody>
        </table>
    </div>
    
</main>
@endsection