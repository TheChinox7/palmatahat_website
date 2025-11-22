@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Tableau de bord</h2>
    <div class="row g-3">
        <div class="col-md-3">
            <div class="card p-3 h-100">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-white bg-dark rounded p-2"><i class="fas fa-box"></i></div>
                    <div>
                        <div class="h5 m-0">{{ $productCount ?? 0 }}</div>
                        <small>Produits</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 h-100">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-white bg-dark rounded p-2"><i class="fas fa-tags"></i></div>
                    <div>
                        <div class="h5 m-0">{{ $categoryCount ?? 0 }}</div>
                        <small>Catégories</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 h-100">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-white bg-dark rounded p-2"><i class="fas fa-shopping-bag"></i></div>
                    <div>
                        <div class="h5 m-0">{{ $orderCount ?? 0 }}</div>
                        <small>Commandes</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 h-100">
                <div class="d-flex align-items-center">
                    <div class="me-3 text-white bg-dark rounded p-2"><i class="fas fa-users"></i></div>
                    <div>
                        <div class="h5 m-0">{{ $userCount ?? 0 }}</div>
                        <small>Utilisateurs</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-6">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <strong>Métricas</strong>
                </div>
                <div class="row g-2">
                    <div class="col-6"><div class="border rounded p-2"><small>En attente</small><div class="h5 m-0">{{ $pendingCount ?? 0 }}</div></div></div>
                    <div class="col-6"><div class="border rounded p-2"><small>Payées</small><div class="h5 m-0">{{ $paidCount ?? 0 }}</div></div></div>
                    <div class="col-6"><div class="border rounded p-2"><small>Annulées</small><div class="h5 m-0">{{ $cancelledCount ?? 0 }}</div></div></div>
                    <div class="col-6"><div class="border rounded p-2"><small>CA (semaine)</small><div class="h5 m-0">{{ number_format($revenueWeek ?? 0, 2) }}</div></div></div>
                    <div class="col-6"><div class="border rounded p-2"><small>CA (aujourd'hui)</small><div class="h5 m-0">{{ number_format($revenueToday ?? 0, 2) }}</div></div></div>
                    <div class="col-6"><div class="border rounded p-2"><small>Nouveaux utilisateurs (7j)</small><div class="h5 m-0">{{ $newUsersWeek ?? 0 }}</div></div></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card p-3">
                <strong>Volume de ventes (7 jours)</strong>
                <canvas id="ordersChart" height="120"></canvas>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-12">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <strong>Dernières commandes</strong>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-secondary">Voir toutes</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead><tr><th>ID</th><th>Utilisateur</th><th>Statut</th><th>Total</th><th>Date</th><th></th></tr></thead>
                        <tbody>
                        @foreach(($recentOrders ?? []) as $o)
                        <tr>
                            <td>{{ $o->id }}</td>
                            <td>{{ optional($o->user)->name }}</td>
                            <td><span class="badge-status {{ $o->status }}">{{ $o->status }}</span></td>
                            <td>{{ number_format($o->total,2) }}</td>
                            <td>{{ $o->created_at->format('Y-m-d') }}</td>
                            <td class="text-end"><a href="{{ route('admin.orders.show', $o) }}" class="btn btn-sm btn-outline-secondary">Voir</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    const trend = @json($ordersTrend ?? []);
    const labels = trend.map(x => x.date);
    const data = trend.map(x => x.total);
    const ctx = document.getElementById('ordersChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: { labels, datasets: [{ label: 'Ventes', data, borderColor: '#7d716c', backgroundColor: 'rgba(125,113,108,0.2)' }] },
        options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
    });
</script>
@endpush
@endsection