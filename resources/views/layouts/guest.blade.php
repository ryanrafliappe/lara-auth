@extends('layouts.master', ['title' => 'panel', 'is_auth' => 'guest'])

@section('css')
    {{-- BEGIN: Page CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/authentication.min.css') }}">
    {{-- END: Page CSS --}}

    @yield('guest.style')
@endsection

@section('body')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('guest.content')
        </div>
    </div>
    </div>
@endsection

@section('js')
    @yield('guest.script')
@endsection