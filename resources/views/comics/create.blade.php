@extends('layouts.default')

@section('PageTitle','Dc Comics - Create Comic')

@section('MainContent')
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="insert the title" name="title">
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <textarea class="form-control" id="description" aria-describedby="description" placeholder="insert the description" name="description" cols="30"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Thumb</label>
      <input type="text" class="form-control" id="thumb" aria-describedby="thumb" placeholder="insert the thumb-url" name="thumb">
    </div>
    <div class="form-group">
      <label for="title">Price</label>
      <input type="number" class="form-control" id="price" aria-describedby="price" placeholder="insert the price" name="price" min="1" max="60" step="0,01" >
    </div>
    <div class="form-group">
      <label for="title">Series</label>
      <input type="text" class="form-control" id="series" aria-describedby="series" placeholder="insert the series" name="series">
    </div>
    <div class="form-group">
      <label for="title">Sale date</label>
      <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" placeholder="insert the sale date" name="sale_date">
    </div>
    <div class="form-group">
      <label for="title">Type</label>
      <select class="form-control" name="type" id="type">
        <option value="graphic novel">Graphic Novel</option>
        <option value="comic book">Comic Book</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection