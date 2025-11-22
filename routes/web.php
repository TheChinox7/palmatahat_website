<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController as UserOrderController;
use Illuminate\Support\Facades\Auth;
// Welcome routes
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
//ruta shop
Route::get('/shop', [WelcomeController::class, 'shop'])->name('shop');
Route::get('/shop/list', [WelcomeController::class, 'shopList'])->name('shop.list');
Route::get('/product/{slug}', [WelcomeController::class, 'productShow'])->name('product.show');
//ruta contact
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
//ruta about
Route::get('/about', [WelcomeController::class, 'about'])->name('about');

// Rutas para los submenús de "Panama Hat"
Route::get('/montecristi', [WelcomeController::class, 'montecristi'])->name('about.montecristi');
Route::get('/histoire', [WelcomeController::class, 'histoire'])->name('about.histoire');
Route::get('/bandes', [WelcomeController::class, 'bandes'])->name('about.bandes');
// Rutas para los submenús de "Service à la clientèle"
Route::get('/processus', [WelcomeController::class, 'processus'])->name('about.processus');
Route::get('/faq', [WelcomeController::class, 'faq'])->name('about.faq');

// Routes for "Origine" section
Route::get('/origine', [WelcomeController::class, 'origine'])->name('about.origine');

// Routes for "How to Order" section
Route::get('/comment-commander', [WelcomeController::class, 'commentCommander'])->name('about.comment-commander');

// Routes for "Art of Wearing and Preserving" section
Route::get('/art-porter-preserver', [WelcomeController::class, 'artPorterPreserver'])->name('about.art-porter-preserver');



// Routes for "Palmatahat History" section
Route::get('/histoire-palmatahat', [WelcomeController::class, 'histoirePalmatahat'])->name('about.histoire-palmatahat');

// Routes for "Hat Bands" section
Route::get('/bandes-chapeaux', [WelcomeController::class, 'bandesChapeaux'])->name('about.bandes-chapeaux');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Carrito
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Checkout
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

// Órdenes del usuario
Route::middleware('auth')->group(function () {
    Route::get('/orders', [UserOrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [UserOrderController::class, 'show'])->name('orders.show');
});

// Panel de administrador (archivo separado)
require __DIR__.'/admin.php';
