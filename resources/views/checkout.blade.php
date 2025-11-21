@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Checkout</h2>
    @include('partials.cart_items', ['cart' => $cart])
    <form method="POST" action="{{ route('checkout.process') }}" class="mt-3">
        @csrf
        <button class="btn btn-success">Confirmar pedido</button>
    </form>
</div>
@endsection