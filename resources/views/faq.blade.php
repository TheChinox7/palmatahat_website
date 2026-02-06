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
    <div class="faq-area section-padding20 pb-5">
        <div class="container">
            <style>
                .faq-area .card {
                    border: none;
                    background: transparent;
                    margin-bottom: 15px;
                }
                .faq-area .card-header {
                    border-radius: 8px;
                    padding: 0;
                    transition: background-color 0.3s ease;
                }
                .faq-area .card-header:hover {
                }
                .faq-area .card-header h5 {
                    margin: 0;
                }
                .faq-area .card-header .btn {
                    color: #ffffff;
                    font-weight: 600;
                    text-transform: none;
                    text-decoration: none;
                    width: 100%;
                    text-align: left;
                    white-space: normal;
                    padding: 20px;
                    display: block; /* Changed from flex to block to fix text spacing */
                    font-size: 12pt;
                    line-height: 1.4;
                }
                .faq-area .card-header .btn:focus {
                    box-shadow: none;
                }
                .faq-area .card-body {
                    background-color: #ffffff;
                    color: #555555;
                    border: 1px solid #eeeeee;
                    border-top: none;
                    border-radius: 0 0 8px 8px;
                    padding: 20px;
                }
                /* Fix rounded corners when collapsed */
                .faq-area .card-header .btn.collapsed {
                    border-radius: 8px;
                }
                .faq-area .card-header .btn:not(.collapsed) {
                    border-radius: 8px 8px 0 0;
                    background-color: #7d716c; /* Brand color when active */
                    color: #fff;
                }
                
                @media (max-width: 768px) {
                    .faq-area .section-tittle h2 {
                        font-size: 2rem !important;
                    }
                    .faq-area .card-header .btn {
                        font-size: 1rem;
                        padding: 15px;
                    }
                    .faq-area .card-body p {
                        font-size: 0.9rem;
                        color: #555555;
                    }
                }
            </style>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-center pt-10">
                        <h2 style="font-size:3.2rem;">Questions Fréquentes</h2>
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
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <p>Comme pour tout vêtement, les chapeaux existent en différentes tailles. La façon correcte de connaître votre taille de chapeau est de placer un mètre ruban autour de votre tête, au niveau du milieu du front.</p>
                                            <p><b>Nos tailles disponibles :</b><br>
                                            S : 55-56 cm<br>
                                            M : 57-58 cm<br>
                                            L : 59-60 cm<br>
                                            XL : 61 cm</p>
                                        </div>
                                        <div class="col-12 text-center">
                                            <img src="{{ asset('img/palma/cabeza.JPG') }}" alt="Guide des tailles" class="img-fluid rounded shadow-sm" style="max-height: 300px; width: auto;" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faq2">
                                <h5 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Comment identifier un vrai <b>chapeau Panama</b>?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-9 mb-3 mb-md-0 order-md-1">
                                            <p>Un véritable <b>Panama</b> s'identifie par la présence d’une rosace au sommet de la couronne, point de départ du tissage. Cette rosace peut varier selon la qualité, de 3 à 25 cercles pour les chapeaux haut de gamme, ce qui détermine leur authenticité.</p>
                                        </div>
                                        <div class="col-md-3 text-center order-md-2">
                                            <img src="{{ asset('img/palma/fq2.jpg') }}" alt="Guide des tailles" class="img-fluid rounded shadow-sm" style="max-height: 150px; width: auto;" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faq3">
                                <h5 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Les <b>panamas</b> peuvent-ils se plier?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-9 mb-3 mb-md-0">
                                            <p>Les chapeaux de haute gamme peuvent se rouler mais il n'est pas recommandé de les plier, car ils peuvent perdre leur forme et leur structure.</p>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <img src="{{ asset('img/palma/fq3.jpg') }}" alt="Guide des tailles" class="img-fluid rounded shadow-sm" style="max-height: 150px; width: auto;" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faq4">
                                <h5 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Quelles sont les difficultés pour fabriquer un <b>Panama</b>?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-9 mb-3 mb-md-0 order-md-1">
                                            <p>La fabrication <b>artisanale</b> d’un véritable <b>Panama</b> est un savoir-faire exigeant, influencé par l'humidité, la chaleur, la pluie et l'exposition au soleil. Ces conditions affectent la souplesse de la paille et la régularité du tissage, rendant chaque chapeau unique et précieux.</p>
                                        </div>
                                        <div class="col-md-3 text-center order-md-2">
                                            <img src="{{ asset('img/palma/fp4.png') }}" alt="Guide des tailles" class="img-fluid rounded shadow-sm" style="max-height: 150px; width: auto;" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection