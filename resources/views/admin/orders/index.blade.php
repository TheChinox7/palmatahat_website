@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="h5 m-0">Commandes</h2>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-hover align-middle table-modern">
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Statut</th>
                <th>Total</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ optional($order->user)->name }}</td>
                <td><span class="badge-status {{ $order->status }}">{{ $order->status }}</span></td>
                <td>{{ number_format($order->total,2) }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-outline-secondary">Voir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        {{ $orders->links() }}
    </div>
</div>
@endsection