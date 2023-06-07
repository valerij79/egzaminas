@extends('layouts.app')

@section('content')
    <h1>{{ $valgiarastis->pavadinimas }}</h1>

    <h3>Patiekalai:</h3>
    <ul>
        @foreach ($valgiarastis->patiekalai as $patiekalas)
            <li>{{ $patiekalas->pavadinimas }}</li>
        @endforeach
    </ul>
@endsection
