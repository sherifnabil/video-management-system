@extends('back-end.partials.app')

@section('title')
{{ $pageTitle }}
@endsection
@section('content')
@component('back-end.partials.nav')
@slot('nav_title')
{{ $pageTitle }}
@endslot

@endcomponent

@component('back-end.shared.edit', ['pageTitle' => $pageTitle, 'pageDes' => $pageDes])
        <form action="{{ route( $routeName . '.update',['id' => $row]) }}" method="POST">
            @method('PUT')
            @include('back-end.' . $folderName . '.form')
    
            <button type="submit" class="btn btn-primary pull-right">Update {{ $moduleName }}</button>
            <div class="clearfix"></div>
        </form>
@endcomponent
 

@endsection