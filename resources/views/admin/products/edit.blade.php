@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">Éditer produit</h2>
    <style>
        .section-tabs {
            gap: 8px;
            margin-bottom: 12px
        }

        .section-tabs .nav-link {
            border-radius: 10px;
            background: #f1f1f1;
            color: #000
        }

        .section-tabs .nav-link.active {
            background: #7d716c;
            color: #fff
        }

        .pane-card {
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            background: #fff;
            padding: 16px
        }

        .pane-title {
            font-weight: 600;
            color: #000;
            margin-bottom: 12px
        }

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 10px;
            margin-top: 10px
        }

        .preview-grid img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #eee
        }

        .attr-option label {
            transition: transform .12s ease, box-shadow .12s ease
        }

        .attr-option input:checked+span {
            font-weight: 600
        }
    </style>
    <form method="POST" action="{{ route('admin.products.update', $product) }}" class="card p-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <ul class="nav nav-pills section-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-info" type="button" role="tab">Information</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-attrs" type="button" role="tab">Attributs</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-images" type="button" role="tab">Images</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-info" role="tabpanel">
                <div class="pane-card">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Catégorie</label>
                            <select name="category_id" class="form-select" required>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" @selected($product->category_id==$cat->id)>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nom</label>
                            <input type="text" name="name" id="js-name" class="form-control" value="{{ old('name',$product->name) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="js-slug" class="form-control" value="{{ old('slug',$product->slug) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Prix</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price',$product->price) }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description',$product->description) }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ old('stock',$product->stock) }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-attrs" role="tabpanel">
                <div class="pane-card">
                    <div class="row g-3">
                        @foreach(($attributes ?? []) as $attr)
                        <div class="col-md-6">
                            <div class="border rounded p-2 h-100">
                                <label class="form-label">{{ $attr->name }}</label>
                                @php($currentVals = $product->attributeValues->where('attribute_id',$attr->id))
                                @if($attr->type==='text')
                                <input type="text" name="attr_text[{{ $attr->id }}]" class="form-control" value="{{ optional($currentVals->first())->value }}">
                                @elseif($attr->type==='select')
                                @php($selected = optional($currentVals->first())->attribute_option_id)
                                <div class="d-flex flex-wrap" style="gap:8px;">
                                    @foreach($attr->options as $opt)
                                    <label class="btn btn-outline-secondary btn-sm attr-option">
                                        <input type="radio" name="attr_select[{{ $attr->id }}]" value="{{ $opt->id }}" {{ (int)$selected === (int)$opt->id ? 'checked' : '' }}>
                                        <span>{{ $opt->label }}</span>
                                    </label>
                                    @endforeach
                                    <a href="#" class="attr-clear" data-target="attr_select[{{ $attr->id }}]">Effacer</a>
                                </div>
                                @elseif($attr->type==='multi_select')
                                @php($selected = $currentVals->pluck('attribute_option_id')->filter()->map(fn($v)=>(int)$v)->toArray())
                                <div class="d-flex flex-wrap" style="gap:8px;">
                                    @foreach($attr->options as $opt)
                                    <label class="btn btn-outline-secondary btn-sm attr-option">
                                        <input type="checkbox" name="attr_multi[{{ $attr->id }}][]" value="{{ $opt->id }}" {{ in_array((int)$opt->id, $selected) ? 'checked' : '' }}>
                                        <span>{{ $opt->label }}</span>
                                    </label>
                                    @endforeach
                                    <a href="#" class="attr-clear" data-target="attr_multi[{{ $attr->id }}][]">Limpiar</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-images" role="tabpanel">
                <div class="pane-card">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Images</label>
                            <input type="file" name="images[]" id="js-images" class="form-control" multiple>
                            <small class="text-muted">Vous pouvez télécharger toutes les images dont vous avez besoin.</small>
                            <div id="js-image-preview" class="preview-grid"></div>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle table-modern">
                                    <thead>
                                        <tr>
                                            <th>Couverture</th>
                                            <th>Image</th>
                                            <th>Ordre</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product->images as $img)
                                        <tr>
                                            <td>
                                                <input type="radio" name="cover_id" value="{{ $img->id }}" {{ $img->is_cover?'checked':'' }}>
                                            </td>
                                            <td>
                                                <img src="{{ asset($img->path) }}" alt="" style="height:60px; width:auto; border-radius:6px;">
                                            </td>
                                            <td style="max-width:100px;">
                                                <input type="number" class="form-control" name="order[{{ $img->id }}]" value="{{ $img->sort_order }}">
                                            </td>
                                            <td class="text-end">
                                                <button type="button" class="btn btn-sm btn-outline-danger js-del-image" data-url="{{ route('admin.products.images.destroy', [$product,$img]) }}">Supprimer</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-2">
                                    <button class="btn btn-outline-secondary btn-sm" name="save_images" value="1">Enregistrer l'ordre et la couverture</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Mettre à jour</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@push('scripts')
<script>
    (function() {
        document.querySelectorAll('.attr-clear').forEach(function(a) {
            a.addEventListener('click', function(e) {
                e.preventDefault();
                const name = this.getAttribute('data-target');
                document.querySelectorAll('input[name="' + name + '"]').forEach(function(inp) {
                    inp.checked = false;
                });
            });
        });
        document.querySelectorAll('.js-del-image').forEach(function(btn) {
            btn.addEventListener('click', function() {
                if (!confirm('Supprimer l\'image ?')) return;
                const url = this.getAttribute('data-url');
                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: '_method=DELETE'
                    })
                    .then(function() {
                        location.reload();
                    });
            });
        });
        var nameInp = document.getElementById('js-name');
        var slugInp = document.getElementById('js-slug');
        var lastAutoSlug = slugInp ? slugInp.value : '';

        function slugify(s) {
            return s.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '').replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
        }
        if (nameInp && slugInp) {
            nameInp.addEventListener('input', function() {
                var auto = slugify(this.value);
                if (!slugInp.value || slugInp.value === lastAutoSlug) {
                    slugInp.value = auto;
                    lastAutoSlug = auto;
                }
            });
            slugInp.addEventListener('input', function() {
                lastAutoSlug = this.value;
            });
        }
        var imgInp = document.getElementById('js-images');
        var preview = document.getElementById('js-image-preview');
        if (imgInp && preview) {
            imgInp.addEventListener('change', function() {
                preview.innerHTML = '';
                Array.from(this.files || []).forEach(function(f) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        preview.appendChild(img);
                    };
                    reader.readAsDataURL(f);
                });
            });
        }
        document.querySelectorAll('.attr-option input').forEach(function(inp) {
            function sync() {
                var label = inp.closest('.attr-option');
                if (!label) return;
                if (inp.checked) {
                    label.style.transform = 'scale(1.03)';
                    label.style.boxShadow = '0 0 0 2px #7d716c inset';
                } else {
                    label.style.transform = '';
                    label.style.boxShadow = '';
                }
            }
            inp.addEventListener('change', sync);
            sync();
        });
        var tabButtons = document.querySelectorAll('.section-tabs .nav-link');
        tabButtons.forEach(function(btn){
            btn.addEventListener('click', function(e){
                if(window.bootstrap && bootstrap.Tab){
                    var inst = bootstrap.Tab.getOrCreateInstance(btn);
                    inst.show();
                } else {
                    e.preventDefault();
                    var target = btn.getAttribute('data-bs-target');
                    document.querySelectorAll('.section-tabs .nav-link').forEach(function(b){ b.classList.remove('active'); });
                    btn.classList.add('active');
                    document.querySelectorAll('.tab-content .tab-pane').forEach(function(p){ p.classList.remove('show'); p.classList.remove('active'); });
                    var pane = document.querySelector(target);
                    if(pane){ pane.classList.add('show'); pane.classList.add('active'); }
                }
            });
        });
    })();
</script>
@endpush
@endsection