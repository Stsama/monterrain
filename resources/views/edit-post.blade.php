@extends('layouts.app')

@section('content')
     
<div class="card" style="margin:20px;">
    <div class="card-header text-danger">Modifier Domaine</div>
    <div class="card-body">
         
        <form method="POST" action="/update-post/{{$domaine->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col">
                <input type="hidden" value="{{$domaine->id}}" class="form-control" name="id">
              </div>
            </div>
           <div class="row">
              <div class="col">
                  <label for="recipient-name" class="col-form-label float-start">Région:</label>
                  <input type="text" value="{{$domaine->region}}" class="form-control" name="region">
              </div>
              <div class="col">  
                  <label for="recipient-name" class="col-form-label float-start">Ville:</label>
                  <input type="text" value="{{$domaine->ville}}" class="form-control" name="ville">
                </div>
           </div>
           <div class="row">
              <div class="col">
                  <label for="recipient-name" class="col-form-label float-start">Quartier:</label>
                  <input type="text" value="{{$domaine->quartier}}" class="form-control" name="quartier">
              </div>
              <div class="col">  
                  <label for="recipient-name" class="col-form-label float-start">Superficie:</label>
                  <input type="number" value="{{$domaine->superficie}}" class="form-control" name="superficie">
                </div>
                <div class="col">  
                  <label for="recipient-name" class="col-form-label float-start">Prix:</label>
                  <input type="number" value="{{$domaine->prix}}" class="form-control" name="prix">
                </div>
           </div>
           <div class="row">
              <div class="col">
                  <label for="recipient-name" class="col-form-label float-start">Nom du vendeur:</label>
                  <input type="text" value="{{$domaine->proprio}}" class="form-control" name="proprio">
              </div>
           </div>
           <div class="row mt-5">
            <div class="col">
              <label for="profile_pic">images</label>
              <input type="file" value="{{$domaine->image}}" name="image"
          accept=".jpg, .jpeg, .png">
            </div>
         </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label float-start">Message:</label>
              <textarea class="form-control" value="{{$domaine->description}}" name="description"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
      
    </div>
  </div>
@endsection