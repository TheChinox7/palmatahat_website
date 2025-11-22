<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PalmataHat | Admin</title>
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('img/palma/favicon.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" integrity="sha512-dYmQKXnPj0O0bH1vTQFf1H4JHcHh6U4lodz1X3bF3BqQvP2gY0sVZrWvHfN3xKQxA0CwOe0jFQp9YxwO5G0x1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --brand:#7d716c; --bg:#000; --text:#fff; }
        html, body { height:100%; }
        body { min-height:100vh; display:flex; flex-direction:column; background:#f5f5f5; font-family:'Inter', system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; }
        .admin-header { background:var(--bg); color:var(--text); }
        .admin-header .brand { display:flex; align-items:center; gap:10px; }
        .admin-header .brand img { height:40px; width:auto; }
        .admin-header a { color:#fff !important; text-decoration:none; padding:8px 12px; }
        .admin-header a:hover { color:#ccc !important; }
        .admin-layout { flex:1 0 auto; display:flex; min-height:0; }
        .admin-sidebar { width:260px; background:#111; color:#fff; border-right:1px solid #222; }
        .admin-sidebar .menu { list-style:none; margin:0; padding:12px; }
        .admin-sidebar .menu li a { display:flex; align-items:center; gap:10px; color:#fff; padding:10px 12px; border-radius:8px; margin-bottom:8px; text-decoration:none; }
        .admin-sidebar .menu li a:hover, .admin-sidebar .menu li a.active { background:var(--brand); text-decoration:none; }
        .admin-content { flex:1; padding:24px; }
        .card-admin { border:1px solid #e5e5e5; border-radius:12px; background:#fff; padding:16px; }
        .stat { display:flex; align-items:center; gap:10px; }
        .stat .icon { width:40px; height:40px; border-radius:8px; background:#111; color:#fff; display:flex; align-items:center; justify-content:center; }
        footer { background:#000; color:#fff; padding:16px; }
        @media (max-width: 992px) { .admin-sidebar { position:fixed; left:0; top:56px; bottom:0; transform:translateX(-100%); transition:transform .25s; z-index:1000; }
            .admin-sidebar.open { transform:translateX(0); } }

        .toolbar { display:flex; gap:12px; flex-wrap:wrap; align-items:center; margin-bottom:16px; }
        .toolbar .search { max-width:320px; flex:1; }
        .btn-brand { background:var(--brand); color:#fff; border:none; }
        .btn-brand:hover { background:#6b605b; color:#fff; }
        .table-admin { width:100%; }
        .table-admin thead th { font-weight:600; color:#000; }
        .table-admin tbody tr { background:#fff; }
        .table-admin tbody td { padding:12px; }
        .badge-status { display:inline-block; padding:4px 8px; border-radius:10px; font-size:12px; }
        .badge-status.pending { background:#fff3cd; color:#8a6d3b; }
        .badge-status.paid { background:#d4edda; color:#155724; }
        .badge-status.cancelled { background:#f8d7da; color:#721c24; }
        .card { border:1px solid #e5e5e5; border-radius:12px; background:#fff; }
        .table-modern thead th { background:#f8f9fa; }
        .table-modern tbody tr { border-bottom:1px dashed #e9ecef; }
    </style>
</head>
<body>
    <header class="admin-header py-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand">
                <a href="{{ route('welcome') }}"><img src="{{ asset('img/palma/logopalma.png') }}" alt="PalmataHat"></a>
                <strong>Panel Administrateur</strong>
            </div>
            <nav class="d-flex align-items-center">
                <a href="{{ route('welcome') }}">Voir site</a>
                @auth
                <form method="POST" action="{{ route('logout') }}" class="ml-2">
                    @csrf
                    <button type="submit" class="btn btn-sm" style="background:var(--brand); color:#fff; border:none;">Déconnexion</button>
                </form>
                @endauth
            </nav>
        </div>
    </header>

    <div class="admin-layout">
        <aside class="admin-sidebar" id="adminSidebar">
            <ul class="menu">
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a></li>
                <li><a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}"><i class="fas fa-box"></i><span>Produits</span></a></li>
                <li><a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories*') ? 'active' : '' }}"><i class="fas fa-tags"></i><span>Catégories</span></a></li>
                <li><a href="{{ route('admin.orders.index') }}" class="{{ request()->routeIs('admin.orders*') ? 'active' : '' }}"><i class="fas fa-shopping-bag"></i><span>Commandes</span></a></li>
                <li><a href="{{ route('admin.clients.index') }}" class="{{ request()->routeIs('admin.clients*') ? 'active' : '' }}"><i class="fas fa-user"></i><span>Clients</span></a></li>
                <li><a href="{{ route('admin.admins.index') }}" class="{{ request()->routeIs('admin.admins*') ? 'active' : '' }}"><i class="fas fa-user-shield"></i><span>Administrateurs</span></a></li>
                <li><a href="{{ route('admin.attributes.index') }}" class="{{ request()->routeIs('admin.attributes*') ? 'active' : '' }}"><i class="fas fa-sliders-h"></i><span>Atributos</span></a></li>
                <li><a href="{{ route('admin.settings.edit') }}" class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}"><i class="fas fa-cog"></i><span>Configuración</span></a></li>
            </ul>
        </aside>
        <main class="admin-content">
            @yield('content')
        </main>
    </div>

    <footer class="text-center mt-auto">
        <small>&copy; {{ date('Y') }} PalmataHat - Admin</small>
    </footer>
    <script>
        (function(){
            const sidebar = document.getElementById('adminSidebar');
            const mql = window.matchMedia('(max-width: 992px)');
            function sync(){ if(mql.matches){ sidebar.classList.remove('open'); } else { sidebar.classList.add('open'); } }
            mql.addEventListener('change', sync); sync();
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6aY8TnV+zq9zchhK7V9QYlYtG7xYv0qkM1oZkP1u5FZrGQF0Qk6Q4lJv5F3l6x9x" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>