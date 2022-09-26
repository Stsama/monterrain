@extends('layouts.app2')

@section('content2')

    <div class="grille">
        @if($posts->count()>0)
            @foreach ($posts as $post)
            <div class="grid-item">
                <div class="grid-image"><img src="{{ asset($post->image) }}" width="100%" class="img img-responsive" /></div>
                <div class="grid-prix">{{$post->prix}} XOF</div>
                <div class="grid-superficie">{{$post->superficie}} m²</div>
                <div class="grid-locatation"><span><i class="fa-solid fa-location-dot"></i></span> {{$post->region}}, {{$post->ville}}, {{$post->quartier}}</div>
                <button class="btn bg-warning text-dark"><a href="{{route('show.post',['id'=>$post->id])}} ">Learn More</a></button>
            </div>
            @endforeach
        @else

        <h5 style="color: rgb(170, 13, 37)">Aucun posts pour l'instant</h5>
        
        @endif


    </div>
@endsection