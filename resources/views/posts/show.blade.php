{{--
    Variables disponibles:
        $post INT
        $titre STRING
--}}

@extends('template.index')

@section('content')
    <div>
        <a href="{{ route('posts.index') }}">Retour à la liste des posts</a>
    </div>
    <h2>Détail du post n°{{ $post }}: {{ $titre }}</h2>
@endsection