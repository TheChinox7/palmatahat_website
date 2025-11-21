@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Editar producto</h2>
    <form method="POST" action="{{ route('admin.products.update', $product) }}" class="mt-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Categoría</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected($product->category_id==$cat->id)>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ old('name',$product->name) }}" required>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug',$product->slug) }}" required>
        </div>
        <div class="form-group">
            <label>Descripción</label>
            <textarea name="description" class="form-control">{{ old('description',$product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price',$product->price) }}" required>
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ old('stock',$product->stock) }}" required>
        </div>
        <div class="form-group">
            <label>Imagen (ruta)</label>
            <input type="text" name="image_path" class="form-control" value="{{ old('image_path',$product->image_path) }}">
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-light">Cancelar</a>
    </form>
</div>
@endsection