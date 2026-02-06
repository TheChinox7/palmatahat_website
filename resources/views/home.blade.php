@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous êtes connecté !') }}
                </div>
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
    p, .card-body {
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
