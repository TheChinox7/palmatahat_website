@extends('layouts.app')

@section('content')
<div class="container py-5 auth-page">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="auth-card shadow-sm">
                <div class="auth-body">
                    <h2 class="auth-title text-center mb-3">{{ __('Vérifier votre adresse e-mail') }}</h2>
                    <p class="text-center text-muted mb-4">{{ __('Avant de continuer, veuillez vérifier votre e-mail pour le lien de vérification.') }}</p>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn auth-btn btn-block">{{ __('Renvoyer le lien de vérification') }}</button>
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
