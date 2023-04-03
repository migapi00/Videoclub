<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;

Route::get('/', [HomeController::class, 'getHome'])->name('home');



Route::prefix('catalog')->group(function () {
    Route::match(['get','post'],'/', [CatalogController::class, 'getIndex'])->name('catalog.index');
    Route::get('/show/{id}', [CatalogController::class, 'getShow'])->name('catalog.show');
    Route::middleware('auth')->get('/edit/{id}', [CatalogController::class, 'getEdit'])->name('catalog.edit');
});
// Route::get('catalog', [CatalogController::class, 'getIndex']) ->name('catalog.index');
// Route::get('catalog/show/{id}', [CatalogController::class, 'getShow']);
// Route::get('posts/create', [CatalogController::class, 'getCreate']);

Route::middleware('auth')->post('/posts/save', [MoviesController::class, 'hola'])->name('posts.save');

Route::resource('posts', MoviesController::class)->except(['show']);

Route::get('customer', [CatalogController::class, 'getShow']);


// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });



// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
