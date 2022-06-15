@extends('layouts.default')

@section('PageTitle',$comic->series)

@section('MainContent')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="text-center"> {{$comic->title}}</h1>
            <h4>{{$comic->series}}</h4>
            <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <p>{{$comic->price}} €</p>
            <p>{{$comic->description}}</p>
        </div>
    </div>
    
</div>
@endsection