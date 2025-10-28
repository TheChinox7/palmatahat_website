@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a>Mon histoire</a></li>
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
                        <h2 style="font-size:3.2rem; text-align: center;">Mon histoire</h2>
                        <h3>Entre les mains et les fibres</h3>
                        <p><strong>L'histoire derrière Palmatahat</strong></p>
                        <p class="pera" style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.6;">Mon
                            voyage ou cœur du chapeau Panama
                            Tout a commencé par un voyage en Équateur une visite à mes origines, un pays rempli de
                            traditions vivantes, de main experte et d'un art transmis de génération en génération.
                        </p>
                        <div class="row align-items-center mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('img/palma/popular-imtes1.jpg') }}" alt="Chapeau Montecristi"
                                    class="img-fluid"
                                    style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                            <div class="col-md-6">
                                <p style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.6;">
                                    En parcourant différentes régions de pays j'ai eu l'opportunité de découvrir des
                                    communautés ou
                                    le temps semblait s'arrêter et où chaque fibre tissée raconte une histoire. J'ai
                                    visité
                                    des
                                    ateliers modestes, partagé des moments inoubliables dans les champs où naît la
                                    paille
                                    toquilla
                                    ,et rencontrer des artisans qui consacrent leur vie à créer des pièces uniques.
                                    Apprécier des prêts leur travail patient précis et fondée sur des techniques
                                    ancestrales
                                    m'a
                                    profondément marquée il ne s'agissait pas simplement d'un accessoire c'est de la
                                    culture
                                    de
                                    l'identité et de l'art.
                                    Cette expérience m'a inspiré à porter cet héritage au _delà des frontières. Ainsi
                                    est
                                    née
                                    palmatahat.</p>
                            </div>
                            
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-left pt-10">
                            <div class="mt-5">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <p class="pera"
                                            style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.6;">
                                            Une boutique qui ne propose pas seulement des chapeaux mais qui célèbre la
                                            valeur de
                                            travail artisanal équatorien.
                                            Chaque chapeau que nous proposons a été soigneusement sélectionné certifier et
                                            représente un lien direct avec ceux qui l'ont fabriqué.
                                            Chez Palmatahat, nous travaillons directement avec des communautés artisanes
                                            pour
                                            vous offrir des chapeaux authentiques certifiés et unique.
                                            Porter un chapeau Panama n'est pas seulement un choix de style, c'est une
                                            manière
                                            d'honorer une histoire bien réelle.
                                            Chaque modèle reflète des siècles des traditions et des techniques reconnues
                                            comme
                                            patrimoine culturel immatériel de la romanité par l'Unesco.
                                            Pourquoi choisir un chapeau Panama
                                            Notre histoire ne se fabrique pas, Elle se tisse. Nous ne vendons pas un produit
                                            nous partageons un héritage.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <img src="{{ asset('img/palma/popular-imtes2.jpg') }}" alt="Chapeau Montecristi"
                                                class="img-fluid"
                                                style="width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3>Notre engagement</h3>
                                <p class="pera"
                                    style="font-size: 1.6rem; color: black; text-align: justify; line-height: 1.6;">
                                    Offrir des produits authentiques et certifiés
                                    Promouvoir le respect et la valorisation de travail artistisanal
                                    Soutenir directement la communauté qui font vivre cette tradition
                                </p>
                            </div>
                        </div>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <img src="{{ asset('img/palma/h1.jpg') }}" alt="Chapeau Panama" class="img-fluid"
                                        style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <img src="{{ asset('img/palma/h2.jpg') }}" alt="Artisan Panama" class="img-fluid"
                                        style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <img src="{{ asset('img/palma/h3.jpg') }}" alt="Tradition Panama" class="img-fluid"
                                        style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection