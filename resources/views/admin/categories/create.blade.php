@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Nueva categoría</h2>
    <form method="POST" action="{{ route('admin.categories.store') }}" class="mt-3">
        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-light">Cancelar</a>
    </form>
</div>
@endsection