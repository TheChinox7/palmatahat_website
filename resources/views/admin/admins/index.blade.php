@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="h5 m-0">Administrateurs</h2>
            <a href="{{ route('admin.admins.create') }}" class="btn btn-brand btn-sm">Nouvel administrateur</a>
        </div>
        <form class="toolbar" method="GET" action="{{ route('admin.admins.index') }}">
            <input type="text" name="q" value="{{ $q }}" class="form-control search" placeholder="Rechercher par nom ou e-mail">
            <button class="btn btn-outline-secondary btn-sm" type="submit">Filtrer</button>
        </form>
        <div class="table-responsive">
        <table class="table table-striped table-hover align-middle table-modern">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.admins.edit', $user) }}" class="btn btn-sm btn-outline-secondary">Éditer</a>
                    <form action="{{ route('admin.admins.destroy', $user) }}" method="POST" class="d-inline">
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
</div>
@endsection