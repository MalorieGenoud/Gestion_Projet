@extends("default")
@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <p>Bienvenue sur vos projets</p>


    <ul>
        @forelse($numbers as $number)
            <li>{{$number}}</li>
        @empty
            <li>Aucun chiffre</li>

        @endforelse
    </ul>


@endsection

