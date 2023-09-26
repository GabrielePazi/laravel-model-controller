@extends('layouts.public')

@section('content')
    <div class="container">
        <h1>Hello World</h1>

        <ul class="d-flex gap-3 flex-wrap">
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $movie['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Titolo Originale: {{ $movie['original_title'] }}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Nazionalità: {{ $movie['nationality'] }} </h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Data: {{ $movie['date'] }}</h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Voto: {{ $movie['vote'] }}</h6>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
