@extends('layouts.app')

@section('content')
    <h1>Patiekalai</h1>

    @foreach ($patiekalai as $patiekalas)
        <div class="patiekalas">
            <h3>{{ $patiekalas->pavadinimas }}</h3>
            <p>Aprašymas: {{ $patiekalas->aprasymas }}</p>
            <p>Kaina: {{ $patiekalas->kaina }}</p>
        </div>
    @endforeach
@endsection
