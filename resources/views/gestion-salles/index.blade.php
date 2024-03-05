@extends('layouts.app')

@section('content')
    <h2>Liste des salles</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom salle</th>
                <th scope="col">Nombre de places prises</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salles as $salle)
                <tr>
                    <td scope="row">{{ $salle->nom }}</td>
                    <td>{{ $salle->actual_user }}/{{ $salle->max_user }}</td>
                    <td>
                        <div>
                        <a href="{{ route('gestion-salles.edit', $salle->id) }}" type="button" class="btn btn-warning">Modifier</a>
                <form action="{{ route('gestion-salles.destroy', $salle->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{ route('gestion-salles.create') }}">Ajouter une salle</a>
@endsection
