@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Éditer commande #{{ $order->id }}</h2>
    <form method="POST" action="{{ route('admin.orders.update', $order) }}" class="card p-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Statut</label>
                <select name="status" class="form-select" required>
                    @php($statuses = ['pending'=>'En attente','paid'=>'Payée','shipped'=>'Expédiée','cancelled'=>'Annulée'])
                    @foreach($statuses as $value=>$label)
                    <option value="{{ $value }}" {{ $order->status===$value?'selected':'' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label class="form-label">Notes</label>
                <textarea name="notes" class="form-control" rows="4">{{ old('notes',$order->notes) }}</textarea>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Mettre à jour</button>
            <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection