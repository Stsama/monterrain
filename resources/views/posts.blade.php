@extends('layouts.app')

@section('content')

    <div class="grille">
        @if($posts->count()>0)
            @foreach ($posts as $post)
            <a href="{{route('show.post',['id'=>$post->id])}} ">{{$post->region}} </a>
            @endforeach
        @else

        <span>Aucun posts pour l'instant</span>
        
        @endif


    </div>
@endsection