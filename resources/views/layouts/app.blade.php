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
            color: #ffffff !important;
            text-decoration: none;
            transition: all 0.3s;
        }

        .main-menu nav ul li a:hover {
            color: #cccccc !important;
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
                background-color: #ffffff !important;
                color: #000000 !important;
                justify-content: center !important;
                padding: 16px 0 !important;
            }

            header,
            .header-area,
            .main-header {
                background-color: #ffffff !important;
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
                                                <li style="width: 100%;"><a href="{{ route('about.histoire') }}">Mon histoire</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.bandes') }}">Bandes pour chapeaux</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.origine') }}">Origine du Panama Haut</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <div class="menu-logo d-none d-lg-block">
                                        <a href="{{ route('welcome') }}">
                                            <img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat">
                                        </a>
                                    </div>

                                    <ul id="navigation-right" class="m-0 p-0 d-inline-flex">
                                        <li class="dropdown" style="position: relative;">
                                            <a href="#" class="dropdown-toggle"
                                                onclick="event.preventDefault(); this.parentElement.classList.toggle('show-dropdown');"
                                                style="width: 100%;">Service à la clientèle</a>
                                            <ul class="dropdown-menu" style="display: none; position: absolute; left: 0; top: 100%;">
                                                <li style="width: 100%;"><a href="{{ route('about.processus') }}">Processus</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.faq') }}">Questions fréquentes</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.comment-commander') }}">COMMENT LE PRESERVER</a></li>
                                                <li style="width: 100%;"><a href="{{ route('about.art-porter-preserver') }}">Lart de porter et préserver votre panama</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li class="menu-actions d-none d-lg-flex align-items-center">
                                            <div class="header-social d-flex align-items-center mr-3 position-relative" id="userMenuContainerInline">
                                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                @guest
                                                <a href="#" id="userMenuToggle" title="Cuenta"><i class="fas fa-user"></i></a>
                                                <div id="userDropdown" style="position:absolute;right:0;top:40px;display:none;min-width:220px;background:#000;border:1px solid #333;border-radius:6px;z-index:9999;">
                                                    <a href="{{ route('login') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Iniciar sesión</a>
                                                    <a href="{{ route('register') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Registrarse</a>
                                                </div>
                                                @else
                                                <a href="#" id="userMenuToggle" title="Cuenta"><i class="fas fa-user"></i></a>
                                                <div id="userDropdown" style="position:absolute;right:0;top:40px;display:none;min-width:240px;background:#000;border:1px solid #333;border-radius:6px;z-index:9999;">
                                                    <a href="{{ route('home') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Perfil</a>
                                                    <a href="{{ route('orders.index') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Mis órdenes</a>
                                                    @if(Auth::user()->role === 'admin')
                                                    <a href="{{ route('admin.orders.index') }}" style="display:block;padding:10px 14px;color:#fff;text-decoration:none;">Dashboard Admin</a>
                                                    @endif
                                                    <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                                                        @csrf
                                                        <button type="submit" style="display:block;width:100%;text-align:left;padding:10px 14px;background:none;border:none;color:#fff;">Cerrar sesión</button>
                                                    </form>
                                                </div>
                                                @endguest
                                            </div>
                                            <div class="card-stor" id="cartToggle" style="cursor:pointer;">
                                                <img src="{{ asset('img/gallery/card.svg') }}" alt="">
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
                                                <div id="cartContent" style="padding:20px;flex:1;overflow-y:auto;"></div>
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
                                        color: #ffffff !important;
                                        display: block;
                                        width: 100%;
                                        box-sizing: border-box;
                                        padding: 12px 18px;
                                        white-space: nowrap;
                                        font-size: 16px;
                                    }

                                    .dropdown-menu li a:hover {
                                        background-color: #333333 !important;
                                        color: #cccccc !important;
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

                                    .mobile-tabbar {
                                        position: fixed;
                                        left: 0;
                                        right: 0;
                                        bottom: 0;
                                        height: 72px;
                                        background: #000000;
                                        border-top: 1px solid #222222;
                                        display: grid;
                                        grid-template-columns: repeat(5, 1fr);
                                        align-items: center;
                                        justify-items: center;
                                        z-index: 10000;
                                        padding-bottom: env(safe-area-inset-bottom);
                                    }

                                    .mobile-tabbar .tab-item {
                                        width: calc(100% - 12px);
                                        height: 56px;
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        justify-content: center;
                                        gap: 6px;
                                        color: #ffffff !important;
                                        text-decoration: none;
                                        -webkit-tap-highlight-color: transparent;
                                        background: transparent;
                                        border: none;
                                        outline: none;
                                        appearance: none;
                                        -webkit-appearance: none;
                                        box-shadow: none;
                                        cursor: pointer;
                                        border-radius: 12px;
                                        transition: transform 0.2s ease, background 0.2s ease;
                                    }

                                    .mobile-tabbar .tab-item i {
                                        font-size: 20px;
                                    }

                                    .mobile-tabbar .tab-item span {
                                        font-size: 12px;
                                    }

                                    .mobile-tabbar .tab-item:active {
                                        transform: scale(0.98);
                                    }

                                    .mobile-tabbar .tab-item.active {
                                        background: #7d716c;
                                        color: #ffffff !important;
                                    }

                                    .mobile-tabbar .tab-item .badge {
                                        position: absolute;
                                        top: 6px;
                                        right: 16px;
                                        background: #dc3545;
                                        color: #fff;
                                        border-radius: 10px;
                                        padding: 0 6px;
                                        font-size: 10px;
                                        line-height: 18px;
                                        min-width: 18px;
                                        text-align: center;
                                    }

                                    .mobile-sheet {
                                        position: fixed;
                                        left: 0;
                                        right: 0;
                                        bottom: 0;
                                        height: 55vh;
                                        background: #000000;
                                        color: #ffffff;
                                        transform: translateY(100%);
                                        transition: transform 0.3s ease;
                                        z-index: 10001;
                                        border-top-left-radius: 12px;
                                        border-top-right-radius: 12px;
                                        padding-bottom: env(safe-area-inset-bottom);
                                    }

                                    .mobile-sheet.open {
                                        transform: translateY(0);
                                    }

                                    .mobile-sheet__content {
                                        padding: 16px 16px 20px;
                                    }

                                    .mobile-sheet__handle {
                                        width: 36px;
                                        height: 4px;
                                        background: #333;
                                        border-radius: 2px;
                                        margin: 6px auto 12px;
                                    }

                                    .mobile-sheet ul {
                                        display: flex;
                                        flex-direction: column;
                                        gap: 12px;
                                    }

                                    .mobile-sheet ul li a {
                                        display: block;
                                        width: 100%;
                                        padding: 14px 16px;
                                        color: #ffffff;
                                        text-decoration: none;
                                        background: #111111;
                                        border: 1px solid #222222;
                                        border-radius: 10px;
                                        transition: background 0.2s ease, border-color 0.2s ease, transform 0.1s ease;
                                    }

                                    .mobile-sheet ul li a:hover {
                                        background: #1a1a1a;
                                        border-color: #333333;
                                    }

                                    .mobile-sheet ul li a:active {
                                        transform: scale(0.98);
                                    }

                                    .mobile-sheet ul li a:focus,
                                    .mobile-sheet ul li a:focus-visible {
                                        outline: 2px solid #7d716c;
                                        outline-offset: 2px;
                                    }

                                    .mobile-sheet ul li a.active {
                                        background: #7d716c;
                                        border-color: #7d716c;
                                        color: #ffffff;
                                        font-weight: 600;
                                    }

                                    .mobile-sheet__overlay {
                                        position: fixed;
                                        left: 0;
                                        right: 0;
                                        top: 0;
                                        bottom: 0;
                                        background: rgba(0, 0, 0, 0.6);
                                        z-index: 10000;
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        transition: opacity 0.25s ease, visibility 0.25s ease;
                                    }

                                    .mobile-sheet__overlay.open {
                                        opacity: 1;
                                        visibility: visible;
                                        pointer-events: auto;
                                    }

                                    body.sheet-opened {
                                        overflow: hidden;
                                    }
                                </style>
                            </nav>
                        </div>

                        <div class="mobile-header-logo d-block d-lg-none w-100 text-center">
                            <a href="{{ route('welcome') }}" style="display:inline-block;">
                                <img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="mobile-tabbar d-lg-none">
        <a href="{{ route('welcome') }}" class="tab-item tab-home {{ request()->routeIs('welcome') ? 'active' : '' }}" aria-label="Accueil">
            <i class="fas fa-home"></i>
            <span>Accueil</span>
        </a>
        <a href="{{ route('shop') }}" class="tab-item tab-shop {{ request()->routeIs('shop') ? 'active' : '' }}" aria-label="Catalogue">
            <i class="fas fa-store"></i>
            <span>Catalogue</span>
        </a>
        <button type="button" class="tab-item tab-hat {{ request()->routeIs('about*') ? 'active' : '' }}" aria-label="Panama Hat">
            <i class="fas fa-hat-cowboy"></i>
            <span>Panama</span>
        </button>
        @guest
        <button type="button" class="tab-item tab-account {{ request()->routeIs('login') || request()->routeIs('register') ? 'active' : '' }}" aria-label="Compte">
            <i class="fas fa-user"></i>
            <span>Compte</span>
        </button>
        @else
        @php($isAdmin = Auth::user()->role === 'admin')
        <button type="button" class="tab-item tab-account {{ request()->routeIs('orders*') || request()->routeIs('home') || request()->routeIs('admin.orders*') ? 'active' : '' }}" aria-label="Compte">
            <i class="fas fa-user-check"></i>
            <span>Compte</span>
        </button>
        @endguest
        <button type="button" class="tab-item tab-cart" aria-label="Panier">
            <i class="fas fa-shopping-bag"></i>
            <span>Panier</span>
            <span class="badge" id="cartCountMobileTab">0</span>
        </button>
    </nav>

    <div id="mobileMenuOverlay" class="mobile-sheet__overlay d-lg-none" aria-hidden="true"></div>
    <div id="mobileMenuSheet" class="mobile-sheet d-lg-none" role="dialog" aria-modal="true" aria-labelledby="mobileMenuTitle" tabindex="-1">
        <div class="mobile-sheet__content">
            <div class="mobile-sheet__handle"></div>
            <div class="d-flex justify-content-between align-items-center mb-2 px-2">
                <strong id="mobileMenuTitle" style="color:#fff;">Panama</strong>
                <button id="mobileMenuClose" aria-label="Fermer le menu"
                    style="background:none;border:none;color:#fff;font-size:24px;line-height:1;min-width:44px;min-height:44px;">&times;</button>
            </div>
            <ul class="list-unstyled m-0 p-0">
                <li><a class="{{ request()->routeIs('about.montecristi') ? 'active' : '' }}" href="{{ route('about.montecristi') }}">Chapeaux Montecristi</a></li>
                <li><a class="{{ request()->routeIs('about.histoire') ? 'active' : '' }}" href="{{ route('about.histoire') }}">Mon histoire</a></li>
                <li><a class="{{ request()->routeIs('about.bandes') ? 'active' : '' }}" href="{{ route('about.bandes') }}">Bandes pour chapeaux</a></li>
                <li><a class="{{ request()->routeIs('about.origine') ? 'active' : '' }}" href="{{ route('about.origine') }}">Origine du Panama Haut</a></li>
                <li><a class="{{ request()->routeIs('about.processus') ? 'active' : '' }}" href="{{ route('about.processus') }}">Service à la clientèle</a></li>
                <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="mobileAccountSheet" class="mobile-sheet d-lg-none" role="dialog" aria-modal="true" aria-labelledby="mobileAccountTitle" tabindex="-1">
        <div class="mobile-sheet__content">
            <div class="mobile-sheet__handle"></div>
            <div class="d-flex justify-content-between align-items-center mb-2 px-2">
                <strong id="mobileAccountTitle" style="color:#fff;">Compte</strong>
                <button id="mobileAccountClose" aria-label="Fermer le compte"
                    style="background:none;border:none;color:#fff;font-size:24px;line-height:1;min-width:44px;min-height:44px;">&times;</button>
            </div>
            <ul class="list-unstyled m-0 p-0">
                @guest
                <li><a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Se connecter</a></li>
                <li><a class="{{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Créer un compte</a></li>
                @else
                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Profil</a></li>
                <li><a class="{{ request()->routeIs('orders*') ? 'active' : '' }}" href="{{ route('orders.index') }}">Mes commandes</a></li>
                @if(Auth::user()->role === 'admin')
                <li><a class="{{ request()->routeIs('admin.orders*') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">Dashboard Admin</a></li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                        @csrf
                        <button type="submit" style="display:block;width:100%;text-align:left;padding:14px 16px;color:#fff;background:#111111;border:1px solid #222222;border-radius:10px;">Se déconnecter</button>
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>


    <main>
        <!--? Hero Area Start-->
        <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile cart offcanvas available globally for mobile -->
                <div id="cartSidebarMobile"
                    style="position:fixed;top:0;right:0;bottom:0;width:100vw;height:100vh;background:#000;color:#fff;z-index:10000;display:flex;flex-direction:column;">
                    <div
                        style="padding:20px;border-bottom:1px solid #222;display:flex;justify-content:space-between;align-items:center;">
                        <h4 class="font-weight-bold" style="color:#ffffff;">Mon Panier</h4>
                        <button id="closeCartMobile"
                            style="background:none;border:none;font-size:24px;color:#ffffff;"
                            class="text-dark">&times;</button>
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
                        <a href="{{ route('welcome') }}"><img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat" style="height:56px;width:auto;"></a>
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
            function openSheet(selector) {
                $(selector).addClass('open');
                $('#mobileMenuOverlay').addClass('open');
                $('body').addClass('sheet-opened');
                setTimeout(function() {
                    $(selector).focus();
                }, 10);
            }

            function closeSheets() {
                $('#mobileMenuSheet, #mobileAccountSheet').removeClass('open');
                $('#mobileMenuOverlay').removeClass('open');
                $('body').removeClass('sheet-opened');
            }
            $('.tab-hat').on('click', function() {
                openSheet('#mobileMenuSheet');
            });
            $('.tab-account').on('click', function() {
                openSheet('#mobileAccountSheet');
            });
            $('#mobileMenuClose, #mobileAccountClose, #mobileMenuOverlay').on('click', function() {
                closeSheets();
            });
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeSheets();
                }
            });
            $(document).on('mousedown', function(e) {
                const openAny = $('#mobileMenuSheet').hasClass('open') || $('#mobileAccountSheet').hasClass('open');
                if (openAny && !$(e.target).closest('#mobileMenuSheet, #mobileAccountSheet, .tab-hat, .tab-account').length) {
                    closeSheets();
                }
            });
            $('.tab-cart').on('click', function() {
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