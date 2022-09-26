@extends('layouts.app')

@section('content')
<div class="grid-item2">
    <div class="grid-image"><img src="{{ asset($post->image) }}" width="100%" class="img img-responsive" /></div>
    <div class="grid-prix">{{$post->prix}} XOF</div>
    <div class="grid-superficie">{{$post->superficie}} m²</div>
    <div class="grid-locatation"><span><i class="fa-solid fa-location-dot"></i></span> {{$post->region}}, {{$post->ville}}, {{$post->quartier}}</div>
    <div class="grid-superficie">{{$post->description}}</div>
    <button class="btn bg-warning text-dark"><a href="{{route('show.post',['id'=>$post->id])}} ">Intéressé</a></button>
</div>

@endsection