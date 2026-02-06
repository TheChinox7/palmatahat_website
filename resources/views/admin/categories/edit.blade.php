@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Modifier la catégorie</h2>
    <form method="POST" action="{{ route('admin.categories.update', $category) }}" class="card p-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $category->slug) }}" required>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Mettre à jour</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection