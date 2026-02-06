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

    <!-- Map Section Begin -->
    <div class="map-area" style="margin-top: -50px; margin-bottom: 50px;">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="map-container" style="height: 450px; width: 100%;">
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
    <!-- Map Section End -->

    <div class="contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title mb-30" style="font-weight: bold; color: #000;">Nous contacter</h2>
                    <p class="mb-40" style="font-size: 12pt; color: black;">Vous avez des questions ou souhaitez en savoir plus sur nos chapeaux artisanaux ? N'hésitez pas à nous contacter !</p>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre message'" placeholder=" Entrez votre message" style="border: 1px solid #ccc; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre nom'" placeholder="Entrez votre nom" style="border: 1px solid #ccc; height: 50px; padding: 10px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre email'" placeholder="Entrez votre email" style="border: 1px solid #ccc; height: 50px; padding: 10px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez le sujet'" placeholder="Entrez le sujet" style="border: 1px solid #ccc; height: 50px; padding: 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button boxed-btn" style="background-color: #000; color: #fff; padding: 15px 30px; border: none; text-transform: uppercase; cursor: pointer;">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info mb-3">
                        <span class="contact-info__icon" style="color: #000; font-size: 27px; margin-right: 20px;"><i class="fas fa-home"></i></span>
                        <div class="media-body">
                            <h3 style="color: #000; margin-bottom: 5px;">Genève, Suisse</h3>
                            <p>Av. d'Aïre 73A, 1203 Genève</p>
                        </div>
                    </div>
                    <div class="media contact-info mb-3">
                        <span class="contact-info__icon" style="color: #000; font-size: 27px; margin-right: 20px;"><i class="fas fa-phone"></i></span>
                        <div class="media-body">
                            <h3 style="color: #000; margin-bottom: 5px;">+41 79 123 45 67</h3>
                            <p>Lun-Ven 9h-18h</p>
                        </div>
                    </div>
                    <div class="media contact-info mb-3">
                        <span class="contact-info__icon" style="color: #000; font-size: 27px; margin-right: 20px;"><i class="fas fa-envelope"></i></span>
                        <div class="media-body">
                            <h3 style="color: #000; margin-bottom: 5px;">info@palmatahat.com</h3>
                            <p>Envoyez-nous vos questions!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('img/palma/ct1.png') }}" alt="Chapeau Panama" class="img-fluid hover-effect"
                    style="width: 100%; height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>
            <div class="col-md-6 mb-4">
                <img src="{{ asset('img/palma/h2.jpg') }}" alt="Artisan Panama" class="img-fluid hover-effect"
                    style="width: 100%; height: 500px; object-fit: cover; object-position: top; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
    <style>
        /* Hover Effect for Images */
        .hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-effect:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
        }

        .contact-title, h2, h1 {
            font-size: 50px !important;
            text-align: center !important;
        }
        h3, h4 {
            font-size: 18pt !important;
        }
        p, .mb-40, .media-body p {
            font-size: 12pt !important;
        }
        @media (max-width: 768px) {
            .contact-title, h2, h1 {
                font-size: 30px !important;
            }
            h3, h4 {
                font-size: 16pt !important;
            }
        }
    </style>
@endsection
