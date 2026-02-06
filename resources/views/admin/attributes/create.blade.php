@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Nouvel attribut</h2>
    <form method="POST" action="{{ route('admin.attributes.store') }}" class="card p-3">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Type</label>
                <select name="type" class="form-select" required>
                    <option value="text">Texte</option>
                    <option value="select">Sélection</option>
                    <option value="multi_select">Sélection multiple</option>
                </select>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Enregistrer</button>
            <a href="{{ route('admin.attributes.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection