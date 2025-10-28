@extends('layouts.app')

@section('content')
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a>Processus</a></li>
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
                        <h2 class="mb-3" style="font-size:3.2rem; text-align: center;">Processus et élaboration des chapeaux
                            de
                            paille "toquilla"</h2>
                        <div class="col-lg-6 mt-3">
                            <div class="section-tittle mb-60 pt-10">
                                <p class="pera" style="font-size: 1.6rem; text-align: justify; color: #000;">Les chapeaux de
                                    paille
                                    toquilla sont bien plus
                                    qu'un accessoire, faite à la main, qui ont porté cette ancienne tradition pendant
                                    plusieurs années en faisant connaître au monde entier.
                                    <br>
                                    Ce savoir-faire a été reconnu par L'Unesco comme Patrimoine culturel immatériel de
                                    l'humanité pour sa richesse culturelle et son héritage ancestral
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
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <img src="{{ asset('img/palma/o1.jpg') }}" alt="Processus de fabrication du chapeau Panama"
                                    class="img-fluid"
                                    style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <img src="{{ asset('img/palma/o2.jpg') }}"
                                        alt="Processus de fabrication du chapeau Panama" class="img-fluid"
                                        style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                                </div>
                                <div class="text-center mb-5 mt-5">
                                    <video controls class="img-fluid"
                                        style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                                        <source src="{{ asset('img/palma/processus1.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-tittle mb-60 pt-10">
                                    <p class="pera" style="font-size: 1.6rem; text-align: justify; color: #000;">Matière
                                        première : la plante
                                        de paille toquilla
                                        <br><br>
                                        C'est une plante sauvage que l'on trouve à Montecristi Manabi, une ville au
                                        climat
                                        subtropical humide qui permet de la cultiver et la recollecte de cette fibre.
                                        C'est une
                                        plante herbacée qui pousse de 1,5 à 3 mètres de haut, dont on extrait le tendre
                                        bourgeon
                                        ou partie intérieure des feuilles, idéal pour l'élaboration du chapeau de
                                        Panama.
                                        <br><br>
                                        <strong>Informations importantes:</strong>
                                        <br><br>
                                        <u>Récolta responsable:</u> Les artisans ne coupent pas la plante entière elle
                                        n'est pas
                                        déboisée, l'agriculteur extrait soigneusement les bourgeons appropriés, Sans
                                        nuire à la
                                        repousse naturelle.
                                        <br><br>
                                        <u>Sélection de la Fibre:</u> La tige doit être séparée afin de récupérer le
                                        cœur, le
                                        centre du bourgeon à partir duquel les meilleurs fils et le plus fin seront
                                        sélectionnés. Cette sélection garantit la qualité et la finesse du tissage.
                                        <br><br>
                                        <u>Cuisson de la paille de toquilla:</u> Une fois sélectionner les brins, dans
                                        un four à
                                        bois, vous nouez la paille de toquilla et vous la plongez dans de l'eau
                                        bouillante
                                        pendant 30 secondes, cela permet d'établisse la couleur beige de la fibre.
                                        <br><br>
                                        <u>Séchage au Soleil:</u> Les fibres doivent sécher naturellement, au soleil, ce
                                        qui
                                        permet d'évacuer l'humidité, d'assouplir la matière, et de la rendre prête pour
                                        le
                                        tissage. Une fois que la fibre est sèche, elle est mise dans un four à bois, où
                                        elle est
                                        fumée au soufre pendant 12 heures pour blanchir un peu plus la paille de
                                        toquilla.
                                        <br><br>
                                        <u>Le début de tissage la basse de chapeau:</u> Tout commence par la création
                                        d'un
                                        gabarit à l'aide des 8 paires des brins des pailles. La partie supérieure du
                                        chapeau
                                        connu par les artisans sous le nom de cangrejito armado marque le point de
                                        départ du
                                        tressage. Une fois cette base formée et les placer sur un petit support en bois
                                        le
                                        tissage du corps de chapeau peut commencer.
                                    </p>
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
                                    <p class="pera" style="font-size: 1.6rem; text-align: justify; color: #000;">
                                        <strong>Fermeture de bord:</strong> Le bord du chapeau est soigneusement
                                        terminé, les
                                        parties avant et arrière sont ajustées pour donner une symétrie parfaite à
                                        l'Ala, le
                                        bord donnant chaque style.
                                        <br><br>
                                        <strong>Découper de bord et des fils:</strong> Les extrémités sont coupées à
                                        environ 10
                                        cm de bord, ce qui affine la forme de chapeau et élimine les irrégularités.
                                        <br><br>
                                        <strong>Lavage délicat:</strong> Chaque chapeau est lavé à la main avec de l'eau
                                        tiède
                                        et du savon neutre, afin d'enlever les résidus accumulés pendant le tissage.
                                        <br><br>
                                        <strong>Blanchissement au soufre:</strong> Le chapeau est placé dans un four à
                                        bois avec
                                        du soufre pendant 12 heures. Ce procédé permet de stabiliser sa couleur beige
                                        naturelle
                                        avant la finition.
                                        <br><br>
                                        <strong>Séchage complet:</strong> Les chapeaux sont ensuite séchés à l'air
                                        libre, dans
                                        un espace sec et ventilé pour garantir leur durabilité.
                                        <br><br>
                                        <strong>Traitements finals pour sa texture et forme:</strong>
                                        <br><br>
                                        <u>Battue en brèche:</u> Pour rendre la texture plus souple, chaque chapeau est
                                        battu
                                        délicatement au moins 5 fois avec un pot en bois contenant un peu de soufre. Ce
                                        geste
                                        doit être fait avec précaution pour ne pas abîmer les fibres.
                                        <br><br>
                                        <u>Repassage:</u> Enfin, le chapeau est posé sur un support en bois de balsa
                                        puis une
                                        bande de cuir est serrée autour de la couronne. Cela permet de repasser et
                                        structurer la
                                        partie appelée Campana, donnant au chapeau sa forme définitive.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <img src="{{ asset('img/palma/o4.jpg') }}"
                                        alt="Processus de fabrication du chapeau Panama" class="img-fluid"
                                        style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <img src="{{ asset('img/palma/o5.jpg') }}"
                                        alt="Processus de fabrication du chapeau Panama" class="img-fluid"
                                        style="max-width: 600px; width: 100%; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12);">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-tittle mb-60 pt-10">
                                    <p class="pera" style="font-size: 1.6rem; text-align: justify; color: #000;">
                                        <strong>Ruban</strong>
                                        <br><br>
                                        La touche finale et distinctive, la pose du ruban ; également appelé
                                        bande ou ceinture
                                        et le dernier détail qui rehausse l'élégance et l'unicité de chaque
                                        chapeau.
                                        <br><br>
                                        Nous proposons différents types de ruban en tissu, cuire, crin de cheval
                                        et même des
                                        chaînes en argent qui complète parfaitement l'artisanat du chapeau.
                                        <br><br>
                                        <strong>Slogan</strong>
                                        <br><br>
                                        A chaque chapeau Panama qui nous proposons incarne la tradition la
                                        précision et la
                                        passion, acheter un chapeau Panama c'est acquérir une pièce unique
                                        symbole de culture
                                        d'élégance et d'engagement pour l'artisanat équatorien.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection