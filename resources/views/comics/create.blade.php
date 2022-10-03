@extends('layout.app')

@section('title', 'Aggiungi fumetto')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
        
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita:</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere:</label>
            <input type="type" class="form-control" id="type" name="type">
        </div>
        
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection