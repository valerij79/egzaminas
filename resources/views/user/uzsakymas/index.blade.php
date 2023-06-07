@extends('layouts.app')

@section('content')
    <h1>Užsakymai</h1>

    @if ($uzsakymai->isEmpty())
        <p>Nėra užsakymų.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Užsakymo ID</th>
                    <th>Patiekalas</th>
                    <th>Kiekis</th>
                    <th>Veiksmai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($uzsakymai as $uzsakymas)
                    <tr>
                        <td>{{ $uzsakymas->id }}</td>
                        <td>{{ $uzsakymas->patiekalas->pavadinimas }}</td>
                        <td>{{ $uzsakymas->kiekis }}</td>
                        <td>
                            <a href="{{ route('uzsakymas.edit', $uzsakymas->id) }}">Redaguoti</a>
                            <form action="{{ route('uzsakymas.destroy', $uzsakymas->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
