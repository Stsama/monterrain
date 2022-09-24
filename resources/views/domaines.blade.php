@extends('layouts.app-admin') 

@section('content3')
<main>
    <h2 class="text-center mt-3">liste des Domaines</h3>
    <div class="ajout">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DomaineModal"><span><i class="fa-solid fa-circle-plus"></i></span> ajouter</button>

<div class="modal fade" id="DomaineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DomaineModalLabel">Ajouter un Domaine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('AddDomaine')}} ">
          @csrf
         <div class="row">
            <div class="col">
                <label for="recipient-name" class="col-form-label float-start">Région:</label>
                <input type="text" class="form-control" name="region">
            </div>
            <div class="col">  
                <label for="recipient-name" class="col-form-label float-start">Ville:</label>
                <input type="text" class="form-control" name="ville">
              </div>
         </div>
         <div class="row">
            <div class="col">
                <label for="recipient-name" class="col-form-label float-start">Quartier:</label>
                <input type="text" class="form-control" name="quartier">
            </div>
            <div class="col">  
                <label for="recipient-name" class="col-form-label float-start">Superficie:</label>
                <input type="number" class="form-control" name="superficie">
              </div>
              <div class="col">  
                <label for="recipient-name" class="col-form-label float-start">Prix:</label>
                <input type="number" class="form-control" name="prix">
              </div>
         </div>
         <div class="row">
            <div class="col">
                <label for="recipient-name" class="col-form-label float-start">Nom du vendeur:</label>
                <input type="text" class="form-control" name="proprio">
            </div>
         </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label float-start">Message:</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
        </form>
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
              <th>Région</th>
              <th>Ville</th>
              <th>Quartier</th>
              <th>superficie</th>
              <th>Prix</th>
              <th>Proprio</th>
              <th>Actions</th>                 
            </tr>
        </thead>
        <tbody>
            @foreach ($domaines as $domaine)
                <tr>
                  <td>{{$domaine->id}}</td>
                  <td>{{$domaine->region}}</td>
                  <td>{{$domaine->ville}}</td>
                  <td>{{$domaine->quartier}}</td>
                  <td>{{$domaine->superficie}}</td>
                  <td>{{$domaine->prix}}</td>
                  <td>{{$domaine->proprio}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
</main>
@endsection