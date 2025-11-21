@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Mis pedidos</h2>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Total</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ number_format($order->total,2) }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                <td class="text-right">
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-sm btn-secondary">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>
@endsection