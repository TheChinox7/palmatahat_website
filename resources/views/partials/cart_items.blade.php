@php $sum = 0; @endphp
<div class="p-3 cart-panel">
    @if(empty($cart))
    <p>Votre panier est vide.</p>
    @else
    <ul class="list-group mb-3" id="cartList" style="width:100%;">
        @foreach($cart as $item)
        @php $sum += ((float)$item['price']) * ((int)$item['quantity']); @endphp
        <li class="list-group-item cart-row" style="width:100%;" data-product-id="{{ (int)$item['product_id'] }}" data-price="{{ (float)$item['price'] }}">
            <div class="d-flex align-items-center" style="gap:10px;">
                <img src="{{ $item['image_path'] ? asset($item['image_path']) : asset('img/palma/cats/cat2.svg') }}" alt="{{ $item['name'] }}" style="width:70px;height:70px;object-fit:cover;border-radius:8px;border:1px solid #eee;">
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="font-weight-bold product-name">{{ $item['name'] }}</div>
                            @php
                            $attrs = $item['attributes'] ?? [];
                            $attrNames = $attrNames ?? [];
                            $attrTexts = [];
                            if (!empty($attrs)) {
                            foreach ($attrs as $k => $v) {
                            $name = $attrNames[$k] ?? $attrNames[(int)$k] ?? '';
                            $val = is_array($v) ? implode(', ', $v) : $v;
                            if($val !== ''){ $attrTexts[] = ($name ? ($name.': ') : '').$val; }
                            }
                            }
                            @endphp
                            @if(!empty($attrTexts))
                            <div class="attr-inline">{{ implode(' • ', $attrTexts) }}</div>
                            @endif
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-brand js-remove" data-product-id="{{ (int)$item['product_id'] }}">&times;</button>

                    </div>
                    <div class="d-flex align-items-center mt-2" style="gap:10px;">
                        <div class="qty-group">
                            <button class="btn btn-outline-brand btn-sm qty-minus" type="button">−</button>
                            <input type="number" class="form-control text-center qty-input" min="1" value="{{ (int)$item['quantity'] }}">
                            <button class="btn btn-outline-brand btn-sm qty-plus" type="button">+</button>
                            <span class="times">×</span>
                            <strong class="unit">{{ $currencySymbol }} <span class="item-price">{{ number_format((float)$item['price'],2) }}</span></strong>
                        </div>
                        <div class="ms-auto text-right"></div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="cart-footer">
        <div class="subtotal-left">SOUS-TOTAL</div>
        <div class="subtotal-right">{{ $currencySymbol }} <span id="cartTotal">{{ number_format($sum,2) }}</span></div>
        <div class="actions actions-row">
            <a href="{{ route('cart.view') }}" class="btn">VOIR PANIER</a>
            <button class="btn" onclick="clearCart()">VIDER</button>
        </div>
        @if(($showCheckoutButton ?? false) === true)
        <div class="actions checkout-row">
            <a href="{{ route('checkout.show') }}" class="btn">PASSER À LA CAISSE</a>
        </div>
        @endif
    </div>
    <script>
        (function() {
            var currency = '{{ $currencySymbol }}';
            var root = (document.currentScript && document.currentScript.parentElement) || document.querySelector('.cart-panel');
            if (!root || root.__cart_inited) { return; }
            root.__cart_inited = true;

            function fmt(n) { return Number(n).toFixed(2); }

            function recalc() {
                var total = 0;
                root.querySelectorAll('.cart-row').forEach(function(row) {
                    var price = parseFloat(row.getAttribute('data-price')) || 0;
                    var qtyEl = row.querySelector('.qty-input');
                    var qty = parseInt(qtyEl.value || '1');
                    qty = isNaN(qty) ? 1 : Math.max(1, qty);
                    total += (price * qty);
                });
                var totEl = root.querySelector('#cartTotal');
                if (totEl) totEl.textContent = fmt(total);
            }

            function updateQty(pid, qty) {
                if (window.jQuery) {
                    jQuery.post("{{ route('cart.update') }}", {
                        _token: '{{ csrf_token() }}',
                        product_id: pid,
                        quantity: qty
                    }, function(res) {
                        if (res && typeof res.count !== 'undefined') {
                            jQuery('#cartCount').text(res.count);
                            jQuery('#cartCountMobileTab').text(res.count);
                        }
                    });
                }
            }

            function removeItem(pid) {
                if (window.jQuery) {
                    jQuery.post("{{ route('cart.remove') }}", { _token: '{{ csrf_token() }}', product_id: pid }, function(res) {
                        jQuery(root).find('.cart-row[data-product-id="' + pid + '"]').remove();
                        jQuery('#cartCount').text(res.count);
                        jQuery('#cartCountMobileTab').text(res.count);
                        recalc();
                    });
                }
            }

            window.clearCart = function() {
                if (window.jQuery) {
                    jQuery.post("{{ route('cart.clear') }}", { _token: '{{ csrf_token() }}' }, function(res) {
                        jQuery(root).find('#cartList').empty();
                        jQuery(root).find('#cartTotal').text('0.00');
                        jQuery('#cartCount').text(res.count);
                        jQuery('#cartCountMobileTab').text(res.count);
                    });
                }
            };

            root.addEventListener('click', function(e) {
                var btn = e.target.closest('.js-remove');
                if (!btn || !root.contains(btn)) return;
                var pid = parseInt(btn.getAttribute('data-product-id') || '0');
                removeItem(pid);
            });

            root.addEventListener('click', function(e){
                var minus = e.target.closest('.qty-minus');
                var plus = e.target.closest('.qty-plus');
                var target = minus || plus;
                if (!target || !root.contains(target)) return;
                var row = target.closest('.cart-row');
                if (!row) return;
                var pid = parseInt(row.getAttribute('data-product-id') || '0');
                var qtyEl = row.querySelector('.qty-input');
                var v = parseInt(qtyEl.value || '1');
                v = isNaN(v) ? 1 : v;
                if (minus) v = Math.max(1, v - 1);
                if (plus) v = v + 1;
                qtyEl.value = v;
                recalc();
                updateQty(pid, v);
            });

            root.addEventListener('input', function(e){
                var qtyEl = e.target.closest('.qty-input');
                if (!qtyEl || !root.contains(qtyEl)) return;
                var row = qtyEl.closest('.cart-row');
                var pid = parseInt(row.getAttribute('data-product-id') || '0');
                var v = parseInt(qtyEl.value || '1');
                v = isNaN(v) ? 1 : Math.max(1, v);
                qtyEl.value = v;
                recalc();
                updateQty(pid, v);
            });

            recalc();
        })();
    </script>
    <style>
        #cartList .btn-sm {
            padding: 2px 6px;
            font-size: 12px;
            line-height: 1;
            border-radius: 6px
        }

        #cartList .qty-group {
            display: inline-flex;
            align-items: center;
            gap: 6px
        }

        #cartList .qty-minus,
        #cartList .qty-plus {
            min-width: 24px;
            height: 24px;
            border: 1px solid #ccc;
            color: #000;
            background: #fff
        }

        #cartList .qty-input {
            width: 44px;
            height: 24px;
            padding: 2px 4px;
            font-size: 12px;
            border: 1px solid #ccc;
            border-radius: 4px
        }
        #cartList .qty-input::-webkit-outer-spin-button,
        #cartList .qty-input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
        #cartList .qty-input { -moz-appearance: textfield; }

        #cartList .qty-group .times {
            color: #000
        }

        #cartList .qty-group .unit {
            color: #000
        }

        #cartList .btn-outline-brand {
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: 1px solid #7d716c;
            color: #7d716c;
            border-radius: 50%
        }

        #cartList .btn-outline-brand:hover,
        #cartList .btn-outline-brand:focus {
            background: transparent;
            color: #7d716c;
            border-color: #7d716c;
            box-shadow: none
        }

        .attr-line {
            font-size: 12px;
            color: #000;
            background: #f8f8f8;
            border: 1px solid #eee;
            padding: 4px 8px;
            border-radius: 8px
        }

        .attr-inline {
            font-size: 12px;
            color: #555
        }

        .product-name {
            text-transform: uppercase;
            color: #000;
            display: block;
            text-align: left
        }

        .cart-panel { display:flex; flex-direction:column; min-height:100% }
        #cartList { flex:1 1 auto; overflow-y:auto }
        .cart-footer {
            background: #fff;
            border-top: 1px solid #eee;
            padding-top: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            align-items: center;
            margin-top: 10px
        }

        .cart-footer .subtotal-left {
            font-size: 12px;
            color: #000;
            text-align: left;
            text-transform: uppercase;
            font-weight: 600
        }

        .cart-footer .subtotal-right {
            text-align: right;
            font-weight: 600;
            color: #000
        }

        .cart-footer .actions {
            grid-column: 1/3
        }

        .cart-footer .actions-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px
        }

        .cart-footer .checkout-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
            margin-top: 4px
        }

        .cart-footer .actions-row .btn,
        .cart-footer .checkout-row .btn {
            width: 100%;
            display: inline-block
        }
        .cart-footer .btn {
            background: #7d716c;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 22px 24px;
            font-size: 16px;
            text-transform: uppercase;
            line-height: 1;
            text-align: center
        }
    </style>
    @endif
</div>
