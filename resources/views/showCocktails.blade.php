@extends("home")

@section('body')
    @foreach ($cocktails as $cocktail)
        <div>
            <h1>{{ $cocktail->titre }}</h1>
            <label>Description</label>
            <p>{{ $cocktail->description }}</p>
            <p> <strong> {{ $cocktail->nombre_etape }}</strong> </p>
            <p>{{ $cocktail->ingredients }}</p>

        </div>

        <a href="{{ route('cocktail.delete', ['id' => $cocktail->id]) }}" class="btn btn-danger">Supprimer</a>
    @endforeach
@endsection
