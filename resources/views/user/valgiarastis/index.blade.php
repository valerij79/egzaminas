@extends('layouts.app')

@section('content')
    <h1>Valgiaraščiai</h1>

    @foreach ($valgiarasciai as $valgiarastis)
        <div class="valgiarastis">
            <h3>{{ $valgiarastis->pavadinimas }}</h3>
            <p>Aprašymas: {{ $valgiarastis->aprasymas }}</p>
        </div>
    @endforeach
@endsection
