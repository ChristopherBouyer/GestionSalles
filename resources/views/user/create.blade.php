@extends('layouts.app')

@section('content')
    <h2>Ajouter un utilisateur</h2>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="name">Nom de l'utilisateur:*</label>
        <input type="text" name="name" required>
        
        <label for="badge">Badge:</label>
        <input type="number" name="badge">

        <button type="submit" class="btn btn-success">Créer</button>
    </form>
@endsection
