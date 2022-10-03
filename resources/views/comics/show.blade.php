@extends('layout.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <img
            class="card-img-top"
            src="{{$comic->thumb}}" 
            alt="{{$comic->title}}"
            >

            <div class="card-body">
                <h4 class="card-title">
                    Titolo: 
                    {{$comic->title}}
                </h4>

                <p class="card-text">
                    Descrizione: 
                    {{$comic->description}}
                </p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5>Prezzo: </h5>
                        {{$comic->price}}
                    </li>
                    <li class="list-group-item">
                        <h5>Serie: </h5>
                        {{$comic->series}}
                    </li>
                    <li class="list-group-item">
                        <h5>Genere: </h5>
                        {{$comic->type}}
                    </li>
                    <li class="list-group-item">
                        <h5>Data di uscita: </h5>
                        {{$comic->sale_date}}
                    </li>
                </ul>
                
                <a 
                href="{{route('comics.index')}}" 
                class="btn btn-primary"
                >
                    Torna all'elenco
                </a>
            </div>
        </div>
    </div>
@endsection