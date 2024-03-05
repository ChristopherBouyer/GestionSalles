@extends('layouts.app')

@section('content')
    <h2>Liste des utilisateurs</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom utilisateur</th>
                <th scope="col">Badge</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td scope="row">{{ $user->name }}</td>
                    <td scope="row">{{ $user->badge }}</td>
                    <td>
                        <div>
                            <a href="{{ route('user.edit', $user->id) }}" type="button" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display:inline;">
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

    <a class="btn btn-primary" href="{{ route('user.create') }}">Ajouter un utilisateur</a>
@endsection
