@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Pedido #{{ $order->id }}</h2>
    <div class="mb-3">Estado: <strong>{{ $order->status }}</strong></div>
    <h4>Items</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ optional($item->product)->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->price,2) }}</td>
                <td>{{ number_format($item->price * $item->quantity,2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right"><strong>Total: {{ number_format($order->total,2) }}</strong></div>
</div>
@endsection