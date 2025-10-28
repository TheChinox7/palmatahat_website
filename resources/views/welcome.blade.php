@extends('layouts.app')

@section('slider')
    <div class="slider-active dot-style">
        <!-- Single -->
        <div class="single-slider hero-overly slider-height d-flex align-items-center position-relative">
            <video autoplay muted loop playsinline class="w-100 h-100 position-absolute"
                style="object-fit:cover; left:0; top:0; z-index:0;" preload="auto"
                poster="{{ asset('img/palma/slider-poster.jpg') }}">
                <source src="{{ asset('img/palma/slider.mp4') }}" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
            </video>
            <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>
            <div class="container position-relative" style="z-index:1;">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption text-white">
                            <h1>Chapeaux<br>de paille<br>toquilla</h1>
                            <a href="{{ route('shop') }}" class="btn">Achetez maintenant</a>
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
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="{{ asset('img/palma/cats/cat1.svg') }}" alt="">
                            <div class="img-cap">
                                <span>Chapeaux Hommes</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="popular-img">
                            <img src="{{ asset('img/palma/cats/cat2.svg') }}" alt="">
                            <div class="img-cap">
                                <span>Chapeaux Dame</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="{{ asset('img/palma/cats/cat3.svg') }}" alt="">
                            <div class="img-cap">
                                <span>Chapeaux d'hiver</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".6s">
                        <div class="popular-img">
                            <img src="{{ asset('img/palma/cats/cat4.svg') }}" alt="">
                            <div class="img-cap">
                                <span>Accessoires</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ route('shop') }}" class="btn">Acheter Maintenant</a>
                            </div>
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
                        <h2>Nos<br>Produits</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/27.a.Panama-Hat-Sara-fino-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/5.a.Panama-hat-cavalier-llano-rosas-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/28.a.-Panama-Hat-Isabel-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/20.a.-Panama-Hat-Analu-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Knitted Jumper</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".5s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/18.a.Panama-Hat-Santa-Ana-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".6s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/22.a.-Panama-Hat-Veronica-summer-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".7s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/12a.Bolso-de-mano-pequeno-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".8s">
                        <div class="popular-img">
                            <img src="https://homeroortega.com/wp-content/uploads/2024/07/21.a.-Panama-Hat-Emilia-1024x684.jpg" alt="">
                            <div class="favorit-items">
                                <!-- <span class="flaticon-heart"></span> -->
                                <img src="{{asset ('img/gallery/favorit-card.png')}}" alt="">
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Pull Tricoté</a></h3>
                            <span>$ 30.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn">
                    <a href="{{route('shop')}}" class="border-btn">Afficher Plus</a>
                </div>
            </div>
        </div>
    </div>
    <section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15"
        data-background="{{ asset('img/palma/section_bg01.jpg') }}">
        <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>
        <div class="container-fluid"></div>
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="single-question text-center">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">Le chapeau de paille toquilla : une histoire tissée de tradition.</h2>
                    <a href="{{route('about')}}" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">Découvrir</a>
                </div>
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
                            <img src="{{ asset('img/palma/popular-imtes1.jpg') }}" alt="">
                            <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>
                        </div>
                        <div class="location-details">
                            <p><a href="{{ route('about') }}">Plongez au cœur de notre histoire et de notre héritage</a></p>
                            <a href="{{ route('about') }}" class="btn">Découvrir</a>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-product mb-50">
                                <div class="location-img">
                                    <img src="{{ asset('img/palma/popular-imtes2.jpg') }}" alt="">
                                    <div class="position-absolute w-100 h-100" style="left:0; top:0; background:rgba(0,0,0,0.3); z-index:0.5;"></div>
                                </div>
                                <div class="location-details">
                                    <p><a href="{{ route('about') }}">Découvrez l'art de la fabrication de nos chapeaux</a></p>
                                    <a href="{{ route('about') }}" class="btn">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Locations End -->
    <!--? Services Area Start -->
    <div class="categories-area section-padding40 gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="{{ asset('img/icon/services1.svg') }}" alt="" style="width: 50px; height: 50px; object-fit: contain;">
                        </div>
                        <div class="cat-cap">
                            <h5>Livraison en Toute Suisse</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="{{ asset('img/icon/2.png') }}" alt="" style="width: 50px; height: 50px; object-fit: contain;">
                        </div>
                        <div class="cat-cap">
                            <h5>Fait par nos artisans</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ asset('img/icon/3.png') }}" alt="" style="width: 50px; height: 50px; object-fit: contain;">
                        </div>
                        <div class="cat-cap">
                            <h5>Créez votre propre design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="cat-icon">
                            <img src="{{ asset('img/icon/4.png') }}" alt="" style="width: 50px; height: 50px; object-fit: contain;">
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
@endsection
