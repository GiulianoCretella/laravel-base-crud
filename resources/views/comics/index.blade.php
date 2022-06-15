@extends('layouts.default')

@section('PageTitle','Dc Comics - Comics')

@section('MainContent')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col">
            <a href="{{route('comics.show',$comic->id)}}">
                <div class="card">
                    <img src="{{$comic->thumb}}" alt="">
                    <h6>{{$comic->title}}</h6>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection