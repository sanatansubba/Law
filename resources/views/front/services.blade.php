@extends('front.includes.front_design')

@section('site_title')
   Service Page
@endsection

@section('content')
<section class="header">
    <div class="container-custom">
        <div class="header-wrapper">
            <div class="header-logo w-100">

                @include('front.includes.nav_menu')

            </div>
        </div>
        <div class="owl-carousel next-owl owl-theme">
            <div class="item">
                <div class="bread" style="height: 40vh">
                    <img src="{{ asset('public/frontend/assets/images/bread-image.jpg') }}" class="img-fluid" alt="Carousel">
                    <div class="overlay"></div>
                    <div class="breadcrumb-section">
                        <h1>Services</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Services</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="fullwidth-block">
    <div class="container">



        <div class="row feature-list-section">
            @foreach($services as $service)
                <div class="col-md-4" style="padding-bottom: 30px;">
                    <div class="feature">
                        <header>
                            <div class="feature-title-copy">
                                <h2 class="feature-title">{{ $service->title }}</h2>
                                <small class="feature-subtitle">{{ $service->subtitle }}</small>
                            </div>
                        </header>
                        <p>{!! $service->service_info !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection

