@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h2 class="h5 m-0">Configuration du site</h2>
    </div>
    <form method="POST" action="{{ route('admin.settings.update') }}" class="card p-3">
        @csrf
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Code devise</label>
                <input type="text" name="currency_code" class="form-control" value="{{ old('currency_code', $setting->currency_code) }}" placeholder="USD">
            </div>
            <div class="col-md-4">
                <label class="form-label">Symbole devise</label>
                <input type="text" name="currency_symbol" class="form-control" value="{{ old('currency_symbol', $setting->currency_symbol) }}" placeholder="$">
            </div>
            <div class="col-md-4">
                <label class="form-label">Téléphone (code pays)</label>
                <input type="text" name="phone_country_code" class="form-control" value="{{ old('phone_country_code', $setting->phone_country_code) }}" placeholder="+1">
            </div>
            <div class="col-md-6">
                <label class="form-label">Téléphone (numéro)</label>
                <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $setting->phone_number) }}" placeholder="555 123 4567">
            </div>
            <div class="col-12">
                <label class="form-label">Réseaux sociaux</label>
                <div id="socialRows" class="d-flex flex-column" style="gap:8px;">
                    @php($links = old('social_links', $setting->social_links ?? []))
                    @forelse($links as $idx => $link)
                        <div class="row g-2 align-items-end social-row">
                            <div class="col-md-4">
                                <label class="form-label">Icône (classe)</label>
                                <input type="text" class="form-control" name="social_links[{{ $idx }}][icon]" value="{{ $link['icon'] ?? '' }}" placeholder="fab fa-facebook-f">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">URL</label>
                                <input type="text" class="form-control" name="social_links[{{ $idx }}][url]" value="{{ $link['url'] ?? '' }}" placeholder="https://">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-danger w-100" onclick="this.closest('.social-row').remove()">Supprimer</button>
                            </div>
                        </div>
                    @empty
                        <div class="row g-2 align-items-end social-row">
                            <div class="col-md-4">
                                <label class="form-label">Icône (classe)</label>
                                <input type="text" class="form-control" name="social_links[0][icon]" value="fab fa-facebook-f">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">URL</label>
                                <input type="text" class="form-control" name="social_links[0][url]" value="https://">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-danger w-100" onclick="this.closest('.social-row').remove()">Supprimer</button>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="mt-2">
                    <button type="button" class="btn btn-outline-secondary" id="addSocial">Ajouter réseau</button>
                </div>
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button class="btn btn-brand">Enregistrer</button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
    </form>
</div>
@push('scripts')
<script>
(function(){
    var addBtn = document.getElementById('addSocial');
    var rows = document.getElementById('socialRows');
    function nextIndex(){
        var idx = 0;
        rows.querySelectorAll('.social-row').forEach(function(){ idx++; });
        return idx;
    }
    if(addBtn && rows){
        addBtn.addEventListener('click', function(){
            var i = nextIndex();
            var tpl = document.createElement('div');
            tpl.className = 'row g-2 align-items-end social-row';
            tpl.innerHTML = '\
            <div class="col-md-4">\
                <label class="form-label">Icône (classe)</label>\
                <input type="text" class="form-control" name="social_links['+i+'][icon]" placeholder="fab fa-instagram">\
            </div>\
            <div class="col-md-6">\
                <label class="form-label">URL</label>\
                <input type="text" class="form-control" name="social_links['+i+'][url]" placeholder="https://">\
            </div>\
            <div class="col-md-2">\
                <button type="button" class="btn btn-outline-danger w-100" onclick="this.closest(\'\.social-row\').remove()">Supprimer</button>\
            </div>';
            rows.appendChild(tpl);
        });
    }
})();
</script>
@endpush
@endsection