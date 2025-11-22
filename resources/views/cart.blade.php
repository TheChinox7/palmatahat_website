@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Carrito</h2>
    @php $currency = $currencySymbol ?? '$'; @endphp
    @if(empty($cart))
        <p>Tu carrito está vacío.</p>
    @else
    <div class="row g-4">
        <div class="col-md-8">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th style="width:44px"></th>
                        <th>Producto</th>
                        <th class="text-right">Precio</th>
                        <th class="text-center">Cantidad</th>
                        <th class="text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $item)
                    @php
                        $subtotal = ((float)$item['price']) * ((int)$item['quantity']);
                        $total += $subtotal;
                        $attrs = $item['attributes'] ?? [];
                        $attrNames = $attrNames ?? [];
                        $attrPairs = [];
                        foreach ($attrs as $k => $v) {
                            $name = $attrNames[$k] ?? $attrNames[(int)$k] ?? '';
                            $val = is_array($v) ? implode(', ', $v) : $v;
                            if($val !== ''){ $attrPairs[] = ['name'=>$name,'val'=>$val]; }
                        }
                    @endphp
                    <tr class="cart-row" data-product-id="{{ (int)$item['product_id'] }}" data-price="{{ (float)$item['price'] }}">
                        <td class="text-center align-middle">
                            <button type="button" class="cart-remove-btn js-remove" data-product-id="{{ (int)$item['product_id'] }}" aria-label="Eliminar">&times;</button>
                        </td>
                        <td>
                            <div class="d-flex" style="gap:12px;align-items:flex-start;">
                                <img src="{{ $item['image_path'] ? asset($item['image_path']) : asset('img/palma/cats/cat2.svg') }}" alt="{{ $item['name'] }}" class="cart-img">
                                <div>
                                    <div class="product-name">{{ $item['name'] }}</div>
                                    @foreach($attrPairs as $pair)
                                        <div class="attr-row"><span class="attr-label">{{ $pair['name'] }}:</span> <span class="attr-value">{{ $pair['val'] }}</span></div>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                        <td class="text-right">{{ $currency }} <span class="item-price">{{ number_format((float)$item['price'],2) }}</span></td>
                        <td class="text-center">
                            <div class="qty-group">
                                <button class="btn btn-outline-secondary btn-sm qty-minus" type="button">−</button>
                                <input type="number" class="form-control text-center qty-input" min="1" value="{{ (int)$item['quantity'] }}">
                                <button class="btn btn-outline-secondary btn-sm qty-plus" type="button">+</button>
                            </div>
                        </td>
                        <td class="text-right">{{ $currency }} <span class="item-subtotal">{{ number_format($subtotal,2) }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="cart-summary">
                <div class="summary-title">Totales del carrito</div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>Subtotal</div>
                    <div>{{ $currency }} <span id="cartTotal">{{ number_format($total,2) }}</span></div>
                </div>
                <div class="mt-2 text-muted">Envío gratis dentro de Ecuador</div>
                <div class="mt-1 text-muted">Shipping to Azuay.</div>
                <div class="mt-1"><a href="#">Change address</a></div>
                <div class="mt-3 cart-actions">
                    <a href="{{ route('checkout.show') }}" class="btn btn-brand">Proceed to checkout</a>
                    <a href="{{ route('shop') }}" class="btn btn-brand">Continue shopping</a>
                    <button class="btn btn-brand" onclick="clearCart()">Clear shopping cart</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<script>
(function(){
    function fmt(n){ return Number(n).toFixed(2); }
    function recalc(){
        var total = 0;
        document.querySelectorAll('.cart-row').forEach(function(row){
            var price = parseFloat(row.getAttribute('data-price'))||0;
            var qtyEl = row.querySelector('.qty-input');
            var qty = parseInt(qtyEl.value||'1'); qty = isNaN(qty)?1:Math.max(1, qty);
            var sub = price * qty; total += sub;
            var subEl = row.querySelector('.item-subtotal'); subEl && (subEl.textContent = fmt(sub));
        });
        var totEl = document.getElementById('cartTotal'); totEl && (totEl.textContent = fmt(total));
    }
    function updateQty(pid, qty){
        if(window.jQuery){
            jQuery.post("{{ route('cart.update') }}", { _token: '{{ csrf_token() }}', product_id: pid, quantity: qty }, function(res){
                jQuery('#cartCount').text(res.count);
                jQuery('#cartCountMobileTab').text(res.count);
            });
        }
    }
    window.removeFromCart = function(pid){
        if(window.jQuery){
            jQuery.post("{{ route('cart.remove') }}", { _token: '{{ csrf_token() }}', product_id: pid }, function(res){
                jQuery('.cart-row[data-product-id="'+pid+'"]').remove();
                jQuery('#cartCount').text(res.count);
                jQuery('#cartCountMobileTab').text(res.count);
                recalc();
            });
        }
    };
    window.clearCart = function(){
        if(window.jQuery){
            jQuery.post("{{ route('cart.clear') }}", { _token: '{{ csrf_token() }}' }, function(res){
                jQuery('.cart-row').remove();
                jQuery('#cartCount').text(res.count);
                jQuery('#cartCountMobileTab').text(res.count);
                recalc();
            });
        }
    };
    document.addEventListener('click', function(e){
        var btn = e.target.closest('.js-remove');
        if(!btn) return; var pid = parseInt(btn.getAttribute('data-product-id')||'0');
        removeFromCart(pid);
    });
    document.querySelectorAll('.cart-row').forEach(function(row){
        var pid = parseInt(row.getAttribute('data-product-id')||'0');
        var qtyEl = row.querySelector('.qty-input');
        var minus = row.querySelector('.qty-minus'); var plus = row.querySelector('.qty-plus');
        minus && minus.addEventListener('click', function(){ var v = parseInt(qtyEl.value||'1'); v = isNaN(v)?1:Math.max(1,v-1); qtyEl.value=v; recalc(); updateQty(pid, v); });
        plus && plus.addEventListener('click', function(){ var v = parseInt(qtyEl.value||'1'); v = isNaN(v)?1:(v+1); qtyEl.value=v; recalc(); updateQty(pid, v); });
        qtyEl && qtyEl.addEventListener('input', function(){ var v = parseInt(qtyEl.value||'1'); v = isNaN(v)?1:Math.max(1,v); qtyEl.value=v; recalc(); updateQty(pid, v); });
    });
})();
</script>

<style>
.cart-img{width:72px;height:72px;object-fit:cover;border-radius:8px;border:1px solid #eee}
.product-name{text-transform:uppercase;font-weight:600}
.attr-row{font-size:13px;color:#000}
.attr-label{color:#000}
.attr-value{color:#555}
.qty-group{display:inline-flex;align-items:center;gap:6px}
.qty-minus,.qty-plus{min-width:24px;height:24px;border:1px solid #ccc;color:#000;background:#fff}
.qty-input{width:44px;height:24px;padding:2px 4px;font-size:12px;border:1px solid #ccc;border-radius:4px}
.btn-outline-secondary{padding:2px 10px}
.cart-remove-btn{background:none;border:none;color:#7d716c;font-size:20px;line-height:1;width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;border-radius:50%;cursor:pointer;transition:transform 0.15s ease,color 0.15s ease;transform-origin:center;will-change:transform}
.cart-remove-btn:hover{color:#6b605b;transform:scale(1.12)}
.cart-summary{border:1px solid #222;padding:16px;border-radius:2px}
.summary-title{font-weight:600;text-transform:uppercase}
.cart-actions{display:flex;flex-direction:column;gap:8px;max-width:520px;margin:0 auto}
.cart-actions .btn{width:100%}
</style>
@endsection
