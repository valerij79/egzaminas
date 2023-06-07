@extends('layouts.app')

@section('content')
    <h1>Maitinimo įstaigos</h1>

    @foreach ($maitinimoIstaigos as $maitinimoIstaiga)
        <div class="maitinimo-istaiga">
            <h3>{{ $maitinimoIstaiga->pavadinimas }}</h3>
            <p>Adresas: {{ $maitinimoIstaiga->adresas }}</p>
            <p>Telefonas: {{ $maitinimoIstaiga->telefonas }}</p>
            <p>El. paštas: {{ $maitinimoIstaiga->email }}</p>
            <a href="{{ route('maitinimo_istaiga.show', $maitinimoIstaiga->id) }}">Peržiūrėti valgiaraščius</a>
        </div>
    @endforeach
@endsection
