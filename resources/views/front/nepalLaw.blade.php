@extends('front.includes.front_design')

@section('site_title')
    Nepal Law Page
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
                        <h1>Nepal Law</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Nepal Law</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="pdf-download">
        <h2>Existing Law</h2>
        <ul>
            @foreach($docs as $data)
            <li><a href="{{ url($data->document)  }}" download>{{ $data->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>


@endsection

