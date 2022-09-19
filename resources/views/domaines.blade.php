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
        <h5 class="modal-title" id="DomaineModalLabel">Ajouter un Vendeur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
         <div class="row">
            <div class="col">
                <label for="recipient-name" class="col-form-label float-start">Région:</label>
                <input type="text" class="form-control">
            </div>
            <div class="col">  
                <label for="recipient-name" class="col-form-label float-start">Ville:</label>
                <input type="text" class="form-control">
              </div>
         </div>
         <div class="row">
            <div class="col">
                <label for="recipient-name" class="col-form-label float-start">Quartier:</label>
                <input type="email" class="form-control">
            </div>
            <div class="col">  
                <label for="recipient-name" class="col-form-label float-start">Superficies:</label>
                <input type="tel" class="form-control">
              </div>
         </div>
         <div class="row">
            <div class="col">
                <label for="recipient-name" class="col-form-label float-start">Nom du vendeur:</label>
                <input type="text" class="form-control">
            </div>
         </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label float-start">Message:</label>
            <textarea class="form-control"></textarea>
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
    <table>
        <thead>                
            <tr>
              <th>Id</th>
              <th>Région</th>
              <th>Ville</th>
              <th>Quartier</th>
              <th>superficie</th>
              <th>Proprio</th>
              <th>Statuts</th>
              <th>Actions</th>                 
            </tr>
        </thead>
    </table>
</main>
@endsection