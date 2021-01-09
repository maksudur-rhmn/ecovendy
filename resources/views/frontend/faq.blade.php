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

@section('faq-active')
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
                <h2>Frequently Asked Question</h2>
                <p><a href="{{ url('/') }}">home</a> <span>/</span> Frequently Asked Question</p>
            </div>
        </div>
    </section>

    <!--=========================Inner Bnner End=====================-->
    
    <section id="faq_section" class="">
        <div class="container">
            <div class="section_title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 wow fadeInLeft animated animated animated" data-wow-delay=".2s">
                    <div id="accordion" class="mt-45">
                        @php
                            $i = 1;
                        @endphp
                        @forelse (faqs() as $item)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link {{ ($i != 1) ? 'collapsed' : '' }}" data-toggle="collapse" data-target="#collapseOne{{ $i }}" aria-expanded="true" aria-controls="collapseOne{{ $i }}">
                                        {{ $item->question }}
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne{{ $i }}" class="collapse {{ ($i == 1) ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    {{ $item->answer }}
                                </div>
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
                <div class="col-xl-6 col-lg-12 wow fadeInRight animated animated animated" data-wow-delay=".5s">
                    <div class="faq_img mt-45">
                        <img src="{{ asset('frontend_assets/images/resource/8.jpg') }}" class="w-100 img-fluid" alt="not-found">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection