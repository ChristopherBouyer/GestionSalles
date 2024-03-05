@extends('layouts.app')

@section('content')
    <h2>Mettre à jour l'utilisateur {{ $user->name }}</h2>

    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="name">Nom de l'utilisateur:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label for="badge">Badge:</label>
        <input type="number" name="badge" value="{{ $user->badge }}">

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
