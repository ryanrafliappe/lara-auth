
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
{{-- BEGIN: Head --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') . ( $title ? ' | ' . $title : '' ) }}</title>
    {{-- <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    {{-- BEGIN: Vendor CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/vendors.min.css') }}">
    {{-- END: Vendor CSS --}}

    {{-- BEGIN: Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/basic/css/components.min.css')}}">

    @yield('css')

    {{-- BEGIN: Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    {{-- END: Custom CSS --}}

{{--  --}}
<!-- END: Head-->

{{-- BEGIN: Body --}}
<body @class(['vertical-layout vertical-menu-modern navbar-floating footer-static', 'blank-page' => ($is_auth == 'guest')]) data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    
    @yield('body')

    {{-- BEGIN: Vendor JS --}}
    <script src="{{ asset('assets/vendor/basic/js/vendors.min.js') }}"></script>
    {{-- BEGIN Vendor JS --}}

    {{-- BEGIN: Page Vendor JS --}}
    {{-- END: Page Vendor JS --}}

    {{-- BEGIN: Theme JS --}}
    <script src="{{ asset('assets/vendor/basic/js/app-menu.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/basic/js/app.min.js') }}"></script>
    {{-- END: Theme JS --}}

    {{-- BEGIN: Page JS --}}
    @yield('js')
    {{-- END: Page JS --}}

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
{{-- END: Body --}}

</html>