@extends('layouts.app')

@section('slider')
<div class="slider-active dot-style">
    <!-- Single -->
    <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center" style="background-image: url('{{ asset('img/palma/slider/1.jpg') }}') !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <!-- Hero Caption -->
                    <div class="hero__caption">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single -->
    <div class="single-slider slider-bg2 hero-overly slider-height d-flex align-items-center" style="background-image: url('{{ asset('img/palma/slider/2.jpg') }}') !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <!-- Hero Caption -->
                    <div class="hero__caption">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single -->
    <div class="single-slider slider-bg3 hero-overly slider-height d-flex align-items-center" style="background-image: url('{{ asset('img/palma/slider/3.jpg') }}') !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <!-- Hero Caption -->
                    <div class="hero__caption">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="popular-items pt-50">
    <div class="container-fluid">
        <style>
            .categories-slider .single-popular-items {
                padding: 0 10px
            }

            .popular-items .img-cap span {
                font-size: 20px
            }

            .categories-slider .img-cap span {
                font-size: 20px
            }

            .categories-slider {
                position: relative
            }

            .categories-slider.has-more-right::after {
                content: "";
                position: absolute;
                right: 0;
                top: 0;
                width: 60px;
                height: 100%;
                pointer-events: none;
                background: linear-gradient(to left, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0))
            }

            .categories-slider.has-more-left::before {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 60px;
                height: 100%;
                pointer-events: none;
                background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0))
            }

            .categories-slider .slick-arrow {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 44px;
                height: 44px;
                border: none;
                border-radius: 999px;
                background: rgba(0, 0, 0, 0.6);
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 22px;
                line-height: 1;
                cursor: pointer;
                z-index: 2;
            }

            .categories-slider .slick-prev {
                left: 6px;
            }

            .categories-slider .slick-next {
                right: 6px;
            }

            .categories-slider .slick-arrow.slick-disabled {
                opacity: .4;
                cursor: default;
            }

            .categories-slider.dot-style .slick-dots {
                bottom: -30px;
            }

            .categories-slider.dot-style .slick-dots button {
                margin-bottom: 0;
            }

            .categories-slider {
                margin-bottom: 50px;
            }

            .categories-slider.dot-style .slick-dots button {
                background: #000;
            }

            .categories-slider.dot-style .slick-dots .slick-active button {
                background: #000;
            }

            .categories-slider.dot-style .slick-dots li.slick-active button::before {
                border-color: #000;
            }

            /* Mobile: Show hover content by default */
            @media (max-width: 992px) {
                .popular-items .single-popular-items .popular-img .img-cap {
                    bottom: 0 !important;
                    opacity: 1 !important;
                    visibility: visible !important;
                }

                .popular-items .single-popular-items .popular-img .favorit-items {
                    opacity: 1 !important;
                    visibility: visible !important;
                    top: 50% !important;
                    transform: translateY(-50%) !important;
                }
            }
        </style>
        <div class="categories-slider dot-style">
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="popular-img">
                    <img src="{{ asset('img/palma/cats/cat1.svg') }}" alt="" loading="lazy" decoding="async">
                    <div class="img-cap">
                        <span style="font-size:20px;">Hommes</span>
                    </div>
                    <div class="favorit-items">
                        <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                    </div>
                </div>
            </div>
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="popular-img">
                    <img src="{{ asset('img/palma/cats/cat2.svg') }}" alt="" loading="lazy" decoding="async">
                    <div class="img-cap">
                        <span style="font-size:20px;">Dame</span>
                    </div>
                    <div class="favorit-items">
                        <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                    </div>
                </div>
            </div>
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="popular-img">
                    <img src="{{ asset('img/palma/cats/cat3.svg') }}" alt="" loading="lazy" decoding="async">
                    <div class="img-cap">
                        <span style="font-size:20px;">d'hiver</span>
                    </div>
                    <div class="favorit-items">
                        <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                    </div>
                </div>
            </div>
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="popular-img">
                    <img src="{{ asset('img/palma/cats/cat5.svg') }}" alt="" loading="lazy" decoding="async">
                    <div class="img-cap">
                        <span style="font-size:20px;">ENFANTS</span>
                    </div>
                    <div class="favorit-items">
                        <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                    </div>
                </div>
            </div>
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="popular-img">
                    <img src="{{ asset('img/palma/cats/cat4.svg') }}" alt="" loading="lazy" decoding="async">
                    <div class="img-cap">
                        <span style="font-size:20px;">BANDES ET ACCESSOIRES</span>
                    </div>
                    <div class="favorit-items">
                        <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new-arrival">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 style="font-size: 35px;">Nos<br>Produits</h2>
                </div>
            </div>
        </div>
        <div class="row g-1">
            @foreach(($recentProducts ?? []) as $product)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival product-card mb-5 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img">
                        @php($cover = $product->coverImage())
                        @php($images = $product->images)
                        @php($second = $images->count() > 1 ? $images->firstWhere('id', '!=', optional($cover)->id) : null)
                        <span class="badge-new">Nouveau</span>
                        <a href="{{ route('product.show', $product->slug) }}" class="d-block image-stack {{ $second ? 'has-secondary' : '' }}">
                            <img class="stack-img img-primary" loading="lazy" decoding="async" src="{{ $cover ? asset($cover->path) : ($product->image_path ? asset($product->image_path) : asset('img/palma/cats/cat2.svg')) }}" alt="{{ $product->name }}">
                            @if($second)
                            <img class="stack-img img-secondary" loading="lazy" decoding="async" src="{{ asset($second->path) }}" alt="{{ $product->name }}">
                            @endif
                        </a>
                    </div>
                    <div class="popular-caption">
                        <h3><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h3>
                        <span>{{ $currencySymbol }} {{ number_format($product->price,2) }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn">
                <a href="{{route('shop')}}" class="border-btn">Afficher Plus</a>
            </div>
        </div>
    </div>
</div>
<section class="collection section-bg2 section-padding30 section-over1"
    data-background="{{ asset('img/palma/section_bg01.svg') }}"
    style="width:100vw;margin-left:calc(50% - 50vw);margin-right:calc(50% - 50vw);position:relative;overflow:hidden;background-position: top center; background-size: cover; background-repeat: no-repeat;">
    <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>

    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9">
            <div class="single-question text-center">
                <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s" style="font-size:30px;">Le <b>chapeau de paille toquilla</b> : une histoire tissée de tradition.</h2>
                <a href="{{route('about.processus')}}" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">Découvrir</a>
            </div>
        </div>
    </div>

</section>
<div class="popular-product pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-product mb-50">
                    <div class="location-img">
                        <img src="{{ asset('img/palma/popular-imtes1.jpg') }}" alt="" loading="lazy" decoding="async">
                        <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>
                    </div>
                    <div class="location-details">
                        <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s"><a href="{{ route('about.histoire') }}" style="font-size:20px;">Plongez au cœur de notre histoire et de notre héritage</a></p>
                        <a href="{{ route('about.histoire') }}" class="btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-product mb-50">
                    <div class="location-img">
                        <img src="{{ asset('img/palma/popular-imtes2.jpg') }}" alt="" loading="lazy" decoding="async">
                        <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>
                    </div>
                    <div class="location-details">
                        <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s"><a href="{{ route('about.processus') }}" style="font-size:20px;">Découvrez l'art de la fabrication de nos chapeaux</a></p>
                        <a href="{{ route('about.processus') }}" class="btn wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Locations End -->
<!--? Services Area Start -->
<style>
    .categories-area {
        background: #fff;
        color: #000;
        padding: 40px 0;
    }

    .categories-area .row {
        gap: 0;
    }

    .categories-area .single-cat.feature-card {
        background: #fff;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
        padding: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        text-align: center;
        min-height: 112px;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .categories-area .single-cat.feature-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .categories-area .cat-icon img {
        width: 56px;
        height: 56px;
        object-fit: contain;
    }

    .categories-area .cat-cap h5 {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: #000;
    }
</style>
<div class="categories-area section-padding40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat feature-card mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="{{ asset('img/icon/services1.svg') }}" alt="" loading="lazy" decoding="async">
                    </div>
                    <div class="cat-cap">
                        <h5>Livraison en Toute Suisse</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat feature-card mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="{{ asset('img/icon/2.png') }}" alt="" loading="lazy" decoding="async">
                    </div>
                    <div class="cat-cap">
                        <h5>Fait par nos <b>artisans</b></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat feature-card mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="{{ asset('img/icon/3.png') }}" alt="" loading="lazy" decoding="async">
                    </div>
                    <div class="cat-cap">
                        <h5>Créez votre propre design</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat feature-card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="{{ asset('img/icon/4.png') }}" alt="" loading="lazy" decoding="async">
                    </div>
                    <div class="cat-cap">
                        <h5>Le luxe de l'exclusivité</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? Services Area End -->
<!--? FAQ Area Start -->
<div class="faq-area section-padding20 pb-5">
    <div class="container">
        <style>
            .faq-area .card {
                border: none;
                background: #fff;
                margin-bottom: 20px;
                border-radius: 8px !important;
                box-shadow: 0 4px 12px rgba(0,0,0,0.05);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }
            .faq-area .card:hover {
                box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            }
            .faq-area .card-header {
                background-color: #fff;
                border-bottom: none;
                padding: 0;
                border-radius: 8px;
            }
            .faq-area .card-header h5 {
                margin: 0;
            }
            .faq-area .card-header .btn {
                color: #222;
                font-weight: 700;
                text-transform: none;
                text-decoration: none;
                width: 100%;
                text-align: left;
                white-space: normal;
                padding: 25px 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 1.15rem;
                line-height: 1.4;
                transition: all 0.3s ease;
                background-color: #fff;
                border-radius: 8px;
            }
            .faq-area .card-header .btn:hover {
                background-color: #222; /* Black background for hover */
                color: #fff; /* White text for contrast */
                padding-left: 35px; /* Slight movement for interaction feedback */
            }
            .faq-area .card-header .btn:hover::after {
                color: #fff; /* Make icon white on hover */
            }
            .faq-area .card-header .btn:not(.collapsed) {
                background-color: #222; /* Dark background for active state */
                color: #fff; /* White text for active state */
                border-radius: 8px 8px 0 0;
                border-left: 5px solid #d4af37; /* Gold accent */
            }
            .faq-area .card-header .btn:focus {
                box-shadow: none;
            }
            .faq-area .card-body {
                background-color: #f8f9fa;
                color: #555;
                border-top: 1px solid #eee;
                border-radius: 0 0 8px 8px;
                padding: 25px 30px;
                font-size: 1.05rem;
                line-height: 1.7;
            }
            
            /* Icon styling */
            .faq-area .card-header .btn::after {
                content: '\f067'; /* fa-plus */
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                color: #999;
                font-size: 0.9rem;
                transition: transform 0.3s ease;
            }
            
            .faq-area .card-header .btn:not(.collapsed)::after {
                content: '\f068'; /* fa-minus */
                transform: rotate(180deg);
                color: #fff; /* White icon for active state */
            }

            /* Image column */
            .faq-image-container {
                position: relative;
                width: 100%;
                max-width: 100%; /* Ensure it doesn't exceed container width */
                /* Square aspect ratio 1:1 */
                padding-bottom: 100%; 
                height: 0;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            }
            
            .faq-image {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
                transform: scale(1.05);
            }
            
            .faq-image-container:hover .faq-image {
                transform: scale(1);
            }

            @media (max-width: 991px) {
                .faq-image-col {
                    display: none;
                }
                .faq-image-container {
                    display: none;
                }
            }
            
            @media (max-width: 768px) {
                .faq-area .section-tittle h2 {
                    font-size: 28px !important;
                }
                .faq-area .card-header .btn {
                    font-size: 1rem;
                    padding: 15px 20px;
                }
                .faq-area .card-body {
                    padding: 20px;
                }
            }
        </style>
        
        <div class="row align-items-start">
            <!-- Left Column: Title + FAQ -->
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="section-tittle mb-40">
                    <h2 style="font-size: 40px; text-align: left; margin-bottom: 20px; font-weight: 800; color: #111;">Questions Fréquentes</h2>
                </div>
                
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="faq1">
                            <h5 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Comment connaître ma taille de chapeau?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="faq1" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Comme pour tout vêtement, les chapeaux existent en différentes tailles. La façon correcte de connaître votre taille de chapeau est de placer un mètre ruban autour de votre tête, au niveau du milieu du front.</p>
                                <p class="mt-3 mb-0"><b>Nos tailles disponibles :</b></p>
                                <ul class="list-unstyled pl-3 mt-2">
                                    <li>S : 55-56 cm</li>
                                    <li>M : 57-58 cm</li>
                                    <li>L : 59-60 cm</li>
                                    <li>XL : 61 cm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq2">
                            <h5 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Comment identifier un vrai chapeau Panama?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Un véritable <b>Panama</b> s'identifie par la présence d’une rosace au sommet de la couronne, point de départ du tissage. Cette rosace peut varier selon la qualité, de 3 à 25 cercles pour les chapeaux haut de gamme, ce qui détermine leur authenticité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq3">
                            <h5 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Les panamas peuvent-ils se plier?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>Les chapeaux de haute gamme peuvent se rouler mais il n'est pas recommandé de les plier, car ils peuvent perdre leur forme et leur structure. Un bon entretien garantit sa longévité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faq4">
                            <h5 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Quelles sont les difficultés pour fabriquer un Panama?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faqAccordion">
                            <div class="card-body">
                                <p>La fabrication <b>artisanale</b> d’un véritable <b>Panama</b> est un savoir-faire exigeant, influencé par l'humidité, la chaleur, la pluie et l'exposition au soleil. Ces conditions affectent la souplesse de la paille et la régularité du tissage, rendant chaque chapeau unique et précieux.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Image Container -->
            <div class="col-lg-5 pl-lg-5 d-none d-lg-block">
                <div class="faq-image-container sticky-top" style="z-index: 1; max-width: 450px;">
                    <img src="{{ asset('img/palma/m1.jpg') }}" alt="Chapeau Panama Montecristi" class="faq-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!--? FAQ Area End -->
@endsection