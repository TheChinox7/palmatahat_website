@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Éditer attribut</h2>
    <form method="POST" action="{{ route('admin.attributes.update', $attribute) }}" class="card p-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" value="{{ $attribute->name }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Type</label>
                <select name="type" class="form-select" required>
                    <option value="text" {{ $attribute->type==='text'?'selected':'' }}>Texte</option>
                    <option value="select" {{ $attribute->type==='select'?'selected':'' }}>Sélection</option>
                    <option value="multi_select" {{ $attribute->type==='multi_select'?'selected':'' }}>Sélection multiple</option>
                </select>
            </div>
        </div>
        <hr>
        <div>
            <strong>Options</strong>
            <div id="optionsList" class="mt-2">
                @foreach($attribute->options as $opt)
                <div class="row g-2 align-items-end mb-2">
                    <input type="hidden" name="option_id[]" value="{{ $opt->id }}">
                    <div class="col-md-4">
                        <label class="form-label">Libellé</label>
                        <input type="text" class="form-control" name="option_label[]" value="{{ $opt->label }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Valeur</label>
                        <input type="text" class="form-control" name="option_value[]" value="{{ $opt->value }}">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Ordre</label>
                        <input type="number" class="form-control" name="option_order[]" value="{{ $opt->sort_order }}">
                    </div>
                </div>
                @endforeach
                <div class="row g-2 align-items-end mb-2">
                    <input type="hidden" name="option_id[]" value="">
                    <div class="col-md-4">
                        <label class="form-label">Libellé</label>
                        <input type="text" class="form-control" name="option_label[]" value="">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Valeur</label>
                        <input type="text" class="form-control" name="option_value[]" value="">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Ordre</label>
                        <input type="number" class="form-control" name="option_order[]" value="0">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Enregistrer</button>
            <a href="{{ route('admin.attributes.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection