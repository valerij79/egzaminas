@extends('layouts.app')

@section('content')
    <h1>{{ $maitinimoIstaiga->pavadinimas }}</h1>
    <p>Adresas: {{ $maitinimoIstaiga->adresas }}</p>
    <p>Telefonas: {{ $maitinimoIstaiga->telefonas }}</p>
    <p>El. paštas: {{ $maitinimoIstaiga->email }}</p>

    <h2>Valgiaraščiai</h2>
    @foreach ($maitinimoIstaiga->valgiarasciai as $valgiarastis)
        <div class="valgiarastis">
            <h3>{{ $valgiarastis->pavadinimas }}</h3>
            <p>Data: {{ $valgiarastis->data }}</p>
            <a href="{{ route('valgiarastis.show', $valgiarastis->id) }}">Peržiūrėti patiekalus</a>
        </div>
    @endforeach
@endsection
