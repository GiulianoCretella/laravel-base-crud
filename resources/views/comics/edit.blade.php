@extends('layouts.default')

@section('PageTitle','Dc Comics - Modify Comic')

@section('MainContent')
<form action="{{route('comics.update',$comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="insert the title" name="title" value="{{$comic->title}}">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" placeholder="insert the description" name="description" cols="30">{{$comic->description}}"</textarea>
    </div>
    <div class="form-group">
      <label for="thumb">Thumb</label>
      <input type="text" class="form-control" id="thumb" aria-describedby="thumb" placeholder="insert the thumb-url" name="thumb" value="{{$comic->thumb}}">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" aria-describedby="price" placeholder="insert the price" name="price" min="1" max="60" step="0.01" value="{{$comic->price}}">
    </div>
    <div class="form-group">
      <label for="series">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" placeholder="insert the series" name="series" value="{{$comic->series}}">
    </div>
    <div class="form-group">
      <label for="sale_date">Sale date</label>
      <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" placeholder="insert the sale date" name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select class="form-control" name="type" id="type">
        <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>Graphic Novel</option>
        <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic Book</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection