<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Routes des posts
    use App\Http\Controllers\PostsController;

    // Route de base (Accueil)
    Route::get('/', [PostsController::class, 'index'])->name('posts.index');

    // Liste des posts
    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

    // Détail d'un post
    Route::get('/posts/{post}/{slug}.html', [PostsController::class, 'show'])
        ->where(['post' => '[1-9][0-9]*', 'slug' => '[a-z0-9][a-z0-9\-]*'])
        ->name('posts.show');

// Route admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
