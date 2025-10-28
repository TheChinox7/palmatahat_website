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
                            <li class="breadcrumb-item"><a href="" style="color: black;">Comment commander</a></li>
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
                    <div class="section-tittle mb-60 pt-10">
                        <p style="font-size: 1.6rem; text-align: justify; color: black;"><strong>Comment commander
                                ?</strong>
                            <br><br>
                            Découvrez le chapeau Panama authentique en Suisse. Je suis ambassadrice de l'artisanat
                            équatorien en Suisse et fièrement originaire d'Équateur. À travers cette boutique je
                            vous propose une sélection exclusive des chapeaux Panama 100% fait main par nos maîtres
                            artisans.
                            <br><br>
                            Pourquoi choisir nos chapeaux ?
                            <br>
                            • Fabriqués en paille toquilla naturel reconnu mondialement<br>
                            • Modèle barillet et standard et haut de gamme<br>
                            • Importateur direct, livraison rapide en Suisse 10 à 15 jours
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/palma/c1.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                    class="img-fluid"
                                    style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-tittle mb-60 pt-10">
                                <div style="font-size: 1.6rem; color: black; line-height: 1.8;">
                                    <h3 style="font-size: 1.6rem; color: black; font-weight: bold; margin-bottom: 20px;">
                                        Comment commander ?</h3>
                                    <p style="margin-bottom: 15px;">🌐 Visitez <strong
                                            style="color: black;">www.palmatahat.com</strong></p>
                                    <div style="margin-left: 20px;">
                                        <p style="margin-bottom: 10px; color: black;"><strong>1</strong> <span
                                                style="background-color: #f0f0f0; padding: 2px 8px; border-radius: 4px;">Parcourez</span>
                                            la boutique et choisissez votre style, couleur et taille</p>
                                        <p style="margin-bottom: 10px; color: black;"><strong>2</strong> <span
                                                style="background-color: #f0f0f0; padding: 2px 8px; border-radius: 4px;">Consultez</span>
                                            notre guide de tailles et des qualités</p>
                                        <p style="margin-bottom: 10px; color: black;"><strong>3</strong> <span
                                                style="background-color: #f0f0f0; padding: 2px 8px; border-radius: 4px;">Ajouter</span>
                                            au panier et payer en toute sécurité</p>
                                        <p style="margin-bottom: 10px; color: black;"><strong>4</strong> <span
                                                style="background-color: #f0f0f0; padding: 2px 8px; border-radius: 4px;">Recevez</span>
                                            votre chapeau directement chez vous</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-tittle mb-60 pt-10">
                                <p style="font-size: 1.6rem; text-align: justify; color: black;">
                                    Découvrez l'élégance de chapeau Panama authentique en Suisse
                                    <br><br>
                                    Je suis ambassadrice de l'artisanat équatorien en Suisse et fièrement originaire
                                    d'Équateur. À travers cette boutique je vous propose une sélection exclusive des
                                    chapeaux Panama 100% fait main par nos maîtres artisans.
                                    <br><br>
                                    <strong>Pourquoi choisir nos chapeaux:</strong>
                                    <br><br>
                                    • Fabriquer en paille toquilla naturel reconnu mondialement<br>
                                    • Modèle barillet et standard et haut de gamme<br>
                                    • Importateur direct, livraison rapide en Suisse (10-15 jours)
                                    <br><br>
                                    <strong>Comment commander ?</strong>
                                    <br><br>
                                    • Visitez <strong>WWW.palmatahat.com</strong><br>
                                    • Parcourez la boutique et choisissez votre style, couleur et taille
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/palma/c2.jpg') }}" alt="Processus de fabrication du chapeau Panama"
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
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/palma/c3.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                    class="img-fluid"
                                    style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-tittle mb-60 pt-10">
                                <p style="font-size: 1.6rem; text-align: justify; color: black;">
                                    Consulter notre guide de tailles et qualité
                                    Ajouter au panier et payer en toute sécurité
                                    Rester avec votre chapeau directement chez vous
                                    <br><br>
                                    "Panama Montecristi L'élégance artisanale d'Équateur, livrée en Suisse."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection