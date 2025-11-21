@php($sum = 0)
<div class="p-3">
    @if(empty($cart))
        <p>Votre panier est vide.</p>
    @else
        <ul class="list-group mb-3">
            @foreach($cart as $item)
                @php($sum += ((float)$item['price']) * ((int)$item['quantity']))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <div class="font-weight-bold">{{ $item['name'] }}</div>
                        <small>{{ number_format($item['price'],2) }} CHF × {{ $item['quantity'] }}</small>
                    </div>
                    <button class="btn btn-sm btn-outline-danger" onclick="removeFromCart({{ $item['product_id'] }})">Eliminar</button>
                </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-between align-items-center">
            <strong>Total: {{ number_format($sum,2) }} CHF</strong>
            <div>
                <button class="btn btn-light" onclick="clearCart()">Vaciar</button>
                <a href="{{ route('checkout.show') }}" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    @endif
</div>