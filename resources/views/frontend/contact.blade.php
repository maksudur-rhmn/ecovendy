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

@section('contact-active')
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
                <h2>Contact us</h2>
                <p><a href="{{ url('/') }}">home</a> <span>/</span> Contact us</p>
            </div>
        </div>
    </section>

    <!--=========================Inner Bnner End=====================-->
    
     <!--=======================Contact Section  start=================================-->

     <section class="get-touch-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section_title text-center">
                        <h2>Get Touch With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--Start single item-->
                <div class="col-md-4 col-sm-6">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text-holder">
                            <h3>Come to See Us</h3>
                            <p>{{ footer()->address }}</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="text-holder">
                            <h3>Quick Contact</h3>
                            <p>Ph: +{{ footer()->email }} <br>Email: <a href="mailto:{{ footer()->email }}">{{ footer()->email }}</a></p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4 col-sm-6">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="text-holder">
                            <h3>Office Schedule</h3>
                            <p>Monday to Saturday: 09.00am to 18.00pm <br>Sunday <a href="#">: Closed</a></p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>

    <!--End contact area-->

    <!--Start contact form area-->

    <section class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="default-form-area">
                        <form  class="default-form" action="{{ route('frontend.contactstore') }}" method="post">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="" placeholder="Your Name *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" value="" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="company" class="form-control" value="" placeholder="Company name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group center">
                                        <button class="btn" type="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End contact form area-->

@endsection