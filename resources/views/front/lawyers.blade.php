@extends('front.includes.front_design')

@section('site_title')
   List of Lawyers
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
                            <h1>Lawyers</h1>
                            <span>Home <i class="fas fa-chevron-right"></i> <a href="#">Lawyers List</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-teams">
        <div class="container">

            <form action="{{ route('search') }}" method="post">
                @csrf
                <input type="text" name="query" class="form-control" placeholder="Search Here">
            </form>

            <hr>

            @include('admin.includes._message')
            <div class="row">
                @foreach($lawyers as $data)
                <div class="col-lg-4 col-md-6">
                    <div class="teams-cards">
                        <div class="teams-image">
                            <img src="{{ asset('public/uploads/admin/'.$data->image) }}" alt="{{ $data->name }}" class="img-fluid">
                        </div>
                        <h4>{{ $data->name }}</h4>
                        <h6>{{ $data->speciality }}</h6>
                        <p class="line-clamp-5">
                            {!! $data->info !!}
                        </p>

                        <a data-toggle="modal" data-target="#exampleModal{{$data->id}}" class="btn btn-info btn-sm" style="color: white">Contact Me</a>
                    </div>
                </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{ route('contactMessageLawyer') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="admin_id" value="{{ $data->id }}">
                                    <input type="hidden" name="admin_email" value="{{ $data->email }}">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" required name="name" placeholder="Enter Your Name" class="form-control" style="margin-bottom: 10px;">
                                    <input type="email" required name="email" placeholder="Enter Your Email" class="form-control" style="margin-bottom: 10px;">
                                    <input type="text" required name="phone" placeholder="Enter Your Phone" class="form-control" style="margin-bottom: 10px;">
                                    <textarea required style="margin-bottom: 10px;" name="message" placeholder="Your Query" id="message-box" width="100%" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send  Message</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    </section>
@endsection

