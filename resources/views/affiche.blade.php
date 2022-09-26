@extends('layouts.app')

@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">detail unique</div>
    <div class="card-body">
          <div class="card-body">
          <h5 class="card-title">Région : <span style="color: blue">{{ $domaine->region }}</span></h5>
          <p class="card-text">ville : <span style="color: blue">{{ $domaine->ville }}</span></p>
          <p class="card-text">Quartier : <span style="color: blue">{{ $domaine->quartier }}</span></p>
          <p class="card-text">Superficie : <span style="color: blue">{{ $domaine->superficie }}</span></p>
          <p class="card-text">Prix : <span style="color: blue">{{ $domaine->prix }}</span></p>
          <p class="card-text">Propio : <span style="color: blue">{{ $domaine->proprio }}</span></p>
          <p class="card-text">Description : <span style="color: blue">{{ $domaine->description }}</span></p>
    </div>
      </hr>
    </div>
  </div>
@endsection