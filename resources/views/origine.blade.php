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
                            <li class="breadcrumb-item"><a style="color: black;">Origine du Chapeau Panama</a></li>
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
                    <div class="row align-items-center">
                        <div class="col-lg-6 mt-3">
                            <div class="section-tittle mb-60 pt-10">
                                <p class="pera" style="font-size: 1.6rem; text-align: justify; color: black;">Le véritable
                                    chapeau Panama est fabriqué en paille Carludovica Palmata, une fibre naturelle provenant
                                    d'Équateur. Bien que son nom prête à confusion, son origine est équatorienne et non
                                    panaméenne. Ce chapeau, appelé localement sombrero de paja toquilla, était à l'origine
                                    porté par des hommes humbles.
                                    <br><br>
                                    La fabrication remonte à 1630, dans la région de Jipijapa, où les peuples indigènes
                                    tissaient ces chapeaux à la main. Dès le 17e siècle, les conquérants espagnols ont
                                    commencé à l'exporter vers l'Europe.
                                    <br><br>
                                    Ce savoir-faire ancestral a été reconnu par l'UNESCO comme Patrimoine culturel
                                    immatériel de l'humanité. Aujourd'hui, nous sommes fiers, en tant que promoteurs du
                                    marché artisanal, de perpétuer cette tradition en présentant les chapeaux Fedora
                                    classiques et Montecristi en Suisse, fabriqués par les talentueux artisans équatoriens.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/palma/o2.jpg') }}" alt="Processus de fabrication du chapeau Panama"
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
                                <img src="{{ asset('img/palma/or2.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                    class="img-fluid"
                                    style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/palma/or3.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                    class="img-fluid"
                                    style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="section-tittle mb-60 pt-10">
                                <p class="pera" style="font-size: 1.6rem; text-align: justify; color: black;">Diffusion
                                    internationale, le chapeau gagne en notoriété au 19e siècle, pendant la
                                    construction de canal de Panama, grâce à ses qualités idéales pour les
                                    climats tropicaux. Des millions des chapeaux furent alors exporté
                                    d'équateur pour protéger les ouvriers du soleil.
                                    <br><br>
                                    Le moment clé dès son internationalisation se produit lors de
                                    l'inauguration de canal, quand le président américain Theodore Roosevelt
                                    visite à le chantier en portant un chapeau de paille blanc à ruban noir.
                                    <br><br>
                                    La presse internationale couvre l'évènements : des journaux comme le new
                                    York times ou le Washington Gerald publient des photos de président avec
                                    ce chapeau ce qui provoque une confusion ion sur son origine.
                                    C'était ainsi que le chapeau "Panama" devient mondialement célèbre ...
                                    Alors qu'il est né en Équateur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection