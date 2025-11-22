@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2>Pedido #{{ $order->id }}</h2>
    <div class="mb-3">Estado: <strong>{{ $order->status }}</strong></div>
    <form method="POST" action="{{ route('admin.orders.update', $order) }}" class="mb-4">
        @csrf
        @method('PUT')
        <div class="form-row align-items-end">
            <div class="form-group col-md-4">
                <label>Estado</label>
                <select name="status" class="form-control">
                    @foreach(['pending','processing','shipped','completed','cancelled'] as $st)
                        <option value="{{ $st }}" @selected($order->status===$st)>{{ $st }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Notas</label>
                <input type="text" name="notes" class="form-control" value="{{ old('notes',$order->notes) }}">
            </div>
            <div class="form-group col-md-2">
                <button class="btn btn-primary btn-block">Guardar</button>
            </div>
        </div>
    </form>

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