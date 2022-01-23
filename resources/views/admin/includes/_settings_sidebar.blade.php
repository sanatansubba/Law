<div class="widget settings-menu">
    <ul>

        @if(Session::get('admin_page') == 'theme')
            @php $active = "active" @endphp
        @else
            @php $active = "" @endphp
        @endif
        <li class="nav-item">
            <a href="{{ route('theme') }}" class="nav-link {{ $active }}">
                <i class="fas fa-globe"></i> <span>Theme Settings</span>
            </a>
        </li>

            @if(Session::get('admin_page') == 'setting')
                @php $active = "active" @endphp
            @else
                @php $active = "" @endphp
            @endif
            <li class="nav-item">
                <a href="{{ route('setting') }}" class="nav-link {{ $active }}">
                    <i class="fa fa-pen"></i> <span>Site Settings</span>
                </a>
            </li>


        @if(Session::get('admin_page') == 'profile')
            @php $active = "active" @endphp
        @else
            @php $active = "" @endphp
        @endif
        <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link {{ $active }}">
                <i class="far fa-user"></i> <span>Update Profile</span>
            </a>
        </li>






            @if(Session::get('admin_page') == 'social')
                @php $active = "active" @endphp
            @else
                @php $active = "" @endphp
            @endif
            <li class="nav-item">
                <a href="{{ route('social') }}" class="nav-link {{ $active }}">
                    <i class="fa fa-map-pin"></i> <span>Social Media Settings</span>
                </a>
            </li>

            @if(Session::get('admin_page') == 'change_password')
                @php $active = "active" @endphp
            @else
                @php $active = "" @endphp
            @endif
        <li class="nav-item">
            <a href="{{ route('changePassword') }}" class="nav-link {{ $active }}">
                <i class="fas fa-unlock-alt"></i> <span>Change Password</span>
            </a>
        </li>

    </ul>
</div>
