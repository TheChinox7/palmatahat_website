@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="h5 m-0">Attributs</h2>
            <a href="{{ route('admin.attributes.create') }}" class="btn btn-brand btn-sm">Nouvel attribut</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle table-modern">
                <thead><tr><th>Nom</th><th>Type</th><th>Options</th><th></th></tr></thead>
                <tbody>
                @foreach($attributes as $attr)
                    <tr>
                        <td>{{ $attr->name }}</td>
                        <td>{{ $attr->type }}</td>
                        <td>{{ $attr->options->count() }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.attributes.edit', $attr) }}" class="btn btn-sm btn-outline-secondary">Éditer</a>
                            <form method="POST" action="{{ route('admin.attributes.destroy',$attr) }}" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $attributes->links() }}
    </div>
</div>
@endsection