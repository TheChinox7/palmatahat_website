<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\AttributeController as AdminAttributeController;
use App\Http\Controllers\Admin\SettingController;

Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        $productCount = \App\Models\Product::count();
        $categoryCount = \App\Models\Category::count();
        $orderCount = \App\Models\Order::count();
        $userCount = \App\Models\User::count();

        $pendingCount = \App\Models\Order::where('status','pending')->count();
        $paidCount = \App\Models\Order::where('status','paid')->count();
        $cancelledCount = \App\Models\Order::where('status','cancelled')->count();
        $revenueToday = \App\Models\Order::where('status','paid')->whereDate('created_at', now()->toDateString())->sum('total');
        $revenueWeek = \App\Models\Order::where('status','paid')->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('total');
        $newUsersWeek = \App\Models\User::whereBetween('created_at', [now()->subDays(7), now()])->count();

        $ordersTrend = \App\Models\Order::selectRaw('DATE(created_at) as d, SUM(total) as t')
            ->where('status','paid')
            ->whereBetween('created_at', [now()->subDays(6)->startOfDay(), now()->endOfDay()])
            ->groupBy('d')
            ->orderBy('d')
            ->get()
            ->map(fn($row) => ['date' => $row->d, 'total' => (float) $row->t])
            ->toArray();

        $recentOrders = \App\Models\Order::with('user')->orderByDesc('created_at')->limit(5)->get();

        return view('admin.index', compact(
            'productCount','categoryCount','orderCount','userCount',
            'pendingCount','paidCount','cancelledCount','revenueToday','revenueWeek','newUsersWeek','ordersTrend','recentOrders'
        ));
    })->name('dashboard');

    Route::resource('categories', AdminCategoryController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('orders', AdminOrderController::class)->only(['index','show','edit','update','destroy']);
    Route::resource('users', AdminUserController::class);
    Route::resource('clients', ClientsController::class);
    Route::resource('admins', AdminsController::class);
    Route::resource('attributes', AdminAttributeController::class);

    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

    Route::delete('products/{product}/images/{image}', [AdminProductController::class, 'deleteImage'])->name('products.images.destroy');
    Route::post('products/{product}/images', [AdminProductController::class, 'updateImages'])->name('products.images.update');
});