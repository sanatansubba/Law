@include('front.includes.header')

<section class="about-us py-5 " id="about-us">
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class='text-success'>{{ $about->title }}</h1>
                <h2>{{ $about->subtitle }}</h2>
                <hr>
                {!! $about->page_info !!}
                <a href="{{ route('aboutUs') }}" class="btn btn-success">Let's Know More</a>

            </div>
            <div class="col-md-6">
                <img src="{{ asset('public/uploads/'.$about->image) }}"alt="">
            </div>
        </div>
    </div>
</section>
<div class="fullwidth-block">
    <div class="container">
        <div class="row feature-list-section">
            @foreach($services as $service)
            <div class="col-md-4">
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
<div class="testimonials-wrap">
    <div class="container">
        <div class="heading-section">
            <span class="sub-heading">Testimonials</span>
            <h2>Happy Clients & Feedbacks</h2>
        </div>
        <div class="carousel-testimonial owl-carousel">
            @foreach($testimonials as $data)
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url({{ asset('public/uploads/testimonial/'.$data->image) }})">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>
                            {!! $data->details !!}
                        </p>
                        <p class="name" style="padding-top: 5px">{{ $data->name }}</p>
                        <span class="position">{{ $data->position }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div><!--
<div id="root"></div> -->
@include('front.includes.footer')

