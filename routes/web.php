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

// Route de base
Route::get('/', function () {
    return view('template.index');
})->name('home');

// Routes des posts
    use App\Http\Controllers\PostsController;

    // Liste des posts
    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

    // Détail d'un post
    Route::get('/posts/{post}/{titre}.html', [PostsController::class, 'show'])->name('posts.show');

// Route admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
