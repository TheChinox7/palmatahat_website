@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mon histoire</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Title Section -->
                    <div class="section-tittle text-center mb-60 pt-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="mb-4" style="font-size:3.2rem;">Mon histoire</h2>
                        <h3 class="mb-4">Entre les mains et les fibres, l'histoire derrière Palmatahat</h3>
                        <p class="pera" style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.8;">
                            Mon voyage au cœur du <b>chapeau Panama</b>.
                            Tout a commencé par un voyage en Équateur, une visite à mes origines, un pays rempli de
                            traditions vivantes, de mains expertes et d'un art transmis de génération en génération.
                        </p>
                    </div>

                    <!-- Content Block 1 -->
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="about-img">
                                <img src="{{ asset('img/palma/popular-imtes1.jpg') }}" alt="Chapeau Montecristi authentique fait main"
                                    class="img-fluid rounded shadow-lg hover-effect"
                                    style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="about-caption">
                                <p style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.8;">
                                    En parcourant différentes régions du pays, j'ai eu l'opportunité de découvrir des
                                    communautés où le temps semblait s'arrêter et où chaque fibre tissée raconte une histoire.
                                    J'ai visité des ateliers modestes, partagé des moments inoubliables dans les champs où naît la
                                    paille toquilla, et rencontré des <b>artisans</b> qui consacrent leur vie à créer des pièces uniques.
                                </p>
                                <p style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.8;">
                                    Apprécier de près leur travail patient, précis et fondé sur des techniques ancestrales
                                    m'a profondément marquée. Il ne s'agissait pas simplement d'un accessoire, c'est de la culture,
                                    de l'identité et de l'art. Cette expérience m'a inspirée à porter cet héritage au-delà des frontières.
                                    Ainsi est née <b>Palmatahat</b>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Block 2 -->
                    <div class="section-tittle mb-60 pt-10">
                        <div class="row align-items-center">
                            <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                                <p class="pera" style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.8;">
                                    Une boutique qui ne propose pas seulement des chapeaux mais qui célèbre la valeur du
                                    <b>travail artisanal</b> équatorien.
                                    Chaque chapeau que nous proposons a été soigneusement sélectionné, certifié et
                                    représente un lien direct avec ceux qui l'ont fabriqué.
                                    Chez Palmatahat, nous travaillons directement avec des communautés <b>artisanes</b> pour
                                    vous offrir des chapeaux authentiques, certifiés et uniques.
                                </p>
                                <p class="pera" style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.8;">
                                    Porter un <b>chapeau Panama</b> n'est pas seulement un choix de style, c'est une manière
                                    d'honorer une histoire bien réelle.
                                    Chaque modèle reflète des siècles de traditions et des techniques reconnues comme
                                    patrimoine culturel immatériel de l'humanité par l'UNESCO.
                                </p>
                                <h4 class="mt-4 mb-3">Pourquoi choisir un chapeau Panama ?</h4>
                                <p class="pera" style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.8;">
                                    Notre histoire ne se fabrique pas, elle se tisse. Nous ne vendons pas un produit,
                                    nous partageons un héritage.
                                </p>
                            </div>
                            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="text-center">
                                    <img src="{{ asset('img/palma/popular-imtes2.jpg') }}" alt="Artisan tissant un chapeau Panama"
                                        class="img-fluid rounded shadow-lg hover-effect"
                                        style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commitment Section -->
                    <div class="mt-5 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h3 class="mb-4">Notre engagement</h3>
                        <ul class="list-unstyled" style="font-size: 1.6rem; color: black; line-height: 1.8; display: inline-block; text-align: left;">
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i> Offrir des produits authentiques et certifiés</li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i> Promouvoir le respect et la valorisation du <b>travail artisanal</b></li>
                            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i> Soutenir directement les communautés qui font vivre cette tradition</li>
                        </ul>
                    </div>

                    </div>
                </div>
            </div>

            <!-- Gallery Section Full Width -->
            <div class="container-fluid mt-5 p-0">
                <div class="row gallery-row m-0">
                    <div class="col-lg-3 col-md-6 col-6 p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="gallery-hover">
                            <img src="{{ asset('img/palma/h1.jpg') }}" alt="Chapeau Panama élégant" class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="gallery-hover">
                            <img src="{{ asset('img/palma/h2.jpg') }}" alt="Détail du tissage Panama" class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="gallery-hover">
                            <img src="{{ asset('img/palma/h3.jpg') }}" alt="Tradition et style Panama" class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="gallery-hover">
                            <img src="{{ asset('img/palma/h4.jpg') }}" alt="Tradition et style Panama" class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <style>
        .gallery-hover {
            overflow: hidden;
            height: 400px;
            position: relative;
        }
        .gallery-hover img {
            transition: transform 0.6s ease;
            width: 100%;
            height: 100%;
        }
        .gallery-hover:hover img {
            transform: scale(1.05);
        }
        .gallery-row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        .gallery-row > [class*="col-"] {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .pera b {
            font-weight: 600;
        }
    </style>
@endsection
