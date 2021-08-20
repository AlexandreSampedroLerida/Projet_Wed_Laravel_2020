<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // Chercher des infos dans la db
        // Charger une vue
        return view('posts.index');
    }
}
