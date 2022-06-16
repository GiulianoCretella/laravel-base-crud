@extends('layouts.default')

@section('PageTitle','Dc Comics - Comics')

@section('MainContent')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-4">
            <a href="{{route('comics.show',$comic->id)}}">
                <div class="card">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                    <h6>{{$comic->title}}</h6>
                    <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">Visualizza</a>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection