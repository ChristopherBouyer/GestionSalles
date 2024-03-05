@extends('layouts.app')

@section('content')
    <h2>Mettre à jour la salle {{ $salle->nom }}</h2>

    <form action="{{ route('gestion-salles.update', $salle->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="nom">Nom de la salle:</label>
        <input type="text" name="nom" value="{{ $salle->nom }}" required>

        <label for="system_id">Identification du système:</label>
        <input type="text" name="system_id" value="{{ $salle->system_id }}" required>
        
        <label for="max_user">Nombre de places:</label>
        <input type="number" name="max_user" value="{{ $salle->max_user }}" required>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
