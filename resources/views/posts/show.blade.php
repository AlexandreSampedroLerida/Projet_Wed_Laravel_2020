{{--
    Variables disponibles:
        $post $posts ARRAY(OBJ(id, title, content, image, category_id, created_at, updated_at))
--}}

@extends('template.index')

@section('content')
<section class="blog_area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{asset('storage/' . $post->image) }}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2>{{ $post->title }}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            @foreach ($post->tags as $tag)
                                <li><a href="#"><i class="fa fa-user"></i> {{ $tag->name}}  </a></li>
                            @endforeach
                        </ul>
                        <p class="excert">
                        {!! $post->content !!}
                        </p>
                        <p>
                        
                        </p>
                       
                     </div>
                  </div>

                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="{{asset('storage/' . $post->author->avatar) }}" alt="">
                        <div class="media-body">
                           <a href="#">
                              <h4>{{ $post->author->firstname }} {{ $post->author->lastname }}</h4>
                           </a>
                           <p>{{ $post->author->biography }}</p>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
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