@extends('layouts.app')

@section('content')
    <h2>Ajouter une salle</h2>

    <form action="{{ route('gestion-salles.store') }}" method="post">
        @csrf
        <label for="nom">Nom de la salle:</label>
        <input type="text" name="nom" required>
        
        <label for="max_user">Nombre maximal d'utilisateurs:</label>
        <input type="number" name="max_user" required>

        <button type="submit" class="btn btn-success">Créer</button>
    </form>
@endsection
