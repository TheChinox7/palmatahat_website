@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a>Questions fréquentes</a></li>
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
                        <h2 style="font-size:3.2rem;">Questions Fréquentes</h2>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
