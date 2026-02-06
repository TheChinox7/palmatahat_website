@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a>À propos</a></li>
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
                        <h2>Processus et élaboration des chapeaux de paille toquilla</h2>
                        <h3>Un savoir-faire déclaré patrimoine de L’Humanité</h3>
                        <p class="pera">Les chapeaux de paille toquilla sont bien plus qu’un accessoire, faite à la main,
                            qui ont porté
                            cette ancienne tradition pendant plusieurs années en faisant connaître au monde entier.
                            Ce savoir-faire a été reconnu par L’Unesco comme Patrimoine culturel immatériel de
                            l’humanité pour sa richesse culturelle et son héritage ancestral.
                            L'une des traditions ancestrales les plus représentatives de l'Équateur, un vaste programme
                            pour sa conservation future est maintenu, encourageant les jeunes à poursuivre cet héritage
                            qui sert de subsistance économique à de nombreuses familles où chacun en profite de
                            manière différente. C'est pourquoi, en tant que promoteurs du marché artisanal, nous
                            sommes fiers de montrer tout le processus que les artisans équatoriens réalisent pour
                            représenter les chapeaux Fedora classique et lo Montecristi en Suisse.</p>
                    </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-tittle mb-60 text-center pt-10">
                        <h3>Matière première : la plante de paille toquilla</h3>
                        <p class="pera">
                            La paille toquilla provient d'une plante sauvage que l'on trouve à Montecristi, Manabi, dans un
                            climat subtropical humide propice à sa culture et à la récolte. Cette plante herbacée atteint
                            1,5 à 3 mètres de haut ; on en extrait le tendre bourgeon intérieur des feuilles, idéal pour
                            l’élaboration du chapeau Panama.
                        </p>
                        <div class="content-section">
                            <div class="content-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <img src="{{ asset('img/palma/o2.jpg') }}" alt="Récolta responsable" class="img-fluid hover-effect" loading="lazy" decoding="async" style="border-radius:10px; box-shadow:0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                            <div class="content-text wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3>Récolta responsable</h3>
                                <p class="pera">
                                    Les artisans ne coupent pas la plante entière elle n'est pas déboisée, l'agriculteur extrait
                                    soigneusement les bourgeons appropriés, Sans nuire à la repousse naturelle.
                                </p>
                            </div>
                        </div>
                        <div class="content-section reverse">
                            <div class="content-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3>Sélection de la Fibre</h3>
                                <p class="pera">
                                    La tige doit être séparée afin de récupérer le cœur, le centre du bourgeon à partir duquel
                                    les meilleurs fils et le plus fin seront sélectionnés. Cette sélection garantit la qualité et la
                                    finesse du tissage.
                                </p>
                            </div>
                            <div class="content-image wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
                                <img src="{{ asset('img/palma/o1.jpg') }}" alt="Sélection de la Fibre" class="img-fluid hover-effect" loading="lazy" decoding="async" style="border-radius:10px; box-shadow:0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                        <div class="content-section">
                            <div class="content-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <video controls class="img-fluid hover-effect" style="border-radius:10px; box-shadow:0 4px 16px rgba(0,0,0,0.12);">
                                    <source src="{{ asset('img/palma/processus1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="content-text wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3>Cuisson de la paille de toquilla</h3>
                                <p class="pera">
                                    Une fois sélectionner les brins, dans un four à bois, vous nouez la paille de toquilla et
                                    vous la plongez dans de l'eau bouillante pendant 30 secondes, cela permet d’établisse la couleur
                                    beige de la fibre.
                                </p>
                            </div>
                        </div>
                        <div class="content-section reverse">
                            <div class="content-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3>Séchage au Soleil</h3>
                                <p class="pera">
                                    Les fibres doivent sécher naturellement, au soleil, ce qui permet d’évacuer l’humidité,
                                    d’assouplir la matière, et de la rendre prête pour le tissage.
                                    Une fois que la fibre est sèche, elle est mise dans un four à bois, où elle est fumée au
                                    soufre pendant 12 heures pour blanchir un peu plus la paille de toquilla.
                                </p>
                            </div>
                            <div class="content-image wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
                                <img src="{{ asset('img/palma/o4.jpg') }}" alt="Séchage au Soleil" class="img-fluid hover-effect" loading="lazy" decoding="async" style="border-radius:10px; box-shadow:0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                        <div class="content-section">
                            <div class="content-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <img src="{{ asset('img/palma/o5.jpg') }}" alt="Début de tissage" class="img-fluid hover-effect" loading="lazy" decoding="async" style="border-radius:10px; box-shadow:0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                            <div class="content-text wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3>Le début de tissage la basse de chapeau </h3>
                                <p class="pera">
                                    Tout commence par la création d'un gabarit à l'aide des 8 paires des brins des pailles
                                    La partie supérieure du chapeau connu par les artisans sous le nom de cangrejito
                                    armado marque le point de départ du tressage.
                                    Une fois cette base formée et les placer sur un petit support en bois le tissage du corps
                                    de chapeau peut commencer.
                                    Étape définition d'un chapeau Panama
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3>Fermeture de bord </h3>
                            <p class="pera">
                                Le bord du chapeau et soigneusement terminé, les parties avant et arrière sont
                                ajustées pour donner une symétrie parfaite à l 'Ala, le bord donnent chaque style.

                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Découper de bord et des fils</h3>
                            <p class="pera">
                                Les extrémités sont coupées à environ 10 cm de bord, ce qui affine la forme de
                                chapeau et élimine les irrégularités.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Lavage délicat</h3>
                            <p class="pera">
                                Chaque chapeau il avait à la main avec d'autres tiède et de savon neutre, afin d'enlever
                                le récit du accumuler devant le tissage.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Blanchissement au soufre
                            </h3>
                            <p class="pera">
                                Le chapeau est placé dans un four à bois avec du souffle pendant 12 heures.
                                C'est procédé permet stabiliser sa couleur beige naturel avant la finition.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Séchage complet</h3>
                            <p class="pera">
                                Les chapeaux sont ensuite séchés à l'air libre, dans un espace sec et ventilé pour
                                garantir leur durabilité.
                                Traitements finals pour sa texture et forme
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Battue en brèche</h3>
                            <p class="pera">
                                Pour rendre la texture plus souple plus sur chapeau au moins 5 sont battus
                                délicatement avec un pot en bois contenant un peu de soufre, dans chacun des
                                chapeaux
                                C'est geste doit être fait avec précaution pour ne pas abîmer les fibres.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Repassage
                            </h3>
                            <p class="pera">
                                Enfin le chapeau est posé sur un support en bois des balsas puis une bande de cuir et
                                serrer autour de la couronne.
                                Cela permet de repasser et structurer la partie appeler Campana donnons au chapeau
                                sa forme définitive.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Ruban</h3>
                            <p class="pera">
                                La touche finale et distinctive, la pose du ruban ; également appelé bande ou ceinture
                                et le dernier détail qui rehausse l'élégance et l'unicité de chaque chapeau
                                Nous proposons différents types de ruban en tissu, cuire, crin de cheval et même des
                                chaînes en argent qui complète parfaitement l'artisanat du chapeau

                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Slogan</h3>
                            <p class="pera">
                                A chaque chapeau Panama qui nous proposons incarne la tradition la précision et la
                                passion, acheter un chapeau Panama c'est acquérir une pièce unique symbole de
                                culture d'élégance et d'engagement pour l'artisanat équatorien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    .section-tittle h2, h1, h2 {
        font-size: 50px !important;
        text-align: center !important;
    }

    .section-tittle h3, h3, h4 {
        font-size: 18pt !important;
    }

    .pera, p, .responsive-text {
        font-size: 12pt !important;
        text-align: justify;
        line-height: 1.8;
    }

    /* Mobile Adaptations */
    @media (max-width: 768px) {
        .section-tittle h2, h1, h2 {
            font-size: 30px !important;
        }
        
        .section-tittle h3, h3, h4 {
            font-size: 16pt !important;
        }

        .pera, p, .responsive-text {
            font-size: 12pt !important;
            text-align: left;
        }
        .section-tittle {
            margin-bottom: 30px !important;
        }
    }
    </style>
@endsection        .pera {
            font-size: 12pt;
            text-align: justify;
            line-height: 1.8;
            color: black;
        }
        h2, h3, .section-tittle h2, .section-tittle h3 {
            font-size: 50px !important;
        }
        @media (max-width: 768px) {
            h2, h3, .section-tittle h2, .section-tittle h3 {
                font-size: 30px !important;
            }
        }
    </style>
@endsection
