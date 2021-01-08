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
            <div class="banner_img" style="background:url({{ asset('uploads/banners') }}/{{ $banner->banner_img }})">
                <div class="container">
                    <div class="banner_content text-left">
                        <h1>{{ $banner->first_word }}<span> {{ $banner->span_one }} <span class="color_green">{{ $banner->span_green }}</span>{{ $banner->span_two }}</span></h1>
                        <h3>{{ $banner->sub_header }}</h3>
                        <p>{{ $banner->description }}</p>
                        <div class="banner_button">
                            <button class="btn wow fadeInUp animated animated animated">
                                <a class="text-white" href="{{ route('frontend.whoweare') }}">{{ $banner->btn_one }}</a>
                            </button>
                            <button class="btn active wow fadeInUp animated animated animated" data-wow-delay=".4s">
                                <a class="color_green" href="{{ route('frontend.contact') }}">{{ $banner->btn_two }}</a>
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
                <h2>who we are</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque suscipit repellendus explicabo.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                    <div class="about_img text-center mt-50">
                        <img src="images/about/about.jpg" class="img-fluid w-100" alt="not-found">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight animated animated animated" data-wow-delay=".5s">
                    <div class="about_text text-left mt-50">
                        <div class="section_title">
                            <h2>Together we can make a difference</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis ab animi. Fuga dolorem quaerat omnis sunt quae optio quam ad, ipsa, dolores debitis, maxime aliquid consequatur facere quibusdam ullam repellendus dolor atque alias.</p>
                            <p>
                                Eos provident dolorum ducimus, quam ab, ipsa nobis officia facere quia atque quibusdam, nihil vel, reprehenderit non perferendis quasi fugit magni dolorem fugiat officiis id doloribus sit.
                            </p>
                        </div>
                        <button class="btn">
                            contact us
                        </button>
                    </div>
                </div>
            </div>
            <div class="why_choose wow fadeInUp animated animated animated">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp animated animated animated" data-wow-delay=".2s">
                        <div class="item mt-45">
                            <div class="icon">
                                <i class="fas fa-hand-rock"></i>
                            </div>
                            <h4>Supporting Good Cause</h4>
                            <p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp animated animated animated" data-wow-delay=".5s">
                        <div class="item mt-45">
                            <div class="icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>Most Trusted One</h4>
                            <p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp animated animated animated" data-wow-delay=".6s">
                        <div class="item mt-45">
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <h4>Supporting Good Cause</h4>
                            <p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.</p>
                        </div>
                    </div>
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
                    <div class="col-md-6 col-sm-6 col-12 col-lg-3 wow fadeInUp animated animated animated">
                        <div class="services_item mt-50 text-center">
                            <div class="icon">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <h4>Recycling</h4>
                            <p>Praising pain was born &amp; I will give you a complete ac of the all systems, expound the actual great.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 col-lg-3 wow fadeInUp animated animated animated" data-wow-delay=".4s">
                        <div class="services_item active mt-50 text-center">
                            <div class="icon">
                                <i class="fas fa-solar-panel"></i>
                            </div>
                            <h4>Eco System</h4>
                            <p>Praising pain was born &amp; I will give you a complete ac of the all systems, expound the actual great.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 col-lg-3 wow fadeInUp animated animated animated" data-wow-delay=".5s">
                        <div class="services_item mt-50 text-center">
                            <div class="icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <h4>save earth</h4>
                            <p>Praising pain was born &amp; I will give you a complete ac of the all systems, expound the actual great.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 col-lg-3 wow fadeInUp animated animated animated" data-wow-delay=".6s">
                        <div class="services_item mt-50 text-center">
                            <div class="icon">
                                <i class="fas fa-frog"></i>
                            </div>
                            <h4>save animals</h4>
                            <p>Praising pain was born &amp; I will give you a complete ac of the all systems, expound the actual great.</p>
                        </div>
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
                        <div class="col-sm-6 col-lg-3 wow fadeInUp animated animated animated">
                            <div class="counter_text text-center mt-50">
                                <i class="fas fa-heartbeat"></i>
                                <h2 class="count">26</h2><span>+</span>
                                <h4>Year Of Experience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 wow fadeInUp animated animated animated" data-wow-delay=".4s">
                            <div class="counter_text text-center mt-50">
                                <i class="fas fa-heartbeat"></i>
                                <h2 class="count">48</h2><span></span>
                                <h4>Year Of Experience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 wow fadeInUp animated animated animated" data-wow-delay=".5s">
                            <div class="counter_text text-center mt-50">
                                <i class="fas fa-user-nurse"></i>
                                <h2 class="count">103</h2>
                                <h4>Volunteers Involved</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 wow fadeInUp animated animated animated" data-wow-delay=".6s">
                            <div class="counter_text text-center mt-50">
                                <i class="fas fa-frog"></i>
                                <h2 class="count">360</h2><span>%</span>
                                <h4>Animals Saved</h4>
                            </div>
                        </div>
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
                        <img src="images/work/world-map-made-with-grass.png" class="img-fluid w-100" alt="notfound">
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-1">
                    <div class="work_text mt-45 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                        <div class="section_title">
                            <h2>how does it work</h2>
                        </div>
                        <p>
                            Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.
                        </p>
                        <ul class="mt-20">
                            <li><i class="fas fa-plus"></i>Help protect the environment and sustain its natural resources</li>
                            <li><i class="fas fa-plus"></i>Ecologically responsible decisions and lifestyles</li>
                            <li><i class="fas fa-plus"></i>Help protect the environment and sustain its natural resources</li>
                            <li><i class="fas fa-plus"></i>Ecologically responsible decisions and lifestyles</li>
                        </ul>
                        <button class="btn">
                            learn more
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
                <h2>Video Presentation</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                    <div class="video mt-40">
                        <iframe src="https://player.vimeo.com/video/9519939" width="100%" height="310" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen autoplay></iframe>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                    <div class="video_text mt-40">
                        <h3>Proper demonstration of how our vending machine works!</h3>
                        <p>Load the vending machine. Prior to operation, a vending machine must be stocked with the products it will dispense to consumers.. </p>
                        <p>
                            Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness, but because those who that are extremely painful.</p>
                        <ul>
                            <li>
                                <i class="fas fa-check-double"></i> Sponsor meals for 50 children for 1 full year.
                            </li>
                            <li>
                                <i class="fas fa-check-double"></i>Sponsor mid-day meals for one month.
                            </li>
                            <li>
                                <i class="fas fa-check-double"></i>You can donate clothes, blankets and ect...
                            </li>
                            <li>
                                <i class="fas fa-check-double"></i>You can donate food material like rice, veggies.
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
                <h2>what can you do to help</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work_text help_text mt-45 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                        <h3>
                            Donec ornare, est sed tincidunt placerat.
                        </h3>
                        <p>
                            Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, viverra nisi at nisl imperdiet auctor sem mi suscipit mi.
                        </p>
                        <p>
                            Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, viverra nisi at nisl imperdiet auctor sem mi suscipit mi.
                        </p>
                        <ul class="mt-15">
                            <li><i class="fas fa-check-double"></i>Help protect the environment and sustain its natural resources</li>
                            <li><i class="fas fa-check-double"></i>Ecologically responsible decisions and lifestyles</li>
                            <li><i class="fas fa-check-double"></i>Help protect the environment and sustain its natural resources</li>
                        </ul>
                        <button class="btn">
                            learn more
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="help_img mt-45 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                        <img src="images/work/close-up-picture-hand-watering-sapling-plant.png" class="img-fluid w-100" alt="not-found">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, amet architecto.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 wow fadeInRight animated animated animated" data-wow-delay=".6s">
                    <div class="quote_form mt-45">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">full name <span>*</span></label>
                                    <div class="full_name">
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">email address <span>*</span></label>
                                    <div class="email">
                                        <input type="email" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">phone number</label>
                                    <div class="phone_number">
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">company name</label>
                                    <div class="company">
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <label for="">describe in a few sentence <span>:</span></label>
                                    <div class="textarea">
                                        <textarea name="" placeholder="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn">send</button>
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
                <article class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated" data-wow-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder">
                            <a href="blog.html"><img src="images/project/1.jpg" class="img-fluid w-100" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <div class="date">March 02, 2017</div>
                            <div class="post-meta">by fletcher | 14 Comments</div>
                            <a href="blog.html">
                                <h4>Steps for Save Animals</h4>
                            </a>
                            <div class="text">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis sed praesentium voluptatum...</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated" data-wow-delay=".4s" style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder">
                            <a href="blog.html"><img src="images/project/2.jpg" class="img-fluid w-100" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <div class="date">January 14, 2017</div>
                            <div class="post-meta">by stephen | 22 Comments</div>
                            <a href="blog.html">
                                <h4>The Ozone Layer</h4>
                            </a>
                            <div class="text">
                                <p>How all this mistaken idea denouncing pleasure & praising pain was born and will give you a complete...</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder">
                            <a href="blog.html"><img src="images/project/10.jpg" class="img-fluid w-100" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <div class="date">August 21, 2016</div>
                            <div class="post-meta">by Vincent | 03 Comments</div>
                            <a href="blog.html">
                                <h4>Dispose Plastic Products</h4>
                            </a>
                            <div class="text">
                                <p>The great explorer of the truth master builder of human happinessone rejects, dislikes, or avoids pleasure...</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated" data-wow-delay=".6s" style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder">
                            <a href="blog.html"><img src="images/project/12.jpg" class="img-fluid w-100" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <div class="date">July 15, 2016</div>
                            <div class="post-meta">by fletcher | 14 Comments</div>
                            <a href="blog.html">
                                <h4>Ideas for Save Energy</h4>
                            </a>
                            <div class="text">
                                <p>Know how to pursue pleasure rationally encounter consequences that extremely painful rationally encounter... </p>
                            </div>
                        </div>
                    </div>
                </article>
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
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="images/clients/1.jpg" class="img-fluid" alt="not-found">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="images/clients/2.jpg" class="img-fluid" alt="not-found">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="images/clients/3.jpg" class="img-fluid" alt="not-found">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="images/clients/4.jpg" class="img-fluid" alt="not-found">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="images/clients/4.jpg" class="img-fluid" alt="not-found">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="clients_item">
                        <img src="images/clients/4.jpg" class="img-fluid" alt="not-found">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================Clients Section End======================-->



@endsection