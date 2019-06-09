@extends('back-end.partials.app')
@push('css')
@endpush
@section('title')
    Home Page
@endsection
@section('content')
        @component('back-end.partials.nav')
            @slot('nav_title')
                Home Page
            @endslot

        @endcomponent

@endsection
@push('js')
    <script>
        // alert('Hello');
    </script>
@endpush