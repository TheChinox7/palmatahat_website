@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Caisse</h2>
    @php $total = 0; foreach($cart as $item){ $total += ((float)$item['price']) * ((int)$item['quantity']); } @endphp
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card p-3">
                <div class="fw-bold mb-2">Coordonnées</div>
                @if(Auth::check())
                    <div><span class="text-muted">Nom:</span> {{ Auth::user()->name }}</div>
                    <div><span class="text-muted">E-mail:</span> {{ Auth::user()->email }}</div>
                @else
                    <div class="mb-3">Pour confirmer la commande, connectez-vous ou inscrivez-vous ici.</div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="fw-semibold mb-2">Connexion</div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-2">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                <button class="btn btn-dark-custom w-100" type="submit">Connexion</button>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="fw-semibold mb-2">Créer un compte</div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-2">
                                    <label class="form-label">Nom</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirmer le mot de passe</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                                <button class="btn btn-brand w-100" type="submit">Créer un compte</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <div class="fw-bold mb-2">Résumé</div>
                <div class="d-flex justify-content-between">
                    <div>Total</div>
                    <div>{{ $currencySymbol ?? '$' }} {{ number_format($total,2) }}</div>
                </div>
                <form method="POST" action="{{ route('checkout.process') }}" class="mt-3">
                    @csrf
                    <button class="btn btn-dark-custom w-100">Confirmer la commande</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    h1, h2 {
        font-size: 50px !important;
        text-align: center !important;
    }
    h3, h4 {
        font-size: 18pt !important;
    }
    p, .text-muted, .mb-3 {
        font-size: 12pt !important;
    }
    @media (max-width: 768px) {
        h1, h2 {
            font-size: 30px !important;
        }
        h3, h4 {
            font-size: 16pt !important;
        }
    }
</style>
@endsection
