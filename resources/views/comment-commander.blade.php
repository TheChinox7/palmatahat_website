@extends('layouts.app')

@section('content')
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Comment commander</li>
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
                    <h2 class="mb-4 responsive-title">Comment commander ?</h2>
                    <p class="pera responsive-text" style="color: black;">
                        Découvrez le chapeau Panama authentique en Suisse. Je suis ambassadrice de l'artisanat
                            équatorien en Suisse et fièrement originaire d'Équateur. À travers cette boutique je
                        vous propose une sélection exclusive des chapeaux Panama 100% fait main par nos maîtres
                        artisans.
                    </p>

                </div>
                <!-- Content Block 3: Image Left, Text Right -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-img">
                            <img src="{{ asset('img/palma/c3.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                class="img-fluid rounded shadow-lg hover-effect" loading="lazy" decoding="async"
                                style="width: 100%; height: 600px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-caption">
                            <h3 class="mb-4 responsive-subtitle">L’élégance du véritable Panama</h3>
                            <p class="responsive-text mb-4">
                                Découvrez l’authenticité de l’artisanat équatorien. Je suis Leticia, fondatrice de Palmata Hat et fière ambassadrice de mon pays d'origine en Suisse.
                            </p>
                            <p class="responsive-text">
                                Chaque chapeau est une pièce unique, tissée 100% à la main par nos maîtres artisans avec de la paille toquilla, une fibre naturelle renommée pour sa finesse, sa légèreté et sa durabilité exceptionnelle.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Content Block 2: Text Left, Image Right -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-caption">
                            <h4 class="mb-3 responsive-subtitle">Pourquoi nous choisir ?</h4>
                            <ul class="list-unstyled responsive-text mb-4 pl-2">
                                <li class="mb-2 position-relative pl-4">
                                    <span class="position-absolute text-success" style="left: 0;">•</span>
                                    Paille toquilla 100% naturelle
                                </li>
                                <li class="mb-2 position-relative pl-4">
                                    <span class="position-absolute text-success" style="left: 0;">•</span>
                                    Modèles Barillet, Standard et Haut de gamme
                                </li>
                                <li class="mb-2 position-relative pl-4">
                                    <span class="position-absolute text-success" style="left: 0;">•</span>
                                    Importation directe & livraison rapide (10-15 jours)
                                </li>
                            </ul>

                            <h4 class="mb-3 responsive-subtitle">Un savoir-faire ancestral</h4>
                            <p class="responsive-text">
                                Plongez dans l'histoire de nos artisans. Chaque chapeau demande des semaines, voire des mois de tissage minutieux en Équateur, avant d'être façonné avec passion pour sublimer votre style.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-img">
                            <img src="{{ asset('img/palma/c2.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                class="img-fluid rounded shadow-lg hover-effect" loading="lazy" decoding="async"
                                style="width: 100%; height: 600px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>

                <!-- Content Block 1: Image Left, Steps Right -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-img">
                            <img src="{{ asset('img/palma/c1.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                class="img-fluid rounded shadow-lg hover-effect" loading="lazy" decoding="async"
                                style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="about-caption">
                            <h3 class="mb-4 responsive-subtitle">Comment commander ?</h3>
                            <p class="responsive-text mb-4">
                                Rendez-vous sur notre boutique en ligne : <br>
                                <a href="https://www.palmatahat.com" class="text-dark font-weight-bold" style="font-size: 1.2em;">www.palmatahat.com</a>
                            </p>
                            
                            <div class="process-steps mt-4">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="step-number flex-shrink-0 mr-3">1</div>
                                    <div class="responsive-text m-0">Parcourez la collection et choisissez votre modèle, couleur et taille idéale.</div>
                                </div>
                                <div class="d-flex align-items-start mb-4">
                                    <div class="step-number flex-shrink-0 mr-3">2</div>
                                    <div class="responsive-text m-0">Vérifiez votre taille grâce à notre guide détaillé des mesures.</div>
                                </div>
                                <div class="d-flex align-items-start mb-4">
                                    <div class="step-number flex-shrink-0 mr-3">3</div>
                                    <div class="responsive-text m-0">Commandez en toute sécurité via nos moyens de paiement.</div>
                                </div>
                                <div class="d-flex align-items-start mb-4">
                                    <div class="step-number flex-shrink-0 mr-3">4</div>
                                    <div class="responsive-text m-0">Recevez votre véritable Panama directement chez vous.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
        /* Hover Effect for Images */
        .hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-effect:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
        }

        /* Responsive Typography */
    .responsive-title, .responsive-subtitle, .section-tittle h2, h2, h1 {
        font-size: 50px !important;
        text-align: center !important;
    }

    .responsive-subtitle, h3, h4 {
        font-size: 18pt !important;
    }

    .responsive-text, p, .pera, .list-unstyled li {
        font-size: 12pt !important;
        text-align: justify;
        line-height: 1.8;
        color: #000;
    }

    .step-number {
        background-color: #000;
        color: #fff;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .commitment-list {
        font-size: 1.6rem;
        line-height: 1.8;
    }

    /* Gallery Styles (if needed) */
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

    .gallery-row>[class*="col-"] {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .pera b {
        font-weight: 600;
    }

    /* Mobile Adaptations */
    @media (max-width: 768px) {
        .responsive-title, .responsive-subtitle, .section-tittle h2, h2, h1 {
            font-size: 30px !important;
        }
        .responsive-subtitle, h3, h4 {
            font-size: 16pt !important;
        }
        .responsive-text, p, .pera, .list-unstyled li {
            font-size: 12pt !important;
            text-align: left;
        }
    }
</style>
@endsection