@extends('layouts.default')

@section('PageTitle','Dc Comics - Comics')

@section('MainContent')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-4">
            <a href="{{route('comics.show',$comic->id)}}">
                <div class="card my-1 text-center">
                    <img class="img-fluid img-thumbnail" src="{{$comic->thumb}}" alt="">
                    <h6>{{$comic->title}}</h6>
                    <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary my-1">Visualizza</a>
                    <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-warning my-1 ">Modifica</a>
                    <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                          Cancella
                        </button>
                      </form>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection