@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Checkout</h2>
    @php $total = 0; foreach($cart as $item){ $total += ((float)$item['price']) * ((int)$item['quantity']); } @endphp
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card p-3">
                <div class="fw-bold mb-2">Datos de la cuenta</div>
                @if(Auth::check())
                    <div><span class="text-muted">Nombre:</span> {{ Auth::user()->name }}</div>
                    <div><span class="text-muted">Email:</span> {{ Auth::user()->email }}</div>
                @else
                    <div class="mb-3">Para confirmar el pedido, inicia sesión o regístrate aquí mismo.</div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="fw-semibold mb-2">Iniciar sesión</div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-2">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">Recordarme</label>
                                </div>
                                <button class="btn btn-dark-custom w-100" type="submit">Iniciar sesión</button>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="fw-semibold mb-2">Crear cuenta</div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-2">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirmar contraseña</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                                <button class="btn btn-brand w-100" type="submit">Crear cuenta</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <div class="fw-bold mb-2">Resumen</div>
                <div class="d-flex justify-content-between">
                    <div>Total</div>
                    <div>{{ $currencySymbol ?? '$' }} {{ number_format($total,2) }}</div>
                </div>
                <form method="POST" action="{{ route('checkout.process') }}" class="mt-3">
                    @csrf
                    <button class="btn btn-dark-custom w-100">Confirmar pedido</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
