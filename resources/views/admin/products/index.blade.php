@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="h5 m-0">Produits</h2>
            <a href="{{ route('admin.products.create') }}" class="btn btn-brand btn-sm">Nouveau produit</a>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-hover align-middle table-modern">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Stock</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ optional($product->category)->name }}</td>
                <td>{{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Éditer</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        {{ $products->links() }}
    </div>
</div>
@endsection