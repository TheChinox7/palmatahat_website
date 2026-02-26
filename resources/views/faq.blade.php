@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a>Questions fréquentes</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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
                                <p>Les chapeaux de haute gamme peuvent se rouler mais il n'est pas recommandé de les plier, car ils pueden perdre leur forme et leur structure. Un bon entretien garantit sa longévité.</p>
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