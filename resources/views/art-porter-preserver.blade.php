@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Art de Porter et Préserver</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about-area py-5">
        <div class="container">
            <!-- Título principal -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-5">
                        <h1>L'Art de Porter et Préserver votre Panama</h1>
                        <p class="pera">La paille toquilla est une matière organique qui à besoin d’un certain degré d'humidité pour préserver et maintenir sa flexibilité il n'est donc pas recommandé de laisser le chapeau exposé au soleil.
</p>
                    </div>
                </div>
            </div>
            
            <!-- Primera sección: imagen izquierda, texto derecha -->
            <div class="content-section reverse">
                
                <div class="content-text">
                    <div style="font-size: 1.6rem; color: black; line-height: 1.8;">
                        <ul style="list-style: none; padding-left: 0;">
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Si le chapeau est sec et cassant car il se trouve dans un environnement très sec, nous recommandons de l'humidifier quelques fois.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                S'il est mouillé, séchez-le naturellement, n'utilisez pas de méthodes de séchage rapides.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Le chapeau Panama est un chapeau d'été, ne l'utilisez pas sous la pluie car il perdra sa forme.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                En cas de déformation des bords, repassez à basse température avec un torchon pour le protéger.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Manipulez toujours votre chapeau avec soin en le tenant pour le bord et non pas pour la couronne pour éviter de casser ou déformer Le chapeau doit être pris par le bord.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-image">
                    <img src="{{ asset('img/palma/art1.jpg') }}" alt="Art de Porter" class="animate-image" style="width: 70%; height: auto;">
                </div>
            </div>

            <div class="content-section reverse">
                <div class="content-image">
                    <img src="{{ asset('img/palma/art2.png') }}" alt="Art de Porter" class="animate-image" style="width: 70%; height: auto;">
                </div>
                <div class="content-text">
                    <div style="font-size: 1.6rem; color: black; line-height: 1.8;">
                        <ul style="list-style: none; padding-left: 0;">
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Il n'est pas recommandé de plier le chapeau, car il perdra sa forme d'origine.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Contrairement à ce que l'on croit, la plupart des chapeaux Panama ne peuvent pas être roulés. Seuls quelques-uns de très haute qualité et texture fine peuvent.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Un véritable chapeau panama avec les bons soins il peut vous accompagner pendant de nombreuses années.
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 20px; position: relative;">
                                <span style="position: absolute; left: 0; color: #8B4513; font-weight: bold;">•</span>
                                Rangez-le correctement sur un support adapté au à plat, jamais sur un crochet, pour les voyages il existe des nombres accessoires pour faciliter le transport je l'ai aussi sur mon site un à vous proposer.
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('img/palma/art3.jpg') }}" alt="Chapeau Panama" class="img-fluid"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('img/palma/art4.jpg') }}" alt="Artisan Panama" class="img-fluid"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset('img/palma/art5.jpg') }}" alt="Tradition Panama" class="img-fluid"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                        </div>
                    </div>
            

        </div>
    </div>
@endsection