@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Nouvelle catégorie</h2>
    <form method="POST" action="{{ route('admin.categories.store') }}" class="card p-3">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" required>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Enregistrer</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection