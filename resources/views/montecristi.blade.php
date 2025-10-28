@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}" style="color: #000;">Accueil</a>
                            </li>
                            <li class="breadcrumb-item"><a style="color: #000;">Chapeaux Montecristi</a></li>
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
                    <div class="section-tittle mb-60 text-center pt-10">
                        <h2 style="font-size:3.2rem; color: #000;">Chapeaux Montecristi</h2>
                    </div>

                    <!-- Primera sección: Imagen y texto lado a lado -->
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6">
                            <img src="{{ asset('img/palma/m1.jpg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                 style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                        <div class="col-lg-6">
                            <p class="pera" style="font-size: 1.6rem; text-align: justify; color: #000;">J'ai eu l'occasion
                                de visiter cette région et de constater sur place le savoir-faire, l'engagement et le niveau
                                de maîtrise qu'exige la fabrication de chaque pièce. Le climat de Montecristi, sa terre
                                fertile et la passion de son peuple créent les conditions idéales pour un artisanat
                                d'exception.</p>
                            <p class="pera" style="font-size: 1.6rem; text-align: justify; color: #000;">Chez Palmatahat,
                                nous souhaitons partager l'excellence de Montecristi avec le monde et porter son prestige
                                vers des nouveaux horizons. Chaque chapeau demande des semaines, voire des mois de travail
                                selon son degré de finesse. Les modèles les plus simples nécessitent entre 2 et 3 semaines,
                                les plus raffinés dont le tressage est si fin qu'il ressemble à du tissu peuvent demander de
                                3 à 6 mois voire davantage.</p>
                        </div>
                    </div>

                    <!-- Segunda sección: Texto y imagen lado a lado -->
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6">
                            <p class="pera" style="font-size: 1.6rem; text-align: justify; line-height: 1.6; color: #000;">
                                Les chapeaux Montecristi sont reconnus internationalement pour leur finesse, leur légèreté
                                et leur élégance naturelle. Chaque pièce est le fruit de centaines d'heures de travail
                                patient et méticuleux, entièrement réalisé à la main par des artisans experts.</p>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-left">
                                        <li class="mb-2" style="color: #000;">✓ Symbole de culture et de traditions</li>
                                        <li class="mb-2" style="color: #000;">✓ Fabriqué à la main avec patience et soin
                                        </li>
                                        <li class="mb-2" style="color: #000;">✓ Chaque chapeau est unique, tissé par des
                                            mains expertes</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-left">
                                        <li class="mb-2" style="color: #000;">✓ Vous soutenez la communauté d'artisans</li>
                                        <li class="mb-2" style="color: #000;">✓ Vous contribuez à préserver un patrimoine
                                            vivant</li>
                                        <li class="mb-2" style="color: #000;">✓ Qualité et élégance intemporelles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('img/palma/m2.jpg') }}" alt="Artisan travaillant" class="img-fluid"
                                 style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>

                    <!-- Tercera sección: Razones para elegir -->
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-tittle mb-60 text-center pt-10">
                                <p class="pera mt-4" style="color: #000;"><em>"L'Équateur le tisse aujourd'hui, le monde le
                                        célèbre comme sien"</em></p>
                            </div>
                        </div>
                    </div>
                    <!-- Fourth section: Two equal-sized images -->
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-6">
                            <img src="{{ asset('img/palma/m3.jpg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('img/palma/m4.jpg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection