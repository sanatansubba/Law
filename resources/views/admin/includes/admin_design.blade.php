@include('admin.includes.head')
<body>

<div class="main-wrapper">

    @include('admin.includes.header')

    @include('admin.includes.sidebar')

   @yield('content')

</div>

@include('admin.includes.footer')
