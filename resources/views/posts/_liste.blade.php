@foreach ($posts as $post)
    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src=" {{ asset('storage/' . $post->image) }}" alt="Image de l'article">
                <a href="#" class="blog_item_date">
                    <h3>{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</h3>                                    
                    <p>{{ Str::limit(\Carbon\Carbon::parse($post->created_at)->format('F'), 3, '') }}</p>
                </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-') ]) }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <p>{!! Str::words($post->content, 50) !!}</p>
            <ul class="blog-info-link">
                @foreach ($post->tags as $tag)
                    <li><a href="#"><i class="fa fa-user"></i> {{ $tag->name}}  </a></li>
                 @endforeach
            </ul>
        </div>
    </article>
@endforeach
