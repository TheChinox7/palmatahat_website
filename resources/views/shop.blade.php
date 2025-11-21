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
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-50">
                        <p>Explorez notre collection de chapeaux</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 ">
                    <div class="category-listing mb-50">
                        <div class="single-listing">
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">Type de chapeau</option>
                                    <option value="">Cowboy</option>
                                    <option value="">Fedora</option>
                                    <option value="">Panama</option>
                                    <option value="">Charro</option>
                                </select>
                            </div>
                            <div class="select-job-items2">
                                <select name="select3">
                                    <option value="">Matériau</option>
                                    <option value="">Feutre</option>
                                    <option value="">Paille</option>
                                    <option value="">Tissu</option>
                                    <option value="">Cuir</option>
                                </select>
                            </div>
                            <div class="select-job-items2">
                                <select name="select4">
                                    <option value="">Taille</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                </select>
                            </div>
                            <div class="select-job-items2">
                                <select name="select5">
                                    <option value="">Couleur</option>
                                    <option value="">Blanc</option>
                                    <option value="">Noir</option>
                                    <option value="">Beige</option>
                                    <option value="">Marron</option>
                                    <option value="">Gris</option>
                                </select>
                            </div>
                            <div class="select-job-items2">
                                <select name="select6">
                                    <option value="">Gamme de prix</option>
                                    <option value="">$200 a $400</option>
                                    <option value="">$400 a $600</option>
                                    <option value="">$600 a $800</option>
                                    <option value="">$800 a $1000</option>
                                    <option value="">$1000 a $1500</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 ">
                    <div class="new-arrival new-arrival2">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-new-arrival mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ $product->image_path ? asset($product->image_path) : asset('img/palma/cats/cat2.svg') }}" alt="{{ $product->name }}">
                                        <div class="favorit-items">
                                            <img src="{{asset('img/gallery/favorit-card.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="#">{{ $product->name }}</a></h3>
                                        <span>CHF {{ number_format($product->price,2) }}</span>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-primary" onclick="addToCart({{ (int)$product->id }})">Ajouter au panier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">{{ $products->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addToCart(pid) {
            $.post("{{ route('cart.add') }}", { _token: '{{ csrf_token() }}', product_id: pid, quantity: 1 }, function (res) {
                $('#cartCount').text(res.count);
            });
        }
    </script>
@endsection
