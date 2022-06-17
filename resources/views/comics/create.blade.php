@extends('layouts.default')

@section('PageTitle','Dc Comics - Create Comic')

@section('MainContent')
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" placeholder="insert the title" name="title" value="{{old('title')}}">
      @error('title')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" placeholder="insert the description" name="description" cols="30" >{{old('description')}}</textarea>
    </div>
    <div class="form-group">
      <label for="thumb">Thumb</label>
      <input type="text" class="form-control" id="thumb" aria-describedby="thumb" placeholder="insert the thumb-url" name="thumb" value="{{old('thumb')}}">
      @error('thumb')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control @error('thumb') is-invalid @enderror" id="price" aria-describedby="price" placeholder="insert the price" name="price" min="1" max="60" step="0.01" value="{{old('price')}}">
    </div>
    <div class="form-group">
      <label for="series">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" placeholder="insert the series" name="series" value="{{old('series')}}">
    </div>
    <div class="form-group">
      <label for="sale_date">Sale date</label>
      <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="sale_date" placeholder="insert the sale date" name="sale_date" value="{{old('sale_date')}}">
      @error('sale_date')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
        <option value="graphic novel">Graphic Novel</option>
        <option value="comic book">Comic Book</option>
      </select>
      @error('type')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection