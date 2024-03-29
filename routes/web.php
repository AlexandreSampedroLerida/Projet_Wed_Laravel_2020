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
// VIEW COMPOSERS

    View::composer('categories._index', function($view){
        $view->with('categories', App\Models\Category::all());
    });

    View::composer('tags._index', function($view){
        $view->with('tags', App\Models\Tag::all());
    });

// Routes des posts
    use App\Http\Controllers\PostsController;

    // Route de base (Accueil)
    Route::get('/', [PostsController::class, 'index'])->name('posts.index');

    // Liste des posts
    // Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

    // Détail d'un post
    Route::get('/{post}/{slug}', [PostsController::class, 'show'])
        ->where(['post' => '[1-9][0-9]*', 'slug' => '[a-z0-9][a-z0-9\-]*'])
        ->name('posts.show');

// Route Contact us
    use App\Http\Controllers\ContactsController;

    Route::get('/contact', [ContactsController::class, 'index'])->name('contact.index');

// Route admin
    Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// ROUTES AJAX (Older posts)

    Route::get('/ajax/more-posts', [PostsController::class, 'ajaxMore'])->name('posts.ajax.more');