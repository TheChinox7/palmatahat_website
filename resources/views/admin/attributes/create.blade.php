@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Nuevo atributo</h2>
    <form method="POST" action="{{ route('admin.attributes.store') }}" class="card p-3">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tipo</label>
                <select name="type" class="form-select" required>
                    <option value="text">Texto</option>
                    <option value="select">Selección</option>
                    <option value="multi_select">Selección múltiple</option>
                </select>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Guardar</button>
            <a href="{{ route('admin.attributes.index') }}" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection