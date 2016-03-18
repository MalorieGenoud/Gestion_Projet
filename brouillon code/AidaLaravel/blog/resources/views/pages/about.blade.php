@extends("default")
@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <p>UIAUISDFIAGBUSDFGAU SGDFUVAShidagsudfgvasuvdfva</p>


        <ul>
            @forelse($numbers as $number)
                <li>{{$number}}</li>
            @empty
                <li>Aucun chiffre</li>

            @endforelse
        </ul>


@endsection


@section('sidebar')

    <h3>A propos</h3>
    <p>UIAUISDFIAGBUSDFGAU SGDFUVAShidagsudfgvasuvdfva</p>

@endsection
    