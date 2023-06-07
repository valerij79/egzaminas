@extends('layouts.app')

@section('content')
    <h1>{{ $patiekalas->pavadinimas }}</h1>
    <p>Aprašymas: {{ $patiekalas->aprasymas }}</p>
    <p>Kaina: {{ $patiekalas->kaina }}</p>
    <p>Valgiaraštis: {{ $patiekalas->valgiarastis->pavadinimas }}</p>
@endsection
