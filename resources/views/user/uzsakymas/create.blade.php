@extends('layouts.app')

@section('content')
    <h1>Sukurti užsakymą</h1>

    <form action="{{ route('uzsakymas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="patiekalas">Patiekalas</label>
            <select name="patiekalas" id="patiekalas">
                @foreach ($patiekalai as $patiekalas)
                    <option value="{{ $patiekalas->id }}">{{ $patiekalas->pavadinimas }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="kiekis">Kiekis</label>
            <input type="number" name="kiekis" id="kiekis" required>
        </div>

        <button type="submit">Užsakyti</button>
    </form>
@endsection
