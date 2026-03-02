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
                    <h2 class="mb-4 responsive-title">Mon histoire</h2>
                    <h3 class="mb-4 responsive-subtitle">Entre les mains et les fibres, l'histoire derrière Palmatahat</h3>
                    <p class="pera responsive-text" style="color: black;">
                        Mon voyage au cœur du chapeau Panama.
                        Tout a commencé par un voyage en Équateur, une visite à mes origines, un pays rempli de
                        traditions vivantes, de mains expertes et d'un art transmis de génération en génération.
                    </p>
                </div>

                <!-- Content Block 1 -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft d-none d-md-block" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-img">
                            <img src="{{ asset('img/palma/popular-imtes1.jpg') }}" alt="Chapeau Montecristi authentique fait main"
                                class="img-fluid rounded shadow-lg hover-effect" loading="lazy" decoding="async"
                                style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-caption">
                            <p class="responsive-text" style="color: black;">
                                En parcourant différentes régions du pays, j'ai eu l'opportunité de découvrir des
                                communautés où le temps semblait s'arrêter et où chaque fibre tissée raconte une histoire.
                                J'ai visité des ateliers modestes, partagé des moments inoubliables dans les champs où naît la
                                paille toquilla, et rencontré des artisans qui consacrent leur vie à créer des pièces uniques.
                            </p>
                            <p class="responsive-text" style="color: black;">
                                Apprécier de près leur travail patient, précis et fondé sur des techniques ancestrales
                                m'a profondément marquée. Il ne s'agissait pas simplement d'un accessoire, c'est de la culture,
                                de l'identité et de l'art. Cette expérience m'a inspirée à porter cet héritage au-delà des frontières.
                                Ainsi est née Palmatahat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Content Block 2 -->
                <div class="section-tittle mb-60 pt-10">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <p class="pera responsive-text" style="color: black;">
                                Une boutique qui ne propose pas seulement des chapeaux mais qui célèbre la valeur du
                                travail artisanal équatorien.
                                Chaque chapeau que nous proposons a été soigneusement sélectionné, certifié et
                                représente un lien direct avec ceux qui l'ont fabriqué.
                                Chez Palmatahat, nous travaillons directement avec des communautés artisanes pour
                                vous offrir des chapeaux authentiques, certifiés et uniques.
                            </p>
                            <p class="pera responsive-text" style="color: black;">
                                Porter un chapeau Panama n'est pas seulement un choix de style, c'est une manière
                                d'honorer une histoire bien réelle.
                                Chaque modèle reflète des siècles de traditions et des techniques reconnues comme
                                patrimoine culturel immatériel de l'humanité par l'UNESCO.
                            </p>
                            <h4 class="mt-4 mb-3 responsive-subtitle">Pourquoi choisir un chapeau Panama?</h4>
                            <p class="pera responsive-text" style="color: black;">
                                Notre histoire ne se fabrique pas, elle se tisse. Nous ne vendons pas un produit,
                                nous partageons un héritage.
                            </p>
                        </div>
                        <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="text-center">
                                <img src="{{ asset('img/palma/popular-imtes2.jpg') }}" alt="Artisan tissant un chapeau Panama"
                                    class="img-fluid rounded shadow-lg hover-effect" loading="lazy" decoding="async"
                                    style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commitment Section -->
                <div class="mt-5 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <h3 class="mb-4 responsive-subtitle">Notre engagement</h3>
                    <ul class="list-unstyled commitment-list" style="color: black; display: inline-block; text-align: left;">
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i> Offrir des produits authentiques et certifiés</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i> Promouvoir le respect et la valorisation du travail artisanal</li>
                        <li class="mb-2"><i class="fas fa-check text-success mr-2"></i> Soutenir directement les communautés qui font vivre cette tradition</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Gallery Section Full Width -->
    <div class="container-fluid mt-5 p-0">
        <div class="row gallery-row m-0">
            <div class="col-md-6 p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="gallery-hover">
                    <img src="{{ asset('img/palma/foto 2.jpg') }}" alt="Chapeau Panama élégant" class="img-fluid w-100 h-100" loading="lazy" decoding="async" style="object-fit: cover; object-position: center;">
                </div>
            </div>
            <div class="col-md-6 p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="gallery-hover">
                    <img src="{{ asset('img/palma/foto1.jpeg') }}" alt="Tradition et style Panama" class="img-fluid w-100 h-100" loading="lazy" decoding="async" style="object-fit: cover; object-position: center;">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Responsive Typography */
    .responsive-title,
    .section-tittle h2,
    h1,
    h2 {
        font-size: 40px !important;
        text-align: center !important;
    }

    .responsive-subtitle,
    h3,
    h4 {
        font-size: 18pt !important;
    }

    .responsive-text,
    p,
    .pera {
        font-size: 12pt !important;
        text-align: justify;
        line-height: 1.8;
    }

    .commitment-list {
        font-size: 12pt !important;
        line-height: 1.8;
    }

    /* Hover Effect for Images */
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-effect:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
    }

    /* Gallery Styles */
    .gallery-hover {
        overflow: hidden;
        height: 600px;
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

    .gallery-row>[class*="col-"] {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .pera b {
        font-weight: 600;
    }

    /* Mobile Adaptations */
    @media (max-width: 768px) {

        .responsive-title,
        .section-tittle h2,
        h1,
        h2 {
            font-size: 28px !important;
        }

        .responsive-subtitle,
        h3,
        h4 {
            font-size: 16pt !important;
        }

        .responsive-text,
        p,
        .pera {
            font-size: 12pt !important;
            text-align: left;
        }

        .commitment-list {
            font-size: 12pt !important;
        }

        .section-tittle {
            margin-bottom: 30px !important;
        }

        .gallery-hover {
            height: 400px;
            /* Smaller height for mobile */
        }
    }
</style>
@endsection