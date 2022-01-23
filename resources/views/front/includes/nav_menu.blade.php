<div class="logos d-flex justify-content-between">
    <div class="left-logo">
        <a href="{{ route('index') }}">
            <h4>{{ $theme->website_name }}</h4>
        </a>
    </div>
    <div class="right-logo d-flex">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    @if(\Illuminate\Support\Facades\Session::get('front_page') == 'index')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif


                    <li class="nav-item {{ $active }}">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>

                        @if(\Illuminate\Support\Facades\Session::get('front_page') == 'about')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                    <li class="nav-item {{ $active }}">
                        <a class="nav-link" href="{{ route('aboutUs') }}">About</a>
                    </li>

                        @if(\Illuminate\Support\Facades\Session::get('front_page') == 'services')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                    <li class="nav-item {{ $active  }}">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>

                        @if(Session::get('front_page') == 'lawyer')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif

                    <li class="nav-item {{ $active }}">
                        <a class="nav-link" href="{{ route('lawyers') }}">Lawyers</a>

                    </li>

                        @if(\Illuminate\Support\Facades\Session::get('front_page') == 'law')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                    <li class="nav-item {{ $active }}">
                        <a class="nav-link" href="{{ route('nepalLaw') }}">Nepal Law</a>

                    </li>

                        @if(\Illuminate\Support\Facades\Session::get('front_page') == 'contact')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif

                    <li class="nav-item {{ $active }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>

                    </li>
                        @if(\Illuminate\Support\Facades\Session::get('front_page') == 'blog')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                    <li class="nav-item {{ $active }}">
                        <a class="nav-link" href="{{ route('blog')}}">Blogs</a>

                    </li>


                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adminDashboard')}}">Dashboard</a>
                    @else
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adminLogin')}}">Login</a>
                        </li>
                    @endif

                </ul>
            </div>
        </nav>
        <div class="side-nav-tab">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="law.php">Nepal Law</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="blog.php">Blog</a></li>

                </ul>
            </div>
            <span class="openNav" onclick="openNav()">&#9776; </span>
        </div>
    </div>

</div>
