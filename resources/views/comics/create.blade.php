@extends('layout.app')

@section('title', 'Aggiungi fumetto')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titolo</label>
            <input 
            type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="title"
            name="title"
            value="{{old('title')}}"
            >

            @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea 
            class="form-control @error('description') is-invalid @enderror"
            id="description"
            name="description"
            >
                {{old('description')}}
            </textarea>

            @error('description')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input 
            type="text"
            class="form-control @error('thumb') is-invalid @enderror"
            id="thumb"
            name="thumb"
            value="{{old('thumb')}}"
            >

            @error('thumb')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input 
            type="text" 
            class="form-control @error('price') is-invalid @enderror"
            id="price"
            name="price"
            value="{{old('price')}}"
            >

            @error('price')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie:</label>
            <input 
            type="text"
            class="form-control @error('series') is-invalid @enderror"
            id="series"
            name="series"
            value="{{old('series')}}"
            >

            @error('series')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita:</label>
            <input 
            type="date"
            class="form-control @error('sale_date') is-invalid @enderror"
            id="sale_date"
            name="sale_date"
            value="{{old('sale_date')}}"
            >

            @error('sale_date')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere:</label>
            <input 
            type="type" 
            class="form-control @error('type') is-invalid @enderror"
            id="type"
            name="type"
            value="{{old('type')}}"
            >

            @error('type')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Crea</button>

        <a href="{{route('comics.index')}}" class="btn btn-info">
            Torna all'elenco
        </a>
    </form>
@endsection