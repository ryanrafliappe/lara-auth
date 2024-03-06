@extends('layouts.master', ['title' => 'panel', 'is_auth' => 'auth'])

@section('css')
    {{-- BEGIN: Page CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/vertical-menu.min.css') }}">
    {{-- END: Page CSS --}}

    @yield('auth.style')
@endsection

@section('body')

    @include('layouts.header')

    @include('layouts.sidebar')

    {{-- BEGIN: Content --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            {{-- Content --}}
            @yield('auth.content')
        </div>
    </div>
    {{-- END: Content --}}

    @include('layouts.footer')
@endsection

@section('js')
    @yield('auth.script')
@endsection