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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animations.css') }}">
    <style>
        /* Global override for bold text to inherit color */
        b, strong {
            color: inherit !important;
        }

        /* Fix for Slick Carousel passive event listeners */
        .slick-slider, .slick-list, .slick-track {
            touch-action: pan-y;
        }

        /* Estilos generales */
        .menu-wrapper {
            background-color: #000000 !important;
            color: #ffffff !important;
            min-height: 120px;
            width: 100%;
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

        .main-menu nav ul li {
            list-style: none;
        }

        .main-menu nav ul li a {
            padding: 8px 16px;
            color: #D4AF37 !important;
            text-decoration: none;
            transition: all 0.3s;
        }

        .main-menu nav ul li a:hover {
            color: #F1C40F !important;
        }

        .btn-brand {
            background: #7d716c;
            color: #ffffff;
            border: none;
        }
        .btn-brand:hover {
            background: #6b605b;
            color: #ffffff;
        }

        .header-social a {
            color: #ffffff !important;
            margin-left: 12px;
        }

        .header-social i {
            color: #ffffff !important;
        }

        .header-social a:hover {
            color: #cccccc !important;
        }

        /* Animaciones de iconos dentro del menú */
        .menu-actions .header-social a,
        .menu-actions .header-social i {
            transition: transform 0.25s ease, color 0.25s ease;
        }

        .menu-actions .header-social a:hover {
            transform: translateY(-2px);
            color: #cccccc !important;
        }

        /* Fondo y animación del icono de carrito dentro del menú */
        .menu-actions .card-stor {
            background-color: #7d716c !important;
            border-radius: 50% !important;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .menu-actions .card-stor:hover {
            transform: scale(1.06);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .header-right1 a {
            color: #ffffff !important;
        }

        .header-right1 a:hover {
            color: #cccccc !important;
        }

        .user-icon {
            background: none !important;
            border: none !important;
            box-shadow: none !important;
            display: inline-block;
        }

        .user-icon i {
            font-size: 18px;
            color: #ffffff !important;
        }

        #userDropdown {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.35);
        }

        #userDropdown a,
        #userDropdown button {
            color: #fff !important;
            text-decoration: none;
            display: block;
            padding: 10px 14px;
            line-height: 1.4;
            white-space: nowrap;
        }

        #userDropdown a:hover,
        #userDropdown button:hover {
            background: #333;
        }

        .main-menu nav ul li.active>a {
            color: #fff !important;
            background: #7d716c;
            border-radius: 4px;
        }

        /* Layout del menú: izquierda / logo / derecha */
        .main-menu nav .nav-inline {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 20px;
            width: 75%;
            margin: 0 auto;
        }

        .main-menu nav ul {
            display: inline-flex;
            align-items: center;
            gap: 18px;
        }

        #navigation-left {
            justify-content: flex-end;
        }

        #navigation-right {
            justify-content: flex-start;
        }

        @media (min-width: 992px) {
            .menu-wrapper {
                position: relative;
            }

            .main-menu {
                position: relative;
                z-index: 2;
            }
        }

        .header-area .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        header,
        .header-area,
        .main-header,
        .menu-wrapper {
            width: 100vw;
            max-width: 100vw;
            border-radius: 0 !important;
        }

        body.full-wrapper {
            overflow-x: hidden;
        }

        .menu-logo img {
            height: 120px;
            width: auto;
            display: block;
        }



        /* Responsive: en móviles, menú colapsado */
        @media (max-width: 992px) {
            .menu-wrapper {
                flex-wrap: wrap;
                background-color: #000000 !important;
                color: #ffffff !important;
                justify-content: space-between !important;
                padding: 10px 15px !important;
                align-items: center !important;
            }

            header,
            .header-area,
            .main-header {
                background-color: #000000 !important;
            }

            .main-header.header-sticky,
            .header-sticky {
                position: static !important;
                top: auto !important;
            }

            .main-menu {
                display: none !important;
            }

            .header-right1 {
                display: none !important;
            }

            .mobile-header-logo img {
                height: 72px;
                width: auto;
                filter: brightness(0) invert(1);
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
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
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

<body>
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/palma/preloader.png') }}" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <header>
        <div class="header-area">
            <div class="main-header header-sticky" style="padding: 0px;">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-center">



                        <!-- Menú (Centro) -->
                        <div class="main-menu flex-grow-1 d-none d-lg-block text-center">
                            <nav>
                                <div class="nav-inline">
                                    <ul id="navigation-left" class="m-0 p-0 d-inline-flex">
                                        <li class="{{ request()->routeIs('welcome') ? 'active' : '' }}">
                                            <a href="{{ route('welcome') }}">Accueil</a>
                                        </li>
                                        @php($menuCategories = \App\Models\Category::orderBy('name')->get())
                                        <li class="dropdown {{ request()->routeIs('shop') ? 'active' : '' }}" style="position: relative;">
                                            <a href="#" class="dropdown-toggle"
                                                onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                                style="display:block;">Catalogue</a>
                                            <ul class="dropdown-menu" style="display: none; position: absolute; left: 0; top: 100%;">
                                                <li><a href="{{ route('shop') }}">Tous les produits</a></li>
                                                @foreach($menuCategories as $cat)
                                                <li><a href="{{ route('shop') }}?category={{ $cat->slug }}">{{ $cat->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown {{ request()->routeIs('about') ? 'active' : '' }}" style="position: relative;">
                                            <a href="#" class="dropdown-toggle"
                                                onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                                style="width: 100%;">Panama Hat</a>
                                            <ul class="dropdown-menu" style="display: none; position: absolute; left: 0; top: 100%;">
                                                <li style="width: 100%;"><a href="{{ route('about.montecristi') }}">Chapeaux Montecristi</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.bandes') }}">Bandes pour chapeaux</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <div class="menu-logo d-none d-lg-block">
                                        <a href="{{ route('welcome') }}">
                                            <img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat" decoding="async" fetchpriority="high">
                                        </a>
                                    </div>

                                    <ul id="navigation-right" class="m-0 p-0 d-inline-flex">
                                        <li class="dropdown" style="position: relative;">
                                            <a href="#" class="dropdown-toggle"
                                                onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                                style="width: 100%;">Histoire et Héritage</a>
                                            <ul class="dropdown-menu" style="display: none; position: absolute; left: 0; top: 100%;">
                                                <li style="width: 100%;"><a href="{{ route('about.histoire') }}">Mon histoire</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.origine') }}">Origine du Panama Haut</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.processus') }}">Processus</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="position: relative;">
                                            <a href="#" class="dropdown-toggle"
                                                onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                                style="width: 100%;">Service à la clientèle</a>
                                            <ul class="dropdown-menu" style="display: none; position: absolute; left: 0; top: 100%;">
                                                <li style="width: 100%;"><a href="{{ route('about.faq') }}">Questions fréquentes</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.comment-commander') }}">COMMENT COMMANDER</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.art-porter-preserver') }}">L'art de porter et préserver votre <b>panama</b></a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li class="menu-actions d-none d-lg-flex align-items-center">
                                            <div class="header-social d-flex align-items-center mr-3 position-relative" id="userMenuContainerInline">
                                                @foreach(($socialLinks ?? []) as $link)
                                                <a href="{{ $link['url'] ?? '#' }}" target="_blank"><i class="{{ $link['icon'] ?? 'fas fa-link' }}"></i></a>
                                                @endforeach
                                                @guest
                                                <a href="#" id="userMenuToggle" title="Compte"><i class="fas fa-user"></i></a>
                                                <div id="userDropdown" style="position:absolute;right:0;top:40px;display:none;min-width:220px;background:#000;border:1px solid #333;border-radius:6px;z-index:9999;">
                                                    <a href="{{ route('login') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Connexion</a>
                                                    <a href="{{ route('register') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">S'inscrire</a>
                                                </div>
                                                @else
                                                <a href="#" id="userMenuToggle" title="Compte"><i class="fas fa-user"></i></a>
                                                <div id="userDropdown" style="position:absolute;right:0;top:40px;display:none;min-width:240px;background:#000;border:1px solid #333;border-radius:6px;z-index:9999;">
                                                    <a href="{{ route('home') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Profil</a>
                                                    <a href="{{ route('orders.index') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Mes commandes</a>
                                                    @if(Auth::user()->role === 'admin')
                                                    <a href="{{ route('admin.dashboard') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Tableau de bord Admin</a>
                                                    @endif
                                                    <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                                                        @csrf
                                                        <button type="submit" style="display:block;width:100%;text-align:left;padding:10px 14px;background:none;border:none;color:#fff;">Déconnexion</button>
                                                    </form>
                                                </div>
                                                @endguest
                                            </div>
                                            <div class="card-stor" id="cartToggle" style="cursor:pointer;">
                                                <img src="{{ asset('img/gallery/card.svg') }}" alt="" loading="lazy" decoding="async">
                                                <span id="cartCount">0</span>
                                            </div>
                                            <div id="cartSidebar"
                                                style="position:fixed;top:0;right:0;bottom:0;width:400px;height:100vh;max-height:100vh;background:#fff;z-index:10000;box-shadow:-2px 0 8px rgba(0,0,0,0.1);display:flex;flex-direction:column;">
                                                <div
                                                    style="padding:20px;border-bottom:1px solid #eee;display:flex;justify-content:space-between;align-items:center;">
                                                    <h4 class="font-weight-bold" style="color:#7d716c;">Mon Panier</h4>
                                                    <button id="closeCart"
                                                        style="background:none;border:none;font-size:24px;color:#7d716c;"
                                                        class="text-dark">&times;</button>
                                                </div>
                                                <div id="cartContent" style="flex:1;overflow-y:auto;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <script>
                                    // Mostrar/ocultar el submenú al hacer click
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                                            dropdown.addEventListener('click', function(e) {
                                                // Evita que se cierre si se hace click dentro del menú
                                                if (e.target.tagName === 'A' && e.target.classList.contains('dropdown-toggle')) {
                                                    e.preventDefault();
                                                    // Oculta todos los demás menús
                                                    document.querySelectorAll('.dropdown').forEach(function(other) {
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
                                        document.addEventListener('click', function(e) {
                                            document.querySelectorAll('.dropdown').forEach(function(dropdown) {
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
                                    /* Force all menu items to uppercase */
                                    .main-menu nav ul li a,
                                    .slicknav_nav li a {
                                        text-transform: uppercase !important;
                                    }

                                    .dropdown-menu {
                                        background: #000000 !important;
                                        border: 1px solid #333;
                                        box-shadow: 0 2px 8px rgba(255, 255, 255, 0.1);
                                        z-index: 1000;
                                        min-width: 340px;
                                        padding: 8px 0;
                                    }

                                    .dropdown-menu li {
                                        margin: 0;
                                        padding: 0;
                                    }

                                    .dropdown-menu li a {
                                        color: #D4AF37 !important;
                                        display: block;
                                        width: 100%;
                                        box-sizing: border-box;
                                        padding: 12px 18px;
                                        white-space: nowrap;
                                        font-size: 16px;
                                        text-transform: uppercase !important;
                                    }

                                    .dropdown-menu li a:hover {
                                        background-color: #333333 !important;
                                        color: #F1C40F !important;
                                    }

                                    .dropdown.show-dropdown>.dropdown-menu {
                                        display: block !important;
                                        width: auto;
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

                                    #cartSidebar,
                                    #cartSidebarMobile {
                                        right: 0 !important;
                                        transform: translateX(110%);
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        transition: transform 0.3s ease, opacity 0.2s ease;
                                        will-change: transform, opacity;
                                    }

                                    #cartSidebar.open,
                                    #cartSidebarMobile.open {
                                        transform: translateX(0);
                                        opacity: 1;
                                        visibility: visible;
                                        pointer-events: auto;
                                    }

                                    html,
                                    body {
                                        height: 100%;
                                        overflow-x: hidden;
                                    }

                                    body {
                                        min-height: 100vh;
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    main {
                                        flex: 1 0 auto;
                                        display: flex;
                                        flex-direction: column;
                                        min-height: 0;
                                    }

                                    .auth-page {
                                        flex: 1 0 auto;
                                    }

                                    .auth-page .row {
                                        min-height: 100%;
                                    }

                                    @media (min-width: 768px) {
                                        .auth-page .row {
                                            align-items: center;
                                        }
                                    }

                                    @media (max-width: 992px) {
                                        main {
                                            padding-bottom: calc(96px + env(safe-area-inset-bottom));
                                        }

                                        footer {
                                            margin-bottom: 70px;
                                        }
                                    }

                                    .footer-minimal {
                                        background: #000000;
                                        color: #ffffff;
                                        padding: 24px 0 16px;
                                    }

                                    .footer-minimal .footer-main {
                                        gap: 28px;
                                        flex-wrap: wrap;
                                        margin-bottom: 6px;
                                    }

                                    .footer-minimal .footer-logo img {
                                        display: block;
                                    }

                                    .footer-minimal .footer-links li {
                                        list-style: none;
                                    }

                                    .footer-minimal .footer-links li a {
                                        color: #ffffff !important;
                                        text-decoration: none;
                                        padding: 6px 10px;
                                        transition: color 0.25s ease;
                                    }

                                    .footer-minimal .footer-links li a:hover {
                                        color: #cccccc !important;
                                    }

                                    .footer-minimal .copy {
                                        font-size: 14px;
                                        opacity: 0.9;
                                    }

                                    /* Estilos del nuevo menú móvil (Hamburguesa) */
                                    .mobile-menu-btn {
                                        background: none;
                                        border: none;
                                        font-size: 24px;
                                        color: #D4AF37;
                                        padding: 5px;
                                        cursor: pointer;
                                    }

                                    /* Mobile Menu Sidebar */
                                    #mobileMenuSidebar {
                                        position: fixed;
                                        top: 0;
                                        left: 0;
                                        bottom: 0;
                                        width: 100vw;
                                        height: 100vh;
                                        background: #000000;
                                        z-index: 10001;
                                        display: flex;
                                        flex-direction: column;
                                        transform: translateX(-110%);
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        transition: transform 0.3s ease, opacity 0.2s ease;
                                        will-change: transform, opacity;
                                    }

                                    #mobileMenuSidebar.open {
                                        transform: translateX(0);
                                        opacity: 1;
                                        visibility: visible;
                                        pointer-events: auto;
                                    }

                                    .mobile-menu-sidebar ul {
                                        list-style: none;
                                        padding: 0;
                                        margin: 0;
                                    }

                                    .mobile-menu-sidebar ul li {
                                        border-bottom: 1px solid #333333;
                                    }

                                    .mobile-menu-sidebar ul li a {
                                        display: block;
                                        padding: 15px 20px;
                                        color: #ffffff;
                                        text-decoration: none;
                                        font-size: 16px;
                                    }

                                    .mobile-menu-sidebar ul li a:hover {
                                        background-color: #333333;
                                    }

                                    .mobile-menu-sidebar .submenu-toggle {
                                        float: right;
                                        padding: 0 10px;
                                        color: #cccccc;
                                    }
                                    
                                    .mobile-menu-sidebar .submenu {
                                        display: none;
                                        background-color: #1a1a1a;
                                    }
                                    
                                    .mobile-menu-sidebar .submenu li a {
                                        padding-left: 40px;
                                        font-size: 14px;
                                    }

                                    /* Cart Sidebar Mobile Dark Mode Overrides */
                                    #cartSidebarMobile .list-group-item {
                                        background-color: #1a1a1a;
                                        border-color: #333;
                                        color: #fff;
                                    }
                                    #cartSidebarMobile .product-name {
                                        color: #fff;
                                    }
                                    #cartSidebarMobile .unit,
                                    #cartSidebarMobile .item-price,
                                    #cartSidebarMobile .attr-inline {
                                        color: #ccc;
                                    }
                                    #cartSidebarMobile .btn-outline-brand {
                                        color: #fff;
                                        border-color: #fff;
                                    }
                                    #cartSidebarMobile .btn-outline-brand:hover {
                                        background-color: #fff;
                                        color: #000;
                                    }
                                    #cartSidebarMobile .qty-input {
                                        background-color: #333;
                                        border-color: #444;
                                        color: #fff;
                                    }
                                    #cartSidebarMobile .subtotal-left,
                                    #cartSidebarMobile .subtotal-right {
                                        color: #fff;
                                        font-weight: bold;
                                    }
                                    #cartSidebarMobile .cart-footer .btn {
                                        background-color: #fff;
                                        color: #000;
                                        border: 1px solid #fff;
                                        margin-bottom: 10px;
                                        width: 100%;
                                        display: block;
                                        text-align: center;
                                    }
                                    #cartSidebarMobile .cart-footer .btn:hover {
                                        background-color: #ddd;
                                    }
                                    #cartSidebarMobile p {
                                        color: #fff;
                                    }
                                </style>
                            </nav>
                        </div>

                        <div class="mobile-header-bar d-flex d-lg-none align-items-center justify-content-between w-100">
                            <button id="mobileMenuBtn" class="mobile-menu-btn" aria-label="Menu">
                                <i class="fas fa-bars"></i>
                            </button>
                            
                            <a href="{{ route('welcome') }}" class="mx-auto">
                                <img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat" style="height: 50px; width: auto;" decoding="async" fetchpriority="high">
                            </a>
                            
                            <div class="header-right-mobile d-flex align-items-center">
                                <div class="card-stor tab-cart" style="width: 40px; height: 40px; background-color: #7d716c;">
                                    <img src="{{ asset('img/gallery/card.svg') }}" alt="" style="width: 20px; filter: brightness(0) invert(1);">
                                    <span id="cartCountMobileTop" class="badge-counter" style="position: absolute; top: -5px; right: -5px; background: #dc3545; color: white; border-radius: 50%; width: 18px; height: 18px; font-size: 10px; display: flex; align-items: center; justify-content: center;">0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Menu Sidebar -->
                        <div id="mobileMenuSidebar" class="mobile-menu-sidebar d-lg-none">
                            <div style="padding: 20px; border-bottom: 1px solid #333; display: flex; justify-content: space-between; align-items: center;">
                                <h4 class="font-weight-bold" style="color: #ffffff; margin: 0;">Menu</h4>
                                <button id="closeMobileMenu" style="background: none; border: none; font-size: 24px; color: #ffffff;">&times;</button>
                            </div>
                            <div style="padding: 0; flex: 1; overflow-y: auto;">
                                <ul>
                                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                                <li>
                                    <a href="#" class="submenu-toggle-btn">Catalogue <i class="fas fa-chevron-down submenu-toggle"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('shop') }}">Tous les produits</a></li>
                                        @php($menuCategories = \App\Models\Category::orderBy('name')->get())
                                        @foreach($menuCategories as $cat)
                                        <li><a href="{{ route('shop') }}?category={{ $cat->slug }}">{{ $cat->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu-toggle-btn">Panama Hat <i class="fas fa-chevron-down submenu-toggle"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('about.montecristi') }}">Chapeaux Montecristi</a></li>
                                        <li><a href="{{ route('about.bandes') }}">Bandes pour chapeaux</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu-toggle-btn">Histoire et Héritage <i class="fas fa-chevron-down submenu-toggle"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('about.histoire') }}">Mon histoire</a></li>
                                        <li><a href="{{ route('about.origine') }}">Origine du Panama Haut</a></li>
                                        <li><a href="{{ route('about.processus') }}">Processus</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="submenu-toggle-btn">Service à la clientèle <i class="fas fa-chevron-down submenu-toggle"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('about.faq') }}">Questions fréquentes</a></li>
                                        <li><a href="{{ route('about.comment-commander') }}">COMMENT COMMANDER</a></li>
                                        <li><a href="{{ route('about.art-porter-preserver') }}">Lart de porter et préserver votre panama</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                
                                @guest
                                <li><a href="{{ route('login') }}">Se connecter</a></li>
                                <li><a href="{{ route('register') }}">Créer un compte</a></li>
                                @else
                                <li><a href="{{ route('home') }}">Profil</a></li>
                                <li><a href="{{ route('orders.index') }}">Mes commandes</a></li>
                                @if(Auth::user()->role === 'admin')
                                <li><a href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
                                @endif
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">Se déconnecter</a>
                                    <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endguest
                            </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu elements removed -->


    <main>
        <!--? Hero Area Start-->
        <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile cart offcanvas available globally for mobile -->
                <div id="cartSidebarMobile"
                    style="position:fixed;top:0;right:0;bottom:0;width:100vw;height:100vh;background:#000000;color:#ffffff;z-index:10000;display:flex;flex-direction:column;">
                    <div
                        style="padding:20px;border-bottom:1px solid #333;display:flex;justify-content:space-between;align-items:center;">
                        <h4 class="font-weight-bold" style="color:#ffffff;">Mon Panier</h4>
                        <button id="closeCartMobile"
                            style="background:none;border:none;font-size:24px;color:#ffffff;"
                            class="text-white">&times;</button>
                    </div>
                    <div id="cartContentMobile" style="padding:20px;flex:1;overflow-y:auto;">
                    </div>
                </div>
                <!-- /End mobile  Menu-->

                @yield('slider')
            </div>
        </div>

        @yield('content')
    </main>

    <footer>
        <div class="footer-minimal">
            <div class="container">
                <div class="footer-main d-flex align-items-center justify-content-center">
                    <div class="footer-logo mr-3">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat" style="height:56px;width:auto;" loading="lazy" decoding="async"></a>
                    </div>
                    <ul class="footer-links m-0 p-0 d-flex">
                        <li><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li><a href="{{ route('shop') }}">Catalogue</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-copy text-center">
                    <span class="copy">&copy; <script>
                            document.write(new Date().getFullYear());
                        </script> PalmataHat. Tous droits réservés.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Search model Begin -->

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
            // Lógica del nuevo menú móvil
            $('#mobileMenuBtn').on('click', function(e) {
                e.preventDefault();
                $('#mobileMenuSidebar').addClass('open');
            });

            $('#closeMobileMenu').on('click', function(e) {
                e.preventDefault();
                $('#mobileMenuSidebar').removeClass('open');
            });

            $('.submenu-toggle-btn').on('click', function(e) {
                e.preventDefault();
                $(this).next('.submenu').slideToggle();
                $(this).find('.submenu-toggle').toggleClass('fa-chevron-down fa-chevron-up');
            });
            $('.tab-cart').on('click', function() {
                refreshCart();
                $('#cartSidebarMobile').addClass('open');
            });

            $('#closeCartMobile').on('click', function() {
                $('#cartSidebarMobile').removeClass('open');
            });

            $(document).on('mousedown', function(e) {
                const $cm = $('#cartSidebarMobile');
                if ($cm.hasClass('open') && !$(e.target).closest('#cartSidebarMobile, .tab-cart').length) {
                    $cm.removeClass('open');
                }
            });

            function refreshCart() {
                $.get("{{ route('cart.index') }}", function(html) {
                    $('#cartContent').html(html);
                    $('#cartContentMobile').html(html);
                });
            }
            window.refreshCart = refreshCart;
            window.openCartSidebar = function(){
                refreshCart();
                $('#cartSidebar').addClass('open');
            };
            window.openCartSidebarMobile = function(){
                refreshCart();
                $('#cartSidebarMobile').addClass('open');
            };

            function updateCartCount(count) {
                $('#cartCount').text(count);
                $('#cartCountMobileTab').text(count);
            }

            function removeFromCart(pid) {
                $.post("{{ route('cart.remove') }}", {
                    _token: '{{ csrf_token() }}',
                    product_id: pid
                }, function(res) {
                    updateCartCount(res.count);
                    refreshCart();
                });
            }

            function clearCart() {
                $.post("{{ route('cart.clear') }}", {
                    _token: '{{ csrf_token() }}'
                }, function(res) {
                    updateCartCount(res.count);
                    refreshCart();
                });
            }
            $('#cartToggle').on('click', function() {
                refreshCart();
                $('#cartSidebar').addClass('open');
            });
            $('#closeCart').on('click', function() {
                $('#cartSidebar').removeClass('open');
            });
            $(document).on('mousedown', function(e) {
                const $c = $('#cartSidebar');
                if ($c.hasClass('open') && !$(e.target).closest('#cartSidebar, #cartToggle').length) {
                    $c.removeClass('open');
                }
            });

            $('#userMenuToggle').on('click', function(e) {
                e.preventDefault();
                $('#userDropdown').toggle();
            });
            $(document).on('mousedown', function(e) {
                if (!$(e.target).closest('#userDropdown, #userMenuToggle').length) {
                    $('#userDropdown').hide();
                }
            });


        });
    </script>

</body>

</html>
