@extends('template.index')

@section('content')
<h2>Liste des posts</h2>
<ul>
    <li><a href="{{ route('posts.show', ['post' =>67 , 'titre' => 'Titre 1']) }}">Lorem, ipsum dolor.</a></li>
    <li><a href="{{ route('posts.show', ['post' =>637 , 'titre' => 'Titre 2']) }}">Soluta, sunt ipsum.</a></li>
    <li><a href="{{ route('posts.show', ['post' =>6147 , 'titre' => 'Titre 3']) }}">A, commodi dolores?</a></li>
</ul>
@endsection 