@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Éditer utilisateur</h2>
    <form method="POST" action="{{ route('admin.users.update', $user) }}" class="card p-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Mot de passe (laisser en blanco si no cambia)</label>
                <input type="password" name="password" class="form-control" placeholder="********">
            </div>
            <div class="col-md-6">
                <label class="form-label">Rôle</label>
                <select name="role" class="form-select" required>
                    <option value="user" {{ $user->role==='user'?'selected':'' }}>Client</option>
                    <option value="admin" {{ $user->role==='admin'?'selected':'' }}>Admin</option>
                </select>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Mettre à jour</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection