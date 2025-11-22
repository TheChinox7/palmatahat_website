@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="h5 m-0">Catégories</h2>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-brand btn-sm">Nouvelle catégorie</a>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-hover align-middle table-modern">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Slug</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-outline-secondary">Éditer</a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline">
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
        {{ $categories->links() }}
    </div>
</div>
@endsection