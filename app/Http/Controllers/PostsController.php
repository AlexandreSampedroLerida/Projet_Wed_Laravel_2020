<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        // Chercher des infos dans la db
        $posts = Post::orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        // Charger une vue en lui envoyant les posts
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        // Chercher les données du post
        // $post = Post::find($post);

        // Charger une vue
        //return view('posts.show', ['post' => $post, 'titre' => $titre]);
        return view('posts.show', compact('post'));
    }
}
