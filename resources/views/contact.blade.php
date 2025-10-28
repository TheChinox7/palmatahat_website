@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a>Contact</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section" style="margin-top: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Nous contacter</h2>
                    <p>Vous avez des questions ou souhaitez en savoir plus sur nos chapeaux artisanaux ? N'hésitez pas à
                        nous contacter!</p>
                </div>

                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-home"></i></span>
                        <div class="media-body">
                            <h3>Mexico City, Mexico</h3>
                            <p>123 Rue des Sombreros</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-phone"></i></span>
                        <div class="media-body">
                            <h3>+52 555 123 4567</h3>
                            <p>Lun-Ven 9h-18h</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fas fa-envelope"></i></span>
                        <div class="media-body">
                            <h3>contact@sombreros.com</h3>
                            <p>Envoyez-nous vos questions!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map-container"
                        style="height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4997.572137686219!2d6.11215825576138!3d46.20551157109573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64b64664b72f%3A0x8db648717efa5cec!2sAv.%20d&#39;A%C3%AFre%2073A%2C%201203%20Gen%C3%A8ve%2C%20Switzerland!5e1!3m2!1sen!2sec!4v1755893504624!5m2!1sen!2sec"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/palma/h1.jpg') }}" alt="Chapeau Panama" class="img-fluid"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/palma/h2.jpg') }}" alt="Artisan Panama" class="img-fluid"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('img/palma/h3.jpg') }}" alt="Tradition Panama" class="img-fluid"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
@endsection