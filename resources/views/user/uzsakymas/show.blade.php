@extends('layouts.app')

@section('content')
    <h1>Užsakymo informacija</h1>

    <p>Užsakymo ID: {{ $uzsakymas->id }}</p>
    <p>Patiekalas: {{ $uzsakymas->patiekalas->pavadinimas }}</p>
    <p>Kiekis: {{ $uzsakymas->kiekis }}</p>
@endsection
