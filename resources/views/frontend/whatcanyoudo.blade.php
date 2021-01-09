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

@section('home-active')
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
                <h2>{{ whatcanyoudo()->header }}</h2>
                <p><a href="{{ url('/') }}">home</a> <span>/</span> {{ whatcanyoudo()->header }}</p>
            </div>
        </div>
    </section>

    <!--=========================Inner Bnner End=====================-->
<section id="about_section">
    <div class="container p-md-0">
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

        <div class="why_choose wow fadeInUp animated animated animated">
            <div class="row justify-content-center pt-100 pb-100">
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
@endsection