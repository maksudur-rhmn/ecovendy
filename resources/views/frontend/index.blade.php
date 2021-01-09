@extends('layouts.frontend')

@section('title')
    Ecovendy | Home
@endsection

@section('home-active')
    active
@endsection

@section('content')
    


    <!--=========================Banner Section Start====================-->

    <section id="banner_section">
        <div class="">
            <div class="banner_img" style="background:url({{ asset('uploads/banners') }}/{{ banner()->banner_img }})">
                <div class="container">
                    <div class="banner_content text-left">
                        <h1>{{ banner()->first_word }}<span> {{ banner()->span_one }} <span class="color_green">{{ banner()->span_green }}</span>{{ banner()->span_two }}</span></h1>
                        <h3>{{ banner()->sub_header }}</h3>
                        <p>{{ banner()->description }}</p>
                        <div class="banner_button">
                            <button class="btn wow fadeInUp animated animated animated">
                                <a class="text-white" href="{{ route('frontend.whoweare') }}">{{ banner()->btn_one }}</a>
                            </button>
                            <button class="btn active wow fadeInUp animated animated animated" data-wow-delay=".4s">
                                <a class="color_green" href="{{ route('frontend.contact') }}">{{ banner()->btn_two }}</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========================Banner Section End========================-->


    <!--============================About Section Start========================-->

    <section id="about_section">
        <div class="container p-md-0">
            <div class="section_title text-center">
                <h2>{{ whoweare()->header }}</h2>
                <p>{{ whoweare()->sub_header }}</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                    <div class="about_img text-center mt-50">
                        <img src="{{ asset('uploads/whoweare') }}/{{ whoweare()->image }}" class="img-fluid w-100" alt="not-found">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight animated animated animated" data-wow-delay=".5s">
                    <div class="about_text text-left mt-50">
                        <div class="section_title">
                            <h2>{{ whoweare()->title }}</h2>
                            <p>{{ whoweare()->description_one }}</p>
                            <p>
                                {{ whoweare()->description_two }}
                            </p>
                        </div>
                        <button class="btn">
                            <a href="{{ route('frontend.whoweare') }}" class="text-white">Read more</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="why_choose wow fadeInUp animated animated animated">
                <div class="row justify-content-center">
                    @php
                        $i = 1;
                    @endphp
                  @forelse (whowearebottom()->take(3) as $item)
                  <div class="col-lg-4 col-sm-6 wow fadeInUp animated animated animated" data-wow-delay="
                    @if($i == 1)
                    .2s
                    @elseif($i == 2)
                    .5s
                    @elseif($i == 3)
                    .6s
                    @endif
                  ">
                    <div class="item mt-45">
                        <div class="icon">
                           <img src="{{ asset('uploads/whowearebottom') }}/{{ $item->image }}" alt="notfound">
                        </div>
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                    @php
                        $i++;
                    @endphp
                  @empty
                      <p>No data available</p>
                  @endforelse
                </div>
            </div>
        </div>
    </section>

    <!--=========================About Section End============================-->

    <!--=======================Services Section Start=========================-->

    <section id="services_section" class="">
        <div class="container p-md-0">
            <div class="section_title">
                <h2>what we do</h2>
            </div>
            <div class="services">
                <div class="row justify-content-center">
            
                    @php
                        $j = 1;
                    @endphp
                    @forelse (whatwedo() as $item)
                    <div class="col-md-6 col-sm-6 col-12 col-lg-3 wow fadeInUp animated animated animated" 
                    @if($j == 2)
                    data-wow-delay=".4s"
                    @elseif($j == 3)
                    data-wow-delay=".6s"
                    @elseif($j == 4)
                    data-wow-delay=".7s"
                    @endif
                    >
                        <div class="services_item {{ ($j == 2) ? 'active' : '' }} mt-50 text-center">
                            <div class="icon">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                            <h4>{{ $item->title }}</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                    @php
                        $j++;
                    @endphp
                    @empty
                        <p>No data available</p>
                    @endforelse
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="facts">
            <div class="container">
                <div class="section_title">
                    <h2>Some Interesting Facts</h2>
                </div>
                <div class="counter">
                    <div class="row justify-content-center">
                       @php
                           $k = 1;
                       @endphp
                        @forelse (interesting()->take(4) as $item)
                        <div class="col-sm-6 col-lg-3 wow fadeInUp animated animated animated" 
                            @if($k == 2)
                            data-wow-delay=".4s"
                            @elseif($k == 3)
                            data-wow-delay=".5s"
                            @elseif($k == 4)
                            data-wow-delay=".6s"
                            @endif
                        >
                            <div class="counter_text text-center mt-50">
                                <i class="{{ $item->icon }}"></i>
                                <h2 class="count">{{ intVal($item->title) }}</h2><span>+</span>
                                <h4>{{ $item->description }}</h4>
                            </div>
                        </div>
                        @php
                            $k++;
                        @endphp
                        @empty
                            <p>No data available</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===========================Services Section End=========================-->

    <!--===========================Work Section Start=========================-->

    <section id="work_section">
        <div class="container p-md-0">
            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="work_img mt-45 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                        <img src="{{ asset('uploads/howdoesitwork') }}/{{ howdoesitwork()->image }}" class="img-fluid w-100" alt="notfound">
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <div class="work_text mt-45 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                        <div class="section_title">
                            <h2>{{ howdoesitwork()->header }}</h2>
                        </div>
                        <p>
                            {{ howdoesitwork()->description_one }}
                        </p>
                        <ul class="mt-20">
                            <li><i class="fas fa-plus"></i>{{ howdoesitwork()->bullet_one }}</li>
                            <li><i class="fas fa-plus"></i>{{ howdoesitwork()->bullet_two }}</li>
                            <li><i class="fas fa-plus"></i>{{ howdoesitwork()->bullet_three }}</li>
                            <li><i class="fas fa-plus"></i>{{ howdoesitwork()->bullet_four }}</li>
                        </ul>
                        <button class="btn">
                            <a href="{{ route('frontend.howdoesitwork') }}" class="text-white">Learn more</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===========================Work Section End===========================-->

    <!--=====================Video Section End========================-->

    <section id="video_section">
        <div class="container">
            <div class="section_title text-center">
                <h2>{{ video()->header }}</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                    <div class="video mt-40">
                        <iframe src="{{ video()->video }}" width="100%" height="310" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen autoplay></iframe>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                    <div class="video_text mt-40">
                        <h3>{{ video()->title }}</h3>
                        <p>{{ video()->description_one }}</p>
                        <p>
                            {{ video()->description_two }}
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-check-double"></i>{{ video()->bullet_one }}
                            </li>
                            <li>
                                <i class="fas fa-check-double"></i>{{ video()->bullet_two }}
                            </li>
                            <li>
                                <i class="fas fa-check-double"></i>{{ video()->bullet_three }}
                            </li>
                            <li>
                                <i class="fas fa-check-double"></i>{{ video()->bullet_four }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================Video Section End========================-->


    <!--===========================Help Section Start=========================-->

    <section id="help_section">
        <div class="container p-md-0">
            <div class="section_title">
            <h2>{{ whatcanyoudo()->header }}</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work_text help_text mt-45 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                        <h3>
                            {{ whatcanyoudo()->title }}
                        </h3>
                        <p>
                            {{ whatcanyoudo()->description_one }}
                        </p>
                        <p>
                            {{ whatcanyoudo()->description_two }}
                        </p>
                        <ul class="mt-15">
                            <li><i class="fas fa-check-double"></i>{{ whatcanyoudo()->bullet_one }}</li>
                            <li><i class="fas fa-check-double"></i>{{ whatcanyoudo()->bullet_two }}</li>
                            <li><i class="fas fa-check-double"></i>{{ whatcanyoudo()->bullet_three }}</li>
                        </ul>
                        <button class="btn">
                            <a href="{{ route('frontend.whatcanyoudo') }}" class="text-white">learn more</a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="help_img mt-45 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                        <img src="{{ asset('uploads/whatcanyoudo') }}/{{ whatcanyoudo()->image }}" class="img-fluid w-100" alt="not-found">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===========================Help Section End===========================-->

    <!--=================Quote Section Start=====================-->

    <section id="quote_section">
        <div class="container p-md-0">
            <div class="section_title text-center">
                <h2>request a quote</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                    <div class="quote_form mt-45">
                        <form action="{{ route('frontend.contactstore') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">full name <span>*</span></label>
                                    <div class="full_name">
                                        <input name="name" required type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">email address <span>*</span></label>
                                    <div class="email">
                                        <input required name="email" type="email" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">phone number</label>
                                    <div class="phone_number">
                                        <input required name="phone" type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">company name</label>
                                    <div class="company">
                                        <input required name="company" type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <label for="">describe in a few sentence <span>:</span></label>
                                    <div class="textarea">
                                        <textarea required name="message" placeholder="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn" type="submit">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================Quoto Section End========================-->


    <!--=================Blog Section Start=====================-->

    <section id="blog_section" class="blog-section">
        <div class="container p-md-0">
            <div class="section_title center">
                <h2>latest news</h2>
            </div>
            <div class="row">
                @forelse (blogs() as $item)
                <article class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated" data-wow-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder">
                            <a href="{{ route('frontend.blogDetails', $item->id) }}"><img src="{{ asset('uploads/blogs') }}/{{ $item->image }}" class="img-fluid w-100" alt="News" style="height: 165px !important"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{ route('frontend.blogDetails', $item->id) }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <div class="date">{{ $item->created_at->format('M d, y') }}</div>
                            <div class="post-meta">by {{ $item->written_by }}</div>
                            <a href="{{ route('frontend.blogDetails', $item->id) }}">
                                <h4>{{ $item->title }}</h4>
                            </a>
                            <div class="text">
                                <p>{{ $item->sub_title }}</p>
                            </div>
                        </div>
                    </div>
                </article>
                @empty
                    <p>No data available</p>
                @endforelse
            </div>
        </div>
    </section>

    <!--=================Blog Section End==========================-->

    <!--=================Clients Section Section Start================-->

    <section id="clients_section" class="wow fadeInUp animated animated animated">
        <div class="container">
            <div class="section_title text-center">
                <h2>Our Partners</h2>
            </div>
            <div class="row clients_slider">
                @forelse (partners() as $item)
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="{{ asset('uploads/partners') }}/{{ $item->image }}" class="img-fluid" alt="not-found">
                    </div>
                </div>
                @empty
                    <p>No partners yet.</p>
                @endforelse
               
            </div>
        </div>
    </section>

    <!--=================Clients Section End======================-->
@endsection