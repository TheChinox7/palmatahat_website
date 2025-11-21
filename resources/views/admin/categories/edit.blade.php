@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Editar categoría</h2>
    <form method="POST" action="{{ route('admin.categories.update', $category) }}" class="mt-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $category->slug) }}" required>
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-light">Cancelar</a>
    </form>
</div>
@endsection