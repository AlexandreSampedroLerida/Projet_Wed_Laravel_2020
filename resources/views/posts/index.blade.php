{{--
    Variables disponibles:
    $posts ARRAY(OBJ(id, title, content, image, category_id, created_at, updated_at))
--}}

@extends('template.index')

@section('content')
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        @foreach ($posts as $post)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src=" {{ asset('storage/' . $post->image) }}" alt="Image de l'article">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</h3>
                                    <p>{{ date('m', strtotime($post->created_at))}}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-') ]) }}">
                                    <h2>{{ $post->title }}</h2>
                                </a>
                                <p>{!! $post->content !!}</p>
                                <ul class="blog-info-link">
                                    @foreach ($post->tags as $tag)
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $tag->name}}  </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        @include('categories._index')

                        @include('tags._index')
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 