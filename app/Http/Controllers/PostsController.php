<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        // Chercher des infos dans la db
        // Charger une vue
        return view('posts.index');
    }

    public function show(int $post, string $titre) {
        // Chercher des infos dans la db
        // Charger une vue
        //return view('posts.show', ['post' => $post, 'titre' => $titre]);
        return view('posts.show', compact('post', 'titre'));
    }
}
