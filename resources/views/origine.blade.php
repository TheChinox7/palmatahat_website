@extends('layouts.app')

@section('content')
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="font-size: 1.6rem; color: black;">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}" style="color: black;">Accueil</a>
                        </li>
                        <li class="breadcrumb-item"><a style="color: black;">Le véritable chapeau Panama</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-tittle text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h1 style="font-size: 3rem; font-weight: 700; color: black;">Le véritable chapeau Panama</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mt-3 order-2 order-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="section-tittle mb-30 pt-10">
                            <p class="pera responsive-text" style="color: black;">Le véritable chapeau Panama est fabriqué en paille <b>Carludovica Palmata</b>, une fibre
                                naturelle provenant d'Équateur. Bien que son nom prête à confusion, son origine est bel et
                                bien équatorienne et non panaméenne. Localement, on l'appelle <i>sombrero de paja toquilla</i>,
                                un chapeau qui, à l'origine, était porté par les hommes les plus humbles.
                            </p>
                            <p class="pera responsive-text" style="color: black;">
                                L'art du tissage remonte à 1630, dans la région de Jipijapa, où les peuples indigènes
                                confectionnaient ces chapeaux entièrement à la main. Dès le XVIIe siècle, les conquérants espagnols ont
                                commencé à les exporter vers l'Europe. Ce savoir-faire ancestral, transmis de génération en génération, a été reconnu par l'UNESCO comme <b>Patrimoine culturel
                                    immatériel de l'humanité</b>.
                            </p>
                            <p class="pera responsive-text" style="color: black;">
                                Aujourd'hui, nous sommes fiers de perpétuer cette tradition en Suisse en présentant les modèles classiques Fedora
                                et <b>Montecristi</b>, réalisés par les talentueux artisans équatoriens.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="text-center mb-5">
                            <img src="{{ asset('img/palma/h2.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                class="img-fluid"
                                style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <!-- UNESCO Reference Block -->
                        <div class="text-center mb-5 p-4" style="background: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.08);">
                            <h4 class="mb-3" style="font-size: 1.8rem; font-weight: 600;">Reconnaissance UNESCO</h4>
                            <p style="font-size: 1.4rem;">Une histoire de Toquilla - Patrimoine Immatériel</p>
                            <a href="https://www.unesco.org/archives/multimedia/document-3786" target="_blank" class="btn btn-outline-dark mt-2">
                                <i class="fas fa-play-circle mr-2"></i> Voir le documentaire
                            </a>
                        </div>

                        <div class="text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <img src="{{ asset('img/palma/or3.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                class="img-fluid"
                                style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="section-tittle mb-60 pt-10">
                            <p class="pera responsive-text" style="color: black;">
                                La renommée internationale du chapeau s’est réellement affirmée au XIXe siècle, lors de la construction du canal de Panama. Grâce à ses qualités idéales pour les climats tropicaux, des millions de chapeaux furent exportés d’Équateur pour protéger les ouvriers du soleil.
                            </p>
                            <p class="pera responsive-text" style="color: black;">
                                Le moment décisif survient lors de l’inauguration du canal, lorsque le président américain <b>Theodore Roosevelt</b> visite le chantier en portant un chapeau de paille blanc à ruban noir. La presse internationale couvre largement l’événement : des journaux comme <i>The New York Times</i> ou <i>The Washington Herald</i> publient des photos du président coiffé de ce chapeau, provoquant une confusion durable sur son origine.
                            </p>
                            <p class="pera responsive-text" style="color: black;">
                                C’est ainsi que le « chapeau Panama » devient mondialement célèbre… alors qu’il est né en Équateur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Responsive Typography */
    .responsive-text {
        font-size: 1.6rem;
        text-align: justify;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .responsive-title {
            font-size: 2.2rem;
        }

        .responsive-subtitle {
            font-size: 1.8rem;
        }

        .responsive-text {
            font-size: 1.1rem;
            text-align: left;
            /* Left align for mobile readability */
            line-height: 1.6;
        }

        .section-tittle {
            margin-bottom: 30px !important;
        }

        /* Ensure images don't overflow or take too much space on mobile if needed */
        .img-fluid {
            width: 100% !important;
        }

        /* Ensure images don't overflow or take too much space on mobile if needed */
        .img-fluid {
            width: 100% !important;
        }
    }
</style>
@endsection