<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
// Welcome routes
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
//ruta shop
Route::get('/shop', [WelcomeController::class, 'shop'])->name('shop');
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
