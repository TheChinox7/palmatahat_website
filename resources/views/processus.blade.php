@extends('layouts.app')

@section('content')
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="font-size: 12pt; color: black;">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}" style="color: black;">Accueil</a></li>
                        <li class="breadcrumb-item"><a style="color: black;">Processus</a></li>
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
                <!-- Title -->
                <div class="text-center mb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="mb-3 responsive-title">Processus et élaboration des chapeaux de paille "toquilla"</h2>
                </div>

                <!-- Intro Section -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="section-tittle mb-30 pt-10">
                            <p class="pera responsive-text" style="color: black;">Les chapeaux de paille toquilla sont bien plus
                                qu'un accessoire, faite à la main, qui ont porté cette ancienne tradition pendant
                                plusieurs années en faisant connaître au monde entier.
                                <br>
                                Ce savoir-faire a été reconnu par L'Unesco comme Patrimoine culturel immatériel de
                                l'humanité pour sa richesse culturelle et son héritage ancestral.
                                <br>
                                L'une des traditions ancestrales les plus représentatives de l'Équateur, un vaste
                                programme pour sa conservation future est maintenu, encourageant les jeunes à poursuivre
                                cet héritage qui sert de subsistance économique à de nombreuses familles où chacun en
                                profite de manière différente. C'est pourquoi, en tant que promoteurs du marché
                                artisanal, nous sommes fiers de montrer tout le processus que les artisans équatoriens
                                réalisent pour représenter les chapeaux Fedora classique et lo Montecristi en Suisse.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="text-center">
                            <img src="{{ asset('img/palma/popular-imtes1.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                class="img-fluid hover-effect" loading="lazy" decoding="async"
                                style="max-width: 100%; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>

                <!-- Raw Material Intro + Video -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="text-center">
                            <img src="{{ asset('img/palma/pajaproce2.png') }}" alt="Matière première paille toquilla"
                                class="img-fluid hover-effect" loading="lazy" decoding="async"
                                style="max-width: 100%; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="section-tittle mb-30 pt-10">
                            <h3 class="mb-3" style="font-weight: 600;">Matière première : la plante de paille toquilla</h3>
                            <p class="pera responsive-text" style="color: black;">
                                C'est une plante sauvage que l'on trouve à Montecristi Manabi, une ville au climat
                                subtropical humide qui permet de la cultiver et la recollecte de cette fibre.
                                C'est une plante herbacée qui pousse de 1,5 à 3 mètres de haut, dont on extrait le tendre
                                bourgeon ou partie intérieure des feuilles, idéal pour l'élaboration du chapeau de
                                Panama.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Full Width Text: Informations Importantes -->
                <div class="row justify-content-center mb-5">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="section-tittle mb-30">
                            <h3 class="mb-4 text-center" style="font-weight: 600;">Informations importantes</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="pera responsive-text" style="color: black;">
                                        Récolte responsable: Les artisans ne coupent pas la plante entière elle
                                        n'est pas déboisée, l'agriculteur extrait soigneusement les bourgeons appropriés, Sans
                                        nuire à la repousse naturelle.
                                    </p>
                                    <p class="pera responsive-text" style="color: black;">
                                        Sélection de la Fibre: La tige doit être séparée afin de récupérer le cœur, le
                                        centre du bourgeon à partir duquel les meilleurs fils et le plus fin seront
                                        sélectionnés. Cette sélection garantit la qualité et la finesse du tissage.
                                    </p>
                                    <p class="pera responsive-text" style="color: black;">
                                        Cuisson de la paille de toquilla: Une fois sélectionner les brins, dans un four à
                                        bois, vous nouez la paille de toquilla et vous la plongez dans de l'eau bouillante
                                        pendant 30 secondes, cela permet d'établisse la couleur beige de la fibre.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="pera responsive-text" style="color: black;">
                                        Séchage au Soleil: Les fibres doivent sécher naturellement, au soleil, ce qui
                                        permet d'évacuer l'humidité, d'assouplir la matière, et de la rendre prête pour le
                                        tissage. Une fois que la fibre est sèche, elle est mise dans un four à bois, où elle est
                                        fumée au soufre pendant 12 heures pour blanchir un peu plus la paille de toquilla.
                                    </p>
                                    <p class="pera responsive-text" style="color: black;">
                                        Le début de tissage la basse de chapeau: Tout commence par la création d'un
                                        gabarit à l'aide des 8 paires des brins des pailles. La partie supérieure du chapeau
                                        connu par les artisans sous le nom de cangrejito armado marque le point de départ du
                                        tressage. Une fois cette base formée et les placer sur un petit support en bois le
                                        tissage du corps de chapeau peut commencer.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Full Width Image: o2.jpg -->
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <img src="{{ asset('img/palma/o2.jpg') }}"
                            alt="Processus de fabrication du chapeau Panama" class="img-fluid hover-effect" loading="lazy" decoding="async"
                            style="width: 100%; max-height: 500px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                    </div>
                </div>

                <!-- Finishing Steps (Side by Side) -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="section-tittle mb-30 pt-10">
                            <p class="pera responsive-text" style="color: black;">
                                Fermeture de bord: Le bord du chapeau est soigneusement terminé, les
                                parties avant et arrière sont ajustées pour donner une symétrie parfaite à l'Ala, le
                                bord donnant chaque style.
                                <br><br>
                                Découper de bord et des fils: Les extrémités sont coupées à environ 10
                                cm de bord, ce qui affine la forme de chapeau et élimine les irrégularités.
                                <br><br>
                                Lavage délicat: Chaque chapeau est lavé à la main avec de l'eau tiède
                                et du savon neutre, afin d'enlever les résidus accumulés pendant le tissage.
                                <br><br>
                                Blanchissement au soufre: Le chapeau est placé dans un four à bois avec
                                du soufre pendant 12 heures. Ce procédé permet de stabiliser sa couleur beige naturelle
                                avant la finition.
                                <br><br>
                                Séchage complet: Les chapeaux sont ensuite séchés à l'air libre, dans
                                un espace sec et ventilé pour garantir leur durabilité.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="text-center">
                            <img src="{{ asset('img/palma/o4.jpg') }}"
                                alt="Processus de fabrication du chapeau Panama" class="img-fluid hover-effect" loading="lazy" decoding="async"
                                style="max-width: 100%; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>

                <!-- Full Width Text: Traitements Finals -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 mb-4 mb-md-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="text-center">
                            <img src="{{ asset('img/palma/planchado.jpg') }}" alt="Traitements finals"
                                class="img-fluid hover-effect" loading="lazy" decoding="async"
                                style="max-width: 100%; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="section-tittle mb-30 pt-10">
                            <h3 class="mb-4" style="font-size: 2.4rem; font-weight: 600;">Traitements finals pour sa texture et forme</h3>
                            <p class="pera responsive-text" style="color: black;">
                                Battue en brèche: Pour rendre la texture plus souple, chaque chapeau est battu
                                délicatement au moins 5 fois avec un pot en bois contenant un peu de soufre. Ce geste
                                doit être fait avec précaution pour ne pas abîmer les fibres.
                            </p>
                            <p class="pera responsive-text" style="color: black;">
                                Repassage: Enfin, le chapeau est posé sur un support en bois de balsa puis une
                                bande de cuir est serrée autour de la couronne. Cela permet de repasser et structurer la
                                partie appelée Campana, donnant au chapeau sa forme définitive.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ruban & Slogan (Side by Side) -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="section-tittle mb-30 pt-10">
                            <p class="pera responsive-text" style="color: black;">
                                Ruban
                                <br><br>
                                La touche finale et distinctive, la pose du ruban ; également appelé bande ou ceinture
                                et le dernier détail qui rehausse l'élégance et l'unicité de chaque chapeau.
                                <br><br>
                                Nous proposons différents types de ruban en tissu, cuire, crin de cheval et même des
                                chaînes en argent qui complète parfaitement l'artisanat du chapeau.
                                <br><br>
                                Slogan
                                <br><br>
                                A chaque chapeau Panama qui nous proposons incarne la tradition la précision et la
                                passion, acheter un chapeau Panama c'est acquérir une pièce unique symbole de culture
                                d'élégance et d'engagement pour l'artisanat équatorien.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="text-center">
                            <img src="{{ asset('img/palma/o5.jpg') }}"
                                alt="Processus de fabrication du chapeau Panama" class="img-fluid hover-effect" loading="lazy" decoding="async"
                                style="max-width: 100%; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Main Container -->

    <!-- Final Video (Full Screen Width) -->
    <div class="container-fluid p-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" style="margin-bottom: -10px;">
        <video autoplay muted loop playsinline
            style="width: 100%; height: 85vh; object-fit: cover; display: block;">
            <source src="{{ asset('img/palma/back_slider.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
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
        .responsive-title, .section-tittle h2, h1, h2 {
        font-size: 40px !important;
        text-align: center !important;
        font-weight: 700;
        color: black;
    }
    h3, h4 {
        font-size: 18pt !important;
    }
    
    .responsive-text, p, .pera {
        font-size: 12pt !important;
        text-align: justify;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .breadcrumb {
            font-size: 12pt !important;
        }

        .responsive-title, .section-tittle h2, h1, h2 {
            font-size: 28px !important;
        }
        h3, h4 {
            font-size: 16pt !important;
        }

        .responsive-text, p, .pera {
            font-size: 12pt !important;
            text-align: left;
            line-height: 1.6;
        }

        .section-tittle {
            margin-bottom: 30px !important;
            padding-top: 0 !important;
        }

        /* Adjust spacing for stacked elements on mobile */
        .mb-5 {
            margin-bottom: 2rem !important;
        }

        /* Reduce vertical padding on mobile */
        .pt-10 {
            padding-top: 0 !important;
        }

        .mb-60 {
            margin-bottom: 30px !important;
        }
    }
</style>
@endsection