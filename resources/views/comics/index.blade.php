@extends('layout.app')

@section('title', 'comics')

@section('content')
    <div class="container">
        @if (session('created'))
            <div class="alert alert-success">
                {{session('created')}}
            </div>
        @endif
    </div>

    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-danger">
                {{session('deleted')}}
            </div>
        @endif
    </div>

    <div class="container d-flex flex-wrap mt-5">
        @foreach ($comics as $comic)
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
    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5>Prezzo: </h5>
                            {{$comic->price}} $
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
                    href="{{route('comics.show', ['comic' => $comic])}}" 
                    class="btn btn-primary mt-3"
                    >
                        Vedi Dettagli
                    </a>
                    <a 
                    href="{{route('comics.edit', ['comic' => $comic])}}" 
                    class="btn btn-warning mt-3 ms-3"
                    >
                        Modifica
                    </a>

                    <form 
                    action="{{route('comics.destroy', ['comic' => $comic])}}"
                    method="POST"
                    >
                        @csrf
                        @method('DELETE')

                        <button 
                        type="submit" 
                        class="btn btn-danger mt-3" 
                        onclick="return confirm('L\'eliminazione dei dati ?? permanente. Confermando eliminerai l\'elemento selezionato. Desideri procedere?')"
                        >
                            Elimina
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection