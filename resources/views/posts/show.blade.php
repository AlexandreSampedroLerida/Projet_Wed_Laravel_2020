{{--
    Variables disponibles:
        $post $posts ARRAY(OBJ(id, title, content, image, category_id, created_at, updated_at))
--}}

@extends('template.index')

@section('content')
    <div>
        <a href="{{ route('posts.index') }}">Retour à la liste des posts</a>
    </div>
    <h2>{{ $post->title }}</h2>
    <div>
        Publication date: {{ $post->created_at }}
    </div>
    <div>
        {{ $post->content }}
    </div>
@endsection