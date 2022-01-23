@extends('front.includes.front_design')

@section('site_title')
      About Us Page
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
                        <h1>{{ $about->page_name }}</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">About Us</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--ABOUT US MAIN-->
<section class="about-us-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-us-main-left">
                    <img src="{{ asset('public/uploads/'.$about->image) }}" alt="About Us" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-us-main-right">
                    <h2>{{ $about->title }}</h2>
                    {!! $about->page_info !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!--MISSION & VISSION-->
<section class="vision">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="our-vision">
                    <h5>OUR VISION</h5>
                    <ul>
                        {!! $about->our_vision !!}

                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="our-mission">
                    <h5>OUR MISSION</h5>
                    <ul>
                        {!! $about->our_mission !!}

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

