@extends('layouts.frontend')

@section('title')
    Ecovendy | Home
@endsection

@section('url-whoweare')
    {{ url('/') }}
@endsection

@section('url-whatwedo')
    {{ url('/') }}
@endsection

@section('url-blog')
    {{ url('/') }}
@endsection

@section('blog-active')
    active
@endsection

@section('content')
    <!--=========================Inner Bnner End=====================-->

    <section id="inner_banner" style="background: url({{ asset('frontend_assets/images/background/4.jpg') }});    
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
        <div class="container">
            <div class="section_title inner_head pt-50 pb-20 text-center">
                <h2>{{ $blog->title }}</h2>
                <p><a href="{{ url('/') }}">home</a> <span>/</span> {{ $blog->title }}</p>
            </div>
        </div>
    </section>

    <!--=========================Inner Bnner End=====================-->
    <section class="blog-single-post blog-section">
        <div class="container p-md-0">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <div class="post-area">
                        <article class="default-blog-news">
                            <figure class="img-holder">
                                <img src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" class="img-fluid w-100" alt="blog">
                            </figure>
                            <div class="lower-content">
                                <div class="date">{{ $blog->created_at->format('M d, y') }}</div>
                                <div class="post-meta">by {{ $blog->written_by }}</div>
                                <h4>{{ $blog->title }}</h4>
                                <h5>{{ $blog->sub_title }}</h5>
                            </div>
                        </article>
                        <div class="content-box">
                            <div class="text">
                                <p>{{ $blog->description_one }}</p>
                                <img src="{{ asset('uploads/blogs') }}/{{ $blog->image_one }}" class="img-fluid w-100" alt="">
                                <p>{{ $blog->description_two }}</p>
                                <img src="{{ asset('uploads/blogs') }}/{{ $blog->image_two }}" class="img-fluid w-100" alt="">
                                <p>{{ $blog->description_three }}</p>
                                <img src="{{ asset('uploads/blogs') }}/{{ $blog->image_three }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="blog-sidebar sec-padd">
                        <div class="popular_news">
                            <div class="section-title style-2">
                                <h4>recent post</h4>
                            </div>
                            <div class="popular-post">
                                @forelse (blogs()->take(3) as $item)
                                <div class="item">
                                    <div class="post-thumb"><a href="#"><img src="{{ asset('uploads/blogs') }}/{{ $item->image }}" class="img-fluid w-100" alt="blog" style="width: 50px !important;"></a></div>
                                    <a href="{{ route('frontend.blogDetails', $item->id) }}">
                                        <h4>{{ $item->title }}</h4>
                                    </a>
                                    <div class="post-info"><i class="fa fa-calendar"></i>{{ $item->created_at->format('d M, y') }}</div>
                                </div>
                                @empty
                                    <p>Nothing to show here</p>
                                @endforelse
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================Blog Page End==============================-->
@endsection