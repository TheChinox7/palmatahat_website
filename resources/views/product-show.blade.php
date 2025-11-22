@extends('layouts.app')

@section('content')
<div class="container py-3">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{ route('shop') }}">Catalogue</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>

    <div class="row g-4 align-items-start mt-50">
        <div class="col-lg-6">
            @php($cover = $product->coverImage())
            @php($images = $product->images && $product->images->count() ? $product->images : collect([]))
            @php($fallback = $product->image_path ? asset($product->image_path) : asset('img/palma/cats/cat2.svg'))
            @php($firstImage = $cover ? asset($cover->path) : $fallback)
            <div class="card p-2" style="border:1px solid #e5e5e5;border-radius:12px;">
                <a href="{{ $cover ? asset($cover->path) : $fallback }}" class="d-block position-relative" id="mainImageLink" aria-label="Ver imagen en pantalla completa">
                    <img id="mainImage" src="{{ $firstImage }}" alt="{{ $product->name }}" style="width:100%;height:420px;object-fit:cover;border-radius:8px;">
                    <span class="position-absolute" style="right:12px;bottom:12px;background:#000;color:#fff;border-radius:20px;padding:6px 10px;font-size:12px;">Ampliar</span>
                </a>
                @php($thumbs = $images->count() ? $images : collect([$cover])->filter())
                <div class="d-flex flex-wrap mt-2" id="thumbs" role="list" aria-label="Miniaturas" style="gap:8px;">
                    @foreach($images->count() ? $images : collect([]) as $img)
                    <button type="button" class="btn p-0" style="border:1px solid #eee;border-radius:8px;" aria-label="Ver imagen" data-src="{{ asset($img->path) }}" data-full="{{ asset($img->path) }}">
                        <img src="{{ asset($img->path) }}" alt="" style="width:80px;height:80px;object-fit:cover;border-radius:8px;">
                    </button>
                    @endforeach
                    @if(!$images->count())
                    <button type="button" class="btn p-0" style="border:1px solid #eee;border-radius:8px;" aria-label="Ver imagen" data-src="{{ $firstImage }}" data-full="{{ $firstImage }}">
                        <img src="{{ $firstImage }}" alt="" style="width:80px;height:80px;object-fit:cover;border-radius:8px;">
                    </button>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h1 class="mt-3 h1" style="color:#000;">{{ $product->name }}</h1>
            <div class="mb-2 h3" style="color:#333;">{{ $currencySymbol }} {{ number_format($product->price,2) }}</div>
            <p class="mt-5 mb-5" style="color:#000;">{{ $product->description }}</p>

            @if($product->attributeValues && $product->attributeValues->count())
            @php($groups = $product->attributeValues->groupBy('attribute_id'))
            <div class="mt-3" id="attributesSection" aria-labelledby="attributesTitle">
                @foreach($groups as $aid => $values)
                @php($attr = optional($values->first())->attribute)
                <div class="mb-3" data-attribute-id="{{ (int)$aid }}" data-attribute-type="{{ $attr->type ?? 'select' }}">
                    <div class="mb-1" style="color:#000;font-weight:600;">{{ $attr->name ?? '' }}</div>
                    @php($opts = $values->map(function($v){ return $v->option ? $v->option->label : $v->value; })->filter()->unique()->values())
                    @php($optsCount = $opts->count())
                    <div class="d-flex flex-wrap product-options" role="radiogroup" aria-label="{{ $attr->name ?? '' }}" style="gap:8px;">
                        @foreach($opts as $label)
                        <label class="product-option" style="margin:0;">
                            <input type="radio" name="attr[{{ (int)$aid }}]" value="{{ $label }}" {{ $optsCount===1 ? 'checked disabled' : '' }}>
                            <span>{{ $label }}</span>
                        </label>
                        @endforeach
                        @if($optsCount>1)
                        <a href="#" class="ms-2 text-decoration-underline" data-clear="attr[{{ (int)$aid }}]">Limpiar</a>
                        @endif
                    </div>
                </div>
                @endforeach
                <div class="mt-2" id="selectionSummary" style="color:#000;"></div>
            </div>
            @endif

            <div class="mt-3">
                <label for="quantityInput" class="form-label" style="color:#000;">Cantidad</label>
                <div class="input-group" style="max-width:120px;">
                    <button class="btn btn-outline-secondary btn-sm qty-btn" type="button" id="qtyMinus" aria-label="Disminuir">−</button>
                    <input id="quantityInput" type="number" min="1" value="1" class="form-control text-center" style="width:50px;" aria-label="Cantidad">
                    <button class="btn btn-outline-secondary btn-sm qty-btn" type="button" id="qtyPlus" aria-label="Aumentar">+</button>
                </div>
            </div>

            <div class="mt-3 mb-1 d-flex w-100" style="gap:12px;">
                <button class="btn btn-brand" id="addToCartBtn" data-product-id="{{ (int)$product->id }}" style="flex:1;">Añadir al carrito</button>
                <button class="btn btn-outline-secondary" id="checkoutBtn" aria-label="Comprar ahora" style="flex:1;">Comprar ahora</button>
            </div>

            <div class="mt-3" id="addToCartFeedback" role="alert" aria-live="polite"></div>
        </div>
    </div>

    @php($related = (isset($related) ? $related : \App\Models\Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->take(4)->get()))
    @if($related && $related->count())
    <div class="mt-5">
        <h2 class="h5" style="color:#000;">Productos relacionados</h2>
        <div class="row g-3">
            @foreach($related as $rp)
            @php($rc = $rp->coverImage())
            <div class="col-6 col-md-3">
                <a href="{{ route('product.show', $rp->slug) }}" class="d-block text-decoration-none">
                    <div class="card p-2 h-100" style="border:1px solid #e5e5e5;border-radius:12px;">
                        <img src="{{ $rc ? asset($rc->path) : ($rp->image_path ? asset($rp->image_path) : asset('img/palma/cats/cat2.svg')) }}" alt="{{ $rp->name }}" style="width:100%;height:140px;object-fit:cover;border-radius:8px;">
                        <div class="pt-2" style="color:#000;">
                            <div class="fw-semibold">{{ $rp->name }}</div>
                            <div class="small">{{ $currencySymbol }} {{ number_format($rp->price,2) }}</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>

<script>
    (function() {
        var mainImg = document.getElementById('mainImage');
        var mainLink = document.getElementById('mainImageLink');
        var thumbs = document.getElementById('thumbs');
        var feedback = document.getElementById('addToCartFeedback');
        var qty = document.getElementById('quantityInput');
        var addBtn = document.getElementById('addToCartBtn');
        var checkoutBtn = document.getElementById('checkoutBtn');
        var selected = {};

        function updateSummary() {
            var el = document.getElementById('selectionSummary');
            if (!el) return;
            var parts = [];
            document.querySelectorAll('[data-attribute-id]').forEach(function(wrap) {
                var aid = wrap.getAttribute('data-attribute-id');
                var type = wrap.getAttribute('data-attribute-type');
                var name = wrap.querySelector('.mb-1') ? wrap.querySelector('.mb-1').textContent : '';
                if (type === 'multi_select') {
                    var vals = [];
                    wrap.querySelectorAll('input[type="checkbox"]').forEach(function(ch) {
                        if (ch.checked) {
                            vals.push(ch.value);
                        }
                    });
                    if (vals.length) {
                        parts.push(name + ': ' + vals.join(', '));
                        selected[aid] = vals;
                    } else {
                        delete selected[aid];
                    }
                } else {
                    var r = wrap.querySelector('input[type="radio"]:checked');
                    if (r) {
                        parts.push(name + ': ' + r.value);
                        selected[aid] = r.value;
                    } else {
                        delete selected[aid];
                    }
                }
            });
            el.textContent = parts.length ? ('Selección: ' + parts.join(' | ')) : '';
        }

        function checkRequiredSelections(){
            var allSelected = true;
            document.querySelectorAll('[data-attribute-id]').forEach(function(wrap){
                var radios = wrap.querySelectorAll('input[type="radio"]');
                if(radios.length){
                    var r = wrap.querySelector('input[type="radio"]:checked');
                    if(!r){ allSelected = false; }
                } else {
                    var ch = wrap.querySelector('input[type="checkbox"]:checked');
                    if(!ch){ allSelected = false; }
                }
            });
            if(addBtn){ addBtn.disabled = !allSelected; }
            return allSelected;
        }

        document.addEventListener('change', function(e) {
            if (e.target && e.target.name && (e.target.name.indexOf('attr[') === 0 || e.target.name.indexOf('attr_multi[') === 0)) {
                updateSummary();
                checkRequiredSelections();
            }
        });

        if (thumbs) {
            thumbs.addEventListener('click', function(e) {
                var t = e.target.closest('button[data-src]');
                if (!t) return;
                var src = t.getAttribute('data-src');
                var full = t.getAttribute('data-full');
                mainImg.src = src;
                mainLink.href = full || src;
            });
        }

        function showFeedback(msg, ok) {
            if (!feedback) return;
            var icon = ok ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-exclamation-circle"></i>';
            feedback.innerHTML = '<span class="icon">'+icon+'</span><span>'+msg+'</span>';
            feedback.className = ok ? 'feedback feedback-success show' : 'feedback feedback-error show';
            if (feedback._timer) { clearTimeout(feedback._timer); }
            feedback._timer = setTimeout(function(){
                feedback.classList.remove('show');
            }, 3000);
        }

        addBtn && addBtn.addEventListener('click', function() {
            var pid = parseInt(addBtn.getAttribute('data-product-id') || '0');
            var q = parseInt(qty.value || '1');
            if (q < 1) {
                showFeedback('Cantidad inválida', false);
                return;
            }
            var requiredOk = checkRequiredSelections();
            if (!requiredOk) {
                showFeedback('Selecciona las variantes requeridas', false);
                return;
            }
            addBtn.disabled = true;
            showFeedback('Añadiendo...', true);
            jQuery.post("{{ route('cart.add') }}", {
                _token: '{{ csrf_token() }}',
                product_id: pid,
                quantity: q,
                attributes: selected
            }, function(res) {
                jQuery('#cartCount').text(res.count);
                showFeedback('Producto añadido al carrito', true);
            }).fail(function() {
                showFeedback('No se pudo añadir al carrito', false);
            }).always(function() {
                addBtn.disabled = false;
            });
        });

        checkoutBtn && checkoutBtn.addEventListener('click', function(){
            var pid = parseInt(addBtn.getAttribute('data-product-id')||'0');
            var q = parseInt(qty.value||'1');
            var requiredOk = checkRequiredSelections();
            if(!requiredOk){ showFeedback('Selecciona las variantes requeridas', false); return; }
            jQuery.post("{{ route('cart.add') }}", { _token: '{{ csrf_token() }}', product_id: pid, quantity: q, attributes: selected }, function (res) {
                jQuery('#cartCount').text(res.count);
                window.location.href = "{{ route('checkout.show') }}";
            });
        });

        jQuery(function($) {
            var items = [];
            $('#thumbs button').each(function() {
                items.push({
                    src: $(this).data('full') || $(this).data('src')
                });
            });
            if (items.length === 0 && $('#mainImageLink').attr('href')) {
                items.push({
                    src: $('#mainImageLink').attr('href')
                });
            }
            $('#mainImageLink').on('click', function(e) {
                e.preventDefault();
                if (items.length) {
                    $.magnificPopup.open({
                        items: items,
                        gallery: {
                            enabled: true
                        }
                    });
                }
            });
            updateSummary();
            checkRequiredSelections();
            $('#qtyMinus').on('click', function(){ var v = parseInt($('#quantityInput').val()||'1'); v = isNaN(v)?1:v; v = Math.max(1, v-1); $('#quantityInput').val(v); });
            $('#qtyPlus').on('click', function(){ var v = parseInt($('#quantityInput').val()||'1'); v = isNaN(v)?1:v; $('#quantityInput').val(v+1); });
            $('#quantityInput').on('input', function(){ var v = parseInt(this.value||'1'); if(isNaN(v) || v < 1){ this.value = 1; } });
        });
    })();
</script>

<style>
    .product-options .product-option {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        border: 1px solid #dddddd;
        border-radius: 999px;
        cursor: pointer;
        background: #ffffff;
    }
    .product-options .product-option input { display: none; }
    .product-options .product-option span { font-size: 13px; color: #000; }
    .product-options .product-option input:checked + span { font-weight: 600; }
</style>

<style>
    #quantityInput::-webkit-outer-spin-button,
    #quantityInput::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
    #quantityInput { -moz-appearance: textfield; }
</style>

<style>
    .qty-btn { padding:2px 8px; min-width:30px; height:30px; display:flex; align-items:center; justify-content:center; line-height:1; }
    #quantityInput { height:30px; padding:2px 6px; }
</style>

<style>
    #addToCartFeedback { min-height: 0; }
    .feedback { display:flex; align-items:center; gap:8px; padding:10px 12px; border-radius:10px; border:1px solid transparent; background:#ffffff; color:#000; box-shadow:0 4px 12px rgba(0,0,0,0.06); opacity:0; transform:translateY(-4px); transition:opacity .2s ease, transform .2s ease; }
    .feedback.show { opacity:1; transform:translateY(0); }
    .feedback .icon { font-size:18px; line-height:1; }
    .feedback-success { border-color:#28a745; background:#e9f7ef; }
    .feedback-error { border-color:#dc3545; background:#fdecea; }
</style>

@endsection
