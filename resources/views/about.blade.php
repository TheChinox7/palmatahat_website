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
                        <h2 style="font-size:3.2rem;">Processus et élaboration des chapeaux de paille toquilla</h2>
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
                        <div class="mt-5">
                            <h3>Récolta responsable</h3>
                            <p class="pera">
                                Les artisans ne coupent pas la plante entière elle n'est pas déboisée, l'agriculteur extrait
                                soigneusement les bourgeons appropriés, Sans nuire à la repousse naturelle.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Sélection de la Fibre</h3>
                            <p class="pera">
                                La tige doit être séparée afin de récupérer le cœur, le centre du bourgeon à partir duquel
                                les
                                meilleurs fils et le plus fin seront sélectionnés. Cette sélection garantit la qualité et la
                                finesse
                                du tissage.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Cuisson de la paille de toquilla</h3>
                            <p class="pera">
                                Une fois sélectionner les brins, dans un four à bois, vous nouez la paille de toquilla et
                                vous
                                la plongez dans de l'eau bouillante pendant 30 secondes, cela permet d’établisse la couleur
                                beige de la fibre.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h3>Séchage au Soleil</h3>
                            <p class="pera">
                                Les fibres doivent sécher naturellement, au soleil, ce qui permet d’évacuer l’humidité,
                                d’assouplir la matière, et de la rendre prête pour le tissage.
                                Une fois que la fibre est sèche, elle est mise dans un four à bois, où elle est fumée au
                                soufre
                                pendant 12 heures pour blanchir un peu plus la paille de toquilla.
                            </p>
                        </div>
                        <div class="mt-5">
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
                                culture d'élégance et d'engagement pour <strong>l'artisanat équatorien</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-center pt-10">
                        <h2>Questions Fréquentes</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="card">
                            <div class="card-header" id="faq1">
                                <h5 class="mb-0">
                                    <a href="#collapse1" class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" tabindex="0">
                                        Comment connaître ma taille de chapeau ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Comme pour tout vêtement, les chapeaux existent en différentes tailles. Pour déterminer la vôtre avec précision, placez un mètre à ruban fermement mais pas serré autour de votre tête, au milieu du front et au-dessus des oreilles. Cette mesure vous donnera la taille idéale de votre chapeau.<br>
                                    {{-- <a href="{{ asset('downloads/metre.pdf') }}" class="btn" target="_blank" tabindex="0">Téléchargez un mètre de couturière ici</a>. --}}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faq2">
                                <h5 class="mb-0">
                                    <a href="#collapse2" class="btn collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" tabindex="0">
                                        Comment identifier un vrai chapeau Panama ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Un véritable Panama s'identifie par la présence d’une rosace au sommet de la couronne, point de départ du tissage. Cette rosace peut varier selon la qualité, de 3 à 25 cercles pour les chapeaux haut de gamme, ce qui détermine leur authenticité.<br>
                                    <img src="{{ asset('img/palma/about2.png') }}" alt="Rosace au sommet de la couronne" class="img-fluid mt-2">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faq3">
                                <h5 class="mb-0">
                                    <a href="#collapse3" class="btn collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" tabindex="0">
                                        Les panamas peuvent-ils se plier ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Les chapeaux de haute gamme peuvent se rouler mais il n'est pas recommandé de les plier, car ils peuvent perdre leur forme et leur structure.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faq4">
                                <h5 class="mb-0">
                                    <a href="#collapse4" class="btn collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" tabindex="0">
                                        Quelles sont les difficultés pour fabriquer un Panama ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faqAccordion">
                                <div class="card-body">
                                    La fabrication artisanale d’un véritable Panama est un savoir-faire exigeant, influencé par l'humidité, la chaleur, la pluie et l'exposition au soleil. Ces conditions affectent la souplesse de la paille et la régularité du tissage, rendant chaque chapeau unique et précieux.<br>
                                    <img src="{{ asset('img/palma/about1.png') }}" alt="Sombrero en bote" class="img-fluid mt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
