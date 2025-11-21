@extends('layouts.app')

@section('content')
<div class="container py-5 auth-page">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="auth-card shadow-sm">
                <div class="auth-body">
                    <h2 class="auth-title text-center mb-3">{{ __('Définir un nouveau mot de passe') }}</h2>
                    <p class="text-center text-muted mb-4">{{ __('Renseignez votre e-mail et le nouveau mot de passe') }}</p>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mb-3">
                            <label class="auth-label" for="email">{{ __('Adresse e-mail') }}</label>
                            <div class="input-group auth-input">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span></div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="auth-label" for="password">{{ __('Nouveau mot de passe') }}</label>
                            <div class="input-group auth-input">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="auth-label" for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
                            <div class="input-group auth-input">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <button type="submit" class="btn auth-btn btn-block mb-3">{{ __('Enregistrer') }}</button>
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="auth-link">{{ __('Retour à la connexion') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-card { background:#ffffff; border:1px solid #e5e5e5; border-radius:14px; overflow:hidden; }
    .auth-body { padding:22px 22px 24px; }
    .auth-title { font-size:22px; color:#000; }
    .auth-label { font-weight:600; color:#000; }
    .auth-input .input-group-text { background:#111111; color:#ffffff; border:1px solid #222222; min-width:48px; height:48px; display:flex; align-items:center; justify-content:center; }
    .auth-input .form-control { border:1px solid #dddddd; height:48px; padding:10px 14px; }
    .auth-input .form-control:focus { box-shadow:none; border-color:#7d716c; }
    .auth-btn { background:#7d716c; color:#ffffff; border:none; border-radius:10px; width:100%; height:48px; padding:0 18px; display:flex; align-items:center; justify-content:center; }
    .auth-btn:hover { background:#6b605b; color:#fff; }
    .auth-link { color:#7d716c; }
    .auth-link:hover { color:#5e544f; text-decoration:none; }
</style>
@endsection
