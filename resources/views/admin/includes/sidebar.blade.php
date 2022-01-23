@php
    $userLogin = \App\Models\Admin::where('id', Auth::guard('admin')->user()->id)->first();
@endphp

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            @if($userLogin->role_id == 1)
            <ul>

                @if(Session::get('admin_page') == 'dashboard')
                    @php $active = "active" @endphp
                @else
                    @php $active = "" @endphp
                @endif
                <li class="{{ $active }}"><a href="{{ route('adminDashboard') }}"><i class="feather-home"></i>
                        <span>Dashboard</span></a>
                </li>



                    @if(Session::get('admin_page') == 'banner')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('banner.index') }}"><i class="feather-image"></i>
                            <span>Banner</span></a>
                    </li>

                    @if(Session::get('admin_page') == 'service')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('service.index') }}"><i class="feather-info"></i>
                            <span>Services</span></a>
                    </li>


                    @if(Session::get('admin_page') == 'testimonial')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('testimonial.index') }}"><i class="feather-message-circle"></i>
                            <span>Testimonials</span></a>
                    </li>

                    @if(Session::get('admin_page') == 'category')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('category.index') }}"><i class="feather-file"></i>
                            <span>Category Management</span></a>
                    </li>


                    @if(Session::get('admin_page') == 'blog')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('blog.index') }}"><i class="feather-file"></i>
                            <span>Blog Management</span></a>
                    </li>


                    @if(Session::get('admin_page') == 'document')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('document.index') }}"><i class="feather-download"></i>
                            <span>Downloads</span></a>
                    </li>


                    @if(Session::get('admin_page') == 'contact')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('contact.index') }}"><i class="feather-bookmark"></i>
                            <span>Contact Messages</span></a>
                    </li>

                    @if(Session::get('admin_page') == 'about')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('about.index') }}"><i class="feather-file"></i>
                            <span>About Us</span></a>
                    </li>


                    @if(Session::get('admin_page') == 'lawyer')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('lawyer.index') }}"><i class="feather-users"></i>
                            <span>Lawyers</span></a>
                    </li>


                @if(Session::get('admin_page') == 'theme')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('theme') }}"><i class="feather-settings"></i>
                            <span>Settings</span></a>
                    </li>





            </ul>
            @else
                <ul>

                    @if(Session::get('admin_page') == 'dashboard')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('adminDashboard') }}"><i class="feather-home"></i>
                            <span>Dashboard</span></a>
                    </li>


                        @if(Session::get('admin_page') == 'category')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                        <li class="{{ $active }}"><a href="{{ route('category.index') }}"><i class="feather-file"></i>
                                <span>Category Management</span></a>
                        </li>


                        @if(Session::get('admin_page') == 'blog')
                            @php $active = "active" @endphp
                        @else
                            @php $active = "" @endphp
                        @endif
                        <li class="{{ $active }}"><a href="{{ route('blog.index') }}"><i class="feather-file"></i>
                                <span>Blog Management</span></a>
                        </li>

                    @if(Session::get('admin_page') == 'theme')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="{{ $active }}"><a href="{{ route('theme') }}"><i class="feather-settings"></i>
                            <span>Settings</span></a>
                    </li>





                </ul>

            @endif
        </div>
    </div>
</div>
