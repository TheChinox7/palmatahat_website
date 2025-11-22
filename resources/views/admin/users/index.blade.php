@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="h5 m-0">Utilisateurs</h2>
            <a href="{{ route('admin.users.create') }}" class="btn btn-brand btn-sm">Nouveau utilisateur</a>
        </div>
        <form class="toolbar" method="GET" action="{{ route('admin.users.index') }}">
            <input type="text" name="q" value="{{ $q }}" class="form-control search" placeholder="Rechercher par nom ou e-mail">
            <select name="role" class="form-select" style="max-width:200px;">
                <option value="">Tous les rôles</option>
                <option value="user" {{ $role==='user'?'selected':'' }}>Client</option>
                <option value="admin" {{ $role==='admin'?'selected':'' }}>Admin</option>
            </select>
            <button class="btn btn-outline-secondary btn-sm" type="submit">Filtrer</button>
        </form>
        <div class="table-responsive">
        <table class="table table-striped table-hover align-middle table-modern">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Rôle</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><span class="badge-status {{ $user->role==='admin'?'paid':'pending' }}">{{ $user->role }}</span></td>
                <td class="text-right">
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-secondary">Éditer</a>
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        {{ $users->links() }}
    </div>
}</div>
@endsection