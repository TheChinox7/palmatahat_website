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
                    <div class="section-tittle mb-60 text-center pt-10">
                        <h2 style="font-size:3.2rem; color: #000;">Bandes pour chapeaux</h2>
                        <p class="pera" style="font-size:1.6rem; text-align: justify; color: #000;">Nos bandes pour chapeau sont bien
                            plus qu'un simple accessoire : elle représente une parfaite fusion entre style contemporain et
                            richesse culturelle. Conçues pour ceux qui recherchent la modernité avec une touche authentique.
                        </p>
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <div class="mx-2" style="width: 50%;">
                            <img src="{{ asset('img/palma/cats/cat4.svg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                        <div class="mx-2" style="width: 50%;">
                            <img src="{{ asset('img/palma/bandes.png') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-left pt-10">
                        <p class="pera" style="font-size: 1.6rem; color: #000;">
                            Bandes ethniques réalisée par des artisans équatoriens
                            Nous célébrons l'héritage culturel de L'Equateur avec des bandes tissées à la main par des
                            artisans locaux. Utilisant des techniques ancestrales et de motif authentiques.
                            <br>
                            Chaque pièce reflète l'identité et la créativité des communautés indigènes apportant des
                            couleurs et des motifs uniques qui enrichissent votre chapeau
                            <br>
                            Nous proposons un choix des bandes en tissu.
                        </p>
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <div class="mx-2" style="width: 50%;">
                            <img src="{{ asset('img/palma/m2.jpg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                        <div class="mx-2" style="width: 50%;">
                            <img src="{{ asset('img/palma/b4.jpg') }}" alt="Chapeau Montecristi" class="img-fluid"
                                style="width: 100%; height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection