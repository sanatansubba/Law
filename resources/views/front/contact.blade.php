@extends('front.includes.front_design')

@section('site_title')
    Contact Us Page
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
                        <h1>Contact Us</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Contact Us</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="contact-info-left">
                    <h2>Contact Us</h2>
                    <p>We'd love to hear from you.</p>
                    @include('admin.includes._message')
                    <form action="{{ route('contactMessage') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
                        <textarea name="message" na id="message-box" width="100%" rows="5" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn btn-warning">Submit</button>

                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-info-right">
                    <div class="yellow-box-contact"></div>
                    <div class="contact-image-div">
                        <img src="{{ asset('public/frontend/assets/images/smartphone.png') }}" alt="Smartphone" class="img-fluid">
                    </div>
                    <h6>{{ $setting->phone }}</h6>
                    <h6>{{ $setting->alt_phone }}</h6>
                    <div class="contact-image-div">
                        <img src="{{ asset('public/frontend/assets/images/marker.png') }}" alt="Marker" class="img-fluid">
                    </div>
                    <h6>{{ $setting->address }}</h6>

                    <div class="contact-image-div">
                        <img src="{{ asset('public/frontend/assets/images/envelope.png') }}" alt="Envelope" class="img-fluid">
                    </div>
                    <h6>{{ $setting->email }}</h6>

                </div>
            </div>
        </div>
    </div>
    <div class="map-location">
        <iframe
            src="{{ $setting->map }}"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection

