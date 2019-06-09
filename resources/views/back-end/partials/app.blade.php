@include('back-end.partials.header')
@include('back-end.partials.side_menu')
{{-- @include('back-end.partials.nav') --}}


<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
        @yield('content')
        </div>
    </div>

@include('back-end.partials.footer')