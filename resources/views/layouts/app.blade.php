<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PalmataHat | Vente de Chapeaux</title>
    <meta name="description"
        content="PalmataHat - Boutique en ligne spécialisée dans les chapeaux artisanaux et de mode. Trouvez le chapeau parfait pour chaque occasion.">
    <meta name="keywords"
        content="chapeaux, vente de chapeaux, chapeaux artisanaux, chapeaux de palme, PalmataHat, mode, accessoires">
    <meta name="author" content="PalmataHat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="PalmataHat | Vente de Chapeaux">
    <meta property="og:description"
        content="Découvrez notre collection de chapeaux artisanaux et de mode chez PalmataHat.">
    <meta property="og:image" content="{{ asset('img/palma/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('img/palma/favicon.svg') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animations.css') }}">
    <style>
        /* Estilos generales */
        .menu-wrapper {
            background-color: #000000 !important;
            color: #ffffff !important;
            padding: 10px 0;
        }
        
        .menu-wrapper.slicknav_menu * {
            color: #ffffff !important;
        }
        
        .card-stor {
            background-color: #ffffff;
            border-radius: 50% !important;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .card-stor:hover {
            background-color: #f8f9fa;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .card-stor:hover img {
            filter: sepia(100%) saturate(200%) hue-rotate(15deg) brightness(0.7);
        }
        
        .card-stor:active,
        .card-stor.active {
            background-color: #ffffff !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        
        .card-stor:active img,
        .card-stor.active img {
            filter: sepia(100%) saturate(200%) hue-rotate(15deg) brightness(0.7) !important;
        }
        
        .card-stor img {
            width: 24px;
            height: 24px;
            transition: filter 0.3s ease;
        }
        
        .card-stor span {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }
        
        /* .menu-wrapper .logo img {
            filter: sepia(100%) saturate(200%) hue-rotate(30deg) brightness(1.2) contrast(1.1);
        } */
        
        #navigation li {
            list-style: none;
        }

        #navigation li a {
            padding: 8px 16px;
            color: #ffffff !important;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        #navigation li a:hover {
            color: #cccccc !important;
        }
        
        .header-social a {
            color: #ffffff !important;
        }
        
        .header-social a:hover {
            color: #cccccc !important;
        }

        #navigation li.active>a {
            color: #fff !important;
            background: #7d716c;
            border-radius: 4px;
        }

        /* Centramos el menú en desktop */
        .main-menu nav ul {
            display: inline-flex;
            justify-content: center;
            gap: 20px;
        }

        /* Responsive: en móviles, menú colapsado */
        @media (max-width: 992px) {
            .menu-wrapper {
                flex-wrap: wrap;
            }

            .main-menu {
                order: 3;
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }

            .header-right1 {
                order: 2;
                width: auto;
                margin-left: auto;
            }
        }



        /* Layout imagen-texto lado a lado */
        .content-section {
            display: flex;
            align-items: center;
            margin-bottom: 4rem;
            gap: 3rem;
        }

        .content-section.reverse {
            flex-direction: row-reverse;
        }

        .content-image {
            flex: 0 0 45%;
        }

        .content-text {
            flex: 1;
        }

        .content-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }



        /* Responsive para layout imagen-texto */
        @media (max-width: 768px) {
            .content-section,
            .content-section.reverse {
                flex-direction: column;
                gap: 2rem;
            }

            .content-image {
                flex: none;
                width: 100%;
            }

            h1 {
                font-size: 2.5rem !important;
            }

            h2 {
                font-size: 2.2rem !important;
            }

            h3 {
                font-size: 1.8rem !important;
            }
        }
    </style>

</head>

<body class="full-wrapper">
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/palma/preloader.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">

                        <!-- Logo (Izquierda) -->
                        <div class="logo" style="max-width: 120px;">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat" class="img-fluid">
                            </a>
                        </div>

                        <!-- Menú (Centro) -->
                        <div class="main-menu flex-grow-1 d-none d-lg-block text-center">
                            <nav>
                                <ul id="navigation" class="d-inline-flex m-0 p-0">
                                    <li class="{{ request()->routeIs('welcome') ? 'active' : '' }}">
                                        <a href="{{ route('welcome') }}">Accueil</a>
                                    </li>
                                    <li class="{{ request()->routeIs('shop') ? 'active' : '' }}">
                                        <a href="{{ route('shop') }}">Catalogue</a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs('about') ? 'active' : '' }}"
                                        style="position: relative;">
                                        <a href="#" class="dropdown-toggle"
                                            onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                            style="width: 100%;">Panama Hat</a>
                                        <ul class="dropdown-menu"
                                            style="display: none; position: absolute; left: 0; top: 100%; width: 100%;">
                                            <li><a href="{{ route('about.montecristi') }}">Chapeaux Montecristi</a></li>
                                            <li><a href="{{ route('about.histoire') }}">Mon histoire</a></li>
                                            <li><a href="{{ route('about.bandes') }}">Bandes pour chapeaux</a></li>

                                            <li><a href="{{ route('about.origine') }}">Origene du Chapeau Panama</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"
                                        style="position: relative;">
                                        <a href="#" class="dropdown-toggle"
                                            onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                            style="width: 100%;">Service à la clientèle</a>
                                        <ul class="dropdown-menu"
                                            style="display: none; position: absolute; left: 0; top: 100%; width: 100%;">
                                            <li><a href="{{ route('about.processus') }}">Processus</a></li>
                                            <li><a href="{{ route('about.faq') }}">Questions fréquentes</a></li>

                                            <li><a href="{{ route('about.comment-commander') }}">Comment commander ?</a></li>

                                            <li><a href="{{ route('about.art-porter-preserver') }}">Lart de porter et préserver votre panama</a></li>
                                        </ul>
                                    </li>
                                    <script>
                                        // Mostrar/ocultar el submenú al hacer click
                                        document.addEventListener('DOMContentLoaded', function () {
                                            document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                                                dropdown.addEventListener('click', function (e) {
                                                    // Evita que se cierre si se hace click dentro del menú
                                                    if (e.target.tagName === 'A' && e.target.classList.contains('dropdown-toggle')) {
                                                        e.preventDefault();
                                                        // Oculta todos los demás menús
                                                        document.querySelectorAll('.dropdown').forEach(function (other) {
                                                            if (other !== dropdown) {
                                                                other.classList.remove('show-dropdown');
                                                                if (other.querySelector('.dropdown-menu')) {
                                                                    other.querySelector('.dropdown-menu').style.display = 'none';
                                                                }
                                                            }
                                                        });
                                                        // Alterna el menú actual
                                                        const menu = dropdown.querySelector('.dropdown-menu');
                                                        if (dropdown.classList.contains('show-dropdown')) {
                                                            menu.style.display = 'block';
                                                        } else {
                                                            menu.style.display = 'none';
                                                        }
                                                    }
                                                });
                                            });
                                            // Cierra el menú si se hace click fuera
                                            document.addEventListener('click', function (e) {
                                                document.querySelectorAll('.dropdown').forEach(function (dropdown) {
                                                    if (!dropdown.contains(e.target)) {
                                                        dropdown.classList.remove('show-dropdown');
                                                        if (dropdown.querySelector('.dropdown-menu')) {
                                                            dropdown.querySelector('.dropdown-menu').style.display = 'none';
                                                        }
                                                    } else {
                                                        if (dropdown.classList.contains('show-dropdown')) {
                                                            dropdown.querySelector('.dropdown-menu').style.display = 'block';
                                                        }
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                    <style>
                                        .dropdown-menu {
                                            background: #000000 !important;
                                            border: 1px solid #333;
                                            box-shadow: 0 2px 8px rgba(255, 255, 255, 0.1);
                                            z-index: 1000;
                                        }
                                        
                                        .dropdown-menu li a {
                                            color: #ffffff !important;
                                        }
                                        
                                        .dropdown-menu li a:hover {
                                            background-color: #333333 !important;
                                            color: #cccccc !important;
                                        }

                                        .dropdown.show-dropdown>.dropdown-menu {
                                            display: block !important;
                                            width: 100%;
                                        }

                                        .dropdown>a.dropdown-toggle {
                                            width: 100%;
                                            display: block;
                                        }
                                        
                                        .mobile_menu {
                                            background-color: #000000 !important;
                                        }
                                        
                                        .slicknav_menu {
                                            background-color: #000000 !important;
                                        }
                                        
                                        .slicknav_menu * {
                                            color: #ffffff !important;
                                        }
                                    </style>
                                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Redes, usuario y carrito (Derecha) -->
                        <div class="header-right1 d-flex align-items-center">
                            <div class="header-social d-none d-md-flex mr-3">
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="search d-flex align-items-center">
                                <ul class="d-flex align-items-center m-0 p-0 list-unstyled">
                                    @guest
                                        <li class="mr-3">
                                            <a href="{{ route('login') }}" data-toggle="tooltip" title="Se connecter">
                                                <i class="fas fa-user"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="mr-3">
                                            <a href="{{ route('welcome') }}" data-toggle="tooltip"
                                                title="{{ Auth::user()->name }}">
                                                <i class="fas fa-user-check"></i>
                                            </a>
                                        </li>
                                    @endguest
                                    <li>
                                        <div class="card-stor" id="cartToggle" style="cursor:pointer;">
                                            <img src="{{ asset('img/gallery/card.svg') }}" alt="">
                                            <span>0</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Menú Móvil -->
                        <div class="col-12 d-lg-none mt-2">
                            <div class="mobile_menu"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>
        <!--? Hero Area Start-->
        <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile Device Show Menu-->
                <div class="header-right2 d-flex align-items-center">
                    <!-- Social -->
                    <div class="header-social d-block d-md-none">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <!-- Search Box -->
                    <div class="search d-block d-md-none">
                        <ul class="d-flex align-items-center">
                            @guest
                                <li class="mr-15">
                                    <a href="{{ route('login') }}" data-toggle="tooltip" title="Se connecter">
                                        <div class="nav-search search-switch">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </a>
                                </li>
                            @else
                                <li class="mr-15">
                                    <a href="{{ route('welcome') }}" data-toggle="tooltip" title="{{ Auth::user()->name }}">
                                        <div class="nav-search search-switch">
                                            <i class="fas fa-user-check"></i>
                                        </div>
                                    </a>
                                </li>
                            @endguest
                            <script>
                                $(function () {
                                    $('[data-toggle="tooltip"]').tooltip();
                                });
                            </script>
                            <li>
                                <div class="card-stor" id="cartToggleMobile" style="cursor:pointer;">
                                    <img src="{{ asset('img/gallery/card.svg') }}" alt="">
                                    <span>0</span>
                                </div>
                                <div id="cartSidebarMobile"
                                    style="position:fixed;top:0;right:-400px;width:100vw;max-width:400px;height:100vh;background:#fff;z-index:9999;box-shadow:-2px 0 8px rgba(0,0,0,0.1);transition:right 0.3s;overflow-y:auto;">
                                    <div
                                        style="padding:20px;border-bottom:1px solid #eee;display:flex;justify-content:space-between;align-items:center;">
                                        <h4 class="font-weight-bold" style="color:#7d716c;">Mon Panier</h4>
                                        <button id="closeCartMobile"
                                            style="background:none;border:none;font-size:24px;color:#7d716c;"
                                            class="text-dark">&times;</button>
                                    </div>
                                    <div id="cartContentMobile" style="padding:20px;">
                                        <p>Votre panier est vide.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <script>
                            $(document).ready(function () {
                                $('#cartToggleMobile').on('click', function () {
                                    $('#cartSidebarMobile').css('right', '0');
                                });
                                $('#closeCartMobile').on('click', function () {
                                    $('#cartSidebarMobile').css('right', '-400px');
                                });
                                $(document).on('mousedown', function (e) {
                                    if ($('#cartSidebarMobile').css('right') === '0px' && !$(e.target).closest(
                                        '#cartSidebarMobile, #cartToggleMobile').length) {
                                        $('#cartSidebarMobile').css('right', '-400px');
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <!-- /End mobile  Menu-->

                @yield('slider')
            </div>
        </div>

        @yield('content')
    </main>

    <footer>
        <div class="footer-area footer-padding">
            <div class="container-fluid ">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-logo mb-35">
                                    <a href="{{ route('welcome') }}"><img src="{{ asset('img/palma/logopalma.png') }}"
                                            alt="PalmataHat" style="max-width: 50%;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Liens rapides</h4>
                                <ul>
                                    <li><a href="#">Guide de styles</a></li>
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Termes et conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Catégories</h4>
                                <ul>
                                    <li><a href="#">Chapeaux de palme</a></li>
                                    <li><a href="#">Chapeaux de mode</a></li>
                                    <li><a href="#">Accessoires</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Collaborateurs</h4>
                                <ul>
                                    <li><a href="#">Artisans</a></li>
                                    <li><a href="#">Marques associées</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contactez-nous</h4>
                                <ul>
                                    <li><a href="#">(89) 982-278 356</a></li>
                                    <li><a href="#">info@palmatahat.com</a></li>
                                    <li><a href="#">67/A, PalmataHat, Green road, NYC</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> PalmataHat. Tous droits réservés.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--? Search model Begin -->
    <!-- Search model end -->
    <!-- Scroll Up -->

    <!-- JS here -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/animated.headline.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/hover-direction-snake.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom-animations.js') }}"></script>

    <script>
        // Usar jQuery en lugar de $ para evitar conflictos
        jQuery(document).ready(function($) {
            $('#cartToggle').on('click', function () {
                $('#cartSidebar').css('right', '0');
            });
            $('#closeCart').on('click', function () {
                $('#cartSidebar').css('right', '-400px');
            });
            $(document).on('mousedown', function (e) {
                if ($('#cartSidebar').css('right') === '0px' && !$(e.target).closest(
                    '#cartSidebar, #cartToggle').length) {
                    $('#cartSidebar').css('right', '-400px');
                }
            });


        });
    </script>

</body>

</html>