@extends('front.includes.front_design')

@section('site_title')
  Blogs Page for {{ $category->category_name }}
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
                        <h1>Blogs</h1>
                        <span>Home <i class="fas fa-chevron-right"></i> <a href="#">{{ $category->category_name }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h3 class="blog-heading">BLOGS</h3>
                <div class="row">

                    @if($blogs->count() > 0)
                    @foreach($blogs as $blog)
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-info">
                            <a href="{{ route('blogSingle', $blog->slug) }}"> <img src="{{ asset('public/uploads/blog/'.$blog->image) }}" class="img-fluid" alt=""></a>
                            <div class="entry-meta mt-3">
                                <span class="posted-on"><i class="far fa-calendar"></i>{{ $blog->created_at->diffForHumans() }}</span>
                                <span class="cat-links"><i class="fas fa-tags"></i>{{ $blog->category->category_name }}</span>
                            </div>
                            <div class="blog-title mt-3">
                                <a href="{{ route('blogSingle', $blog->slug) }}">{{ $blog->title }}</a>
                            </div>
                            <div class="blog-short-desc mt-2">
                                <p> {!! \Illuminate\Support\Str::limit($blog->blog_content, 500) !!}</p>
                            </div>
                            <button class="button"> <a href="{{ route('blogSingle', $blog->slug) }}"><span>KNOW MORE </span></a></button>
                        </div>
                    </div>
                    @endforeach
                        @else
                        <div style="padding: 20px;">
                            <h2>No Blogs Found for {{ $category->category_name }}</h2>
                        </div>
                    @endif
                </div>

            </div>





        </div>
    </div>
</section>

@endsection

