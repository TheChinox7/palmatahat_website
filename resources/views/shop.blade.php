@extends('layouts.app')


@section('content')
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a>Catalogue</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="category-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 ">
                <div class="category-listing mb-50">
                    <div class="single-listing">
                        <form id="filtersForm" method="GET" action="{{ route('shop') }}" class="filters-card">
                            <div class="mb-3">
                                <label class="filter-label">Rechercher</label>
                                <div class="input-group filters-input">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input type="text" name="search" id="searchInput" value="{{ $search ?? '' }}" class="form-control" placeholder="rechercher...">
                                </div>
                            </div>

                            <div class="filter-section">
                                <span class="filter-label">Catégories</span>
                                <ul class="category-list">
                                    <li><a href="{{ route('shop') }}" class="category-link {{ request('category') ? '' : 'active' }}" aria-current="{{ request('category') ? 'false' : 'true' }}">Tous les produits</a></li>
                                    @foreach(($categories ?? []) as $cat)
                                    <li><a href="{{ route('shop') }}?category={{ $cat->slug }}" class="category-link {{ request('category')===$cat->slug ? 'active' : '' }}" aria-current="{{ request('category')===$cat->slug ? 'true' : 'false' }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="filter-section">
                                <span class="filter-label">Prix</span>
                                <div class="range-wrap">
                                    <input type="range" id="rangeMin" min="{{ (int)$globalMin }}" max="{{ (int)$globalMax }}" value="{{ (int)($minPrice ?? $globalMin) }}" class="form-range">
                                    <input type="range" id="rangeMax" min="{{ (int)$globalMin }}" max="{{ (int)$globalMax }}" value="{{ (int)($maxPrice ?? $globalMax) }}" class="form-range">
                                    <input type="hidden" name="min_price" id="minPriceInput" value="{{ $minPrice }}">
                                    <input type="hidden" name="max_price" id="maxPriceInput" value="{{ $maxPrice }}">
                                    <div class="d-flex justify-content-between mt-1"><small>Prix : <span id="rangeLabel"></span></small></div>
                                </div>
                            </div>

                            @foreach(($attributes ?? []) as $attr)
                            <div class="filter-section">
                                <span class="filter-label">{{ $attr->name }}</span>
                                <div class="d-flex flex-wrap filter-options" style="gap:6px;">
                                    @php($selected = collect(data_get($attrFilters, $attr->id, []))->map(fn($v)=>(int)$v)->toArray())
                                    @foreach($attr->options as $opt)
                                    <label class="filter-option">
                                        <input type="checkbox" name="attr[{{ $attr->id }}][]" value="{{ $opt->id }}" {{ in_array((int)$opt->id, $selected) ? 'checked' : '' }}>
                                        <span>{{ $opt->label }}</span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 ">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <form id="sortForm" method="GET" action="{{ route('shop') }}" class="d-flex align-items-center" style="gap:8px;">
                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                        @foreach(($attrFilters ?? []) as $aid=>$vals)
                        @foreach((array)$vals as $v)
                        <input type="hidden" name="attr[{{ $aid }}][]" value="{{ $v }}">
                        @endforeach
                        @endforeach
                        <select name="sort" class="form-select form-select-sm" onchange="document.getElementById('sortForm').submit()" style="max-width:220px;">
                            <option value="" {{ $sort=='' ? 'selected':'' }}>Tri par défaut</option>
                            <option value="price_asc" {{ $sort=='price_asc' ? 'selected':'' }}>Prix : croissant</option>
                            <option value="price_desc" {{ $sort=='price_desc' ? 'selected':'' }}>Prix : décroissant</option>
                            <option value="name_asc" {{ $sort=='name_asc' ? 'selected':'' }}>Nom A-Z</option>
                            <option value="name_desc" {{ $sort=='name_desc' ? 'selected':'' }}>Nom Z-A</option>
                        </select>
                        <select name="per_page" class="form-select form-select-sm" onchange="document.getElementById('sortForm').submit()" style="max-width:120px;">
                            @foreach([9,12,18,24] as $pp)
                            <option value="{{ $pp }}" {{ (int)$perPage === (int)$pp ? 'selected':'' }}>Afficher {{ $pp }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="new-arrival new-arrival2" id="productContainer">
                    @include('partials.product_cards', ['products' => $products])
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .filters-card {
        background: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 14px;
        padding: 16px;
    }

    .filter-label {
        color: #000;
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
    }

    .filters-input .input-group-text {
        background: #111111;
        color: #ffffff;
        border: 1px solid #222222;
        min-width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .filters-input .form-control {
        border: 1px solid #dddddd;
        height: 42px;
        padding: 8px 12px;
    }

    .filters-input .form-control:focus {
        box-shadow: none;
        border-color: #7d716c;
    }

    .filter-section {
        border: 1px solid #f0f0f0;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
        background: #fafafa;
    }

    .category-list {
        list-style: none;
        margin: 0;
        padding: 0;
        max-height: 220px;
        overflow: auto;
    }

    .category-link {
        display: block;
        padding: 6px 8px;
        color: #000;
        text-decoration: none;
        border-radius: 6px;
    }

    .category-link:hover {
        background: #f0f0f0;
        color: #000;
    }
    .category-link.active { background:#f0f0f0; color:#000; font-weight:600; border:1px solid #7d716c; }

    .filters-actions {
        display: flex;
        gap: 8px;
    }

    .btn-apply {
        background: #7d716c;
        color: #ffffff;
        border: none;
        border-radius: 10px;
        padding: 6px 12px;
    }

    .btn-apply:hover {
        background: #6b605b;
        color: #ffffff;
    }

    .btn-clear {
        border: 1px solid #ced4da;
        color: #6c757d;
        border-radius: 10px;
        padding: 6px 12px;
    }

    .btn-clear:hover {
        background: #f8f9fa;
        color: #6c757d;
    }

    .single-new-arrival .thumb {
        width: 100%;
        display: block;
        border-radius: 0;
        overflow: hidden;
    }

    .single-new-arrival .thumb img {
        width: 100%;
        aspect-ratio: 16 / 10;
        object-fit: cover;
        display: block;
    }
    .wow { visibility: visible !important; animation: none !important; }
    /* Desactivar sticky header en la vista Shop */
    .header-sticky.sticky-bar { position: static !important; top: auto !important; left: auto !important; width: 100%; box-shadow: none !important; animation: none !important; }
    /* Ocultar preloader en Shop */
    #preloader-active { display: none !important; }

    .single-new-arrival.product-card {
        background: #ffffff;
        border: none;
        border-radius: 0;
        padding: 0;
        transition: box-shadow .2s ease, border-color .2s ease;
    }
    .single-new-arrival.product-card:hover {
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        border-color: #dcdcdc;
    }
    .single-new-arrival.product-card .popular-img { margin-bottom: 0; }
    .single-new-arrival.product-card .popular-caption { padding: 8px 6px; border-top: 1px solid #e5e5e5; }
    .single-new-arrival.product-card .popular-caption h3 a { margin-bottom: 6px; line-height: 1.15; text-decoration: none; }
    .single-new-arrival.product-card .popular-caption span { line-height: 1.2; }
    .single-new-arrival.product-card .popular-caption h3 a { margin-bottom: 0; line-height: 1.1; text-decoration: none; }
    .single-new-arrival.product-card .popular-caption span { line-height: 1.1; }

    #filtersForm .filter-option {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        border: 1px solid #dddddd;
        border-radius: 999px;
        cursor: pointer;
        background: #ffffff;
    }

    #filtersForm .filter-option input {
        display: none;
    }

    #filtersForm .filter-option span {
        font-size: 13px;
        color: #000;
    }

    #filtersForm .filter-option input:checked+span {
        font-weight: 600;
    }

    .range-wrap {
        position: relative;
        padding-top: 8px;
    }

    .range-wrap input[type=range] {
        width: 100%;
        -webkit-appearance: none;
        appearance: none;
        height: 4px;
        background: #eee;
        border-radius: 4px;
        position: relative;
    }

    .range-wrap input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #7d716c;
        cursor: pointer;
    }

    .range-wrap input[type=range]::-moz-range-thumb {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #7d716c;
        cursor: pointer;
    }
    /* Responsive Typography */
    .responsive-title, .section-tittle h2, h1, h2, h3, h4 {
        font-size: 50px !important;
        text-align: center !important;
        font-weight: 700;
        color: black;
    }
    h3, h4 {
        font-size: 18pt !important;
    }
    
    .responsive-text, p, .pera {
        font-size: 12pt !important;
        text-align: justify;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .responsive-title, .section-tittle h2, h1, h2 {
            font-size: 30px !important;
        }
        h3, h4 {
            font-size: 16pt !important;
        }
        .responsive-text, p, .pera {
            font-size: 12pt !important;
            text-align: left;
            line-height: 1.6;
        }
    }
</style>
<script>
    function addToCart(pid) {
        $.post("{{ route('cart.add') }}", {
            _token: '{{ csrf_token() }}',
            product_id: pid,
            quantity: 1
        }, function(res) {
            if(window.updateCartCount){ window.updateCartCount(res.count); }
            else { $('#cartCount').text(res.count); $('#cartCountMobileTab').text(res.count); }
            if(window.refreshCart){ window.refreshCart(); }
        });
    }
    (function() {
        var rMin = document.getElementById('rangeMin');
        var rMax = document.getElementById('rangeMax');
        var minI = document.getElementById('minPriceInput');
        var maxI = document.getElementById('maxPriceInput');
        var lbl = document.getElementById('rangeLabel');

        function sync() {
            var a = Math.min(parseFloat(rMin.value || 0), parseFloat(rMax.value || 0));
            var b = Math.max(parseFloat(rMin.value || 0), parseFloat(rMax.value || 0));
            minI.value = a;
            maxI.value = b;
            if (lbl) {
                lbl.textContent = 'CHF ' + a + ' — CHF ' + b;
            }
        }
        if (rMin && rMax) {
            function onRangeInput() {
                sync();
                clearTimeout(timer);
                timer = setTimeout(reloadList, 250);
            }
            rMin.addEventListener('input', onRangeInput);
            rMax.addEventListener('input', onRangeInput);
            sync();
        }

        var searchInp = document.getElementById('searchInput');
        var filtersForm = document.getElementById('filtersForm');
        var productContainer = document.getElementById('productContainer');
        var timer;

        function reloadList() {
            var data = $(filtersForm).serialize();
            var y = window.scrollY || window.pageYOffset || 0;
            $.get("{{ route('shop.list') }}", data, function(html) {
                $('#productContainer').html(html);
                window.scrollTo(0, y);
            });
        }
        if (searchInp) {
            searchInp.addEventListener('input', function() {
                clearTimeout(timer);
                timer = setTimeout(reloadList, 300);
            });
        }
        // Opcional: enviar filtros vía AJAX
        if (filtersForm) {
            filtersForm.addEventListener('submit', function(e) {
                e.preventDefault();
                reloadList();
            });
            filtersForm.querySelectorAll('input[type="checkbox"]').forEach(function(cb) {
                cb.addEventListener('change', function() {
                    clearTimeout(timer);
                    timer = setTimeout(reloadList, 250);
                });
            });
        }
    })();
</script>
@endsection
