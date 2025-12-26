@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}" style="color: #000;">Accueil</a></li>
                            <li class="breadcrumb-item"><a style="color: #000;">Bandes pour chapeaux</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-center pt-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="responsive-title" style="color: #000;">Bandes pour chapeaux</h2>
                        <p class="pera responsive-text" style="text-align: justify; color: #000;">Nos bandes pour chapeau sont bien
                            plus qu'un simple accessoire : elle représentent une parfaite fusion entre style contemporain et
                            richesse culturelle. Conçues pour ceux qui recherchent la modernité avec une touche authentique.
                        </p>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="{{ asset('img/palma/cats/cat4.svg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                        <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="{{ asset('img/palma/bandes.png') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-left pt-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <p class="pera responsive-text" style="color: #000;">
                            Bandes ethniques réalisée par des <b>artisans</b> équatoriens
                            Nous célébrons l'héritage culturel de L'Equateur avec des bandes tissées <b>à la main</b> par des
                            <b>artisans</b> locaux. Utilisant des techniques ancestrales et de motif authentiques.
                            <br>
                            Chaque pièce reflète l'identité et la créativité des communautés indigènes apportant des
                            couleurs et des motifs uniques qui enrichissent votre chapeau
                            <br>
                            Nous proposons un choix des bandes en tissu.
                        </p>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 mb-4 mb-md-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="{{ asset('img/palma/snegro.png') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="{{ asset('img/palma/csnegro.png') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Responsive Typography and Layout */
        .responsive-title {
            font-size: 3.2rem;
        }
        .responsive-text {
            font-size: 1.6rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .responsive-title {
                font-size: 2.2rem;
            }
            .responsive-text {
                font-size: 1.1rem;
                text-align: left !important; /* Left align for mobile readability */
            }
            .section-tittle {
                margin-bottom: 30px !important;
                text-align: left !important;
            }
            /* Adjust image heights for mobile if needed, though img-fluid handles width well */
            .img-fluid {
                height: auto !important; /* Let height adjust naturally on mobile or set specific height */
                min-height: 300px;
                object-fit: cover;
            }
        }
    </style>
@endsection