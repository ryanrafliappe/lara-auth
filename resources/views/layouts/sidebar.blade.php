{{-- BEGIN: Main Menu --}}
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="">
                    <h2 class="brand-text">Nama Aplikasi</h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- title --}}
            {{-- <li class=" navigation-header">
                <span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span>
            </li> --}}

            {{-- single --}}
            {{-- <li class="nav-item active"> --}}
            {{-- <li class="nav-item active">
                <a class="d-flex align-items-center" href="">
                    <x-gmdi-dashboard-tt />
                    <span class="menu-title">Title</span>
                </a>
            </li> --}}

            {{-- nested --}}
            {{-- <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <x-gmdi-dashboard-tt />
                    <span class="menu-title text-truncate">Title</span>
                </a>
                <ul class="menu-content"> --}}
                    {{-- <li class="active"> --}}
                    {{-- <li class="">
                        <a class="d-flex align-items-center" href="">
                            <x-gmdi-circle-tt />
                            <span class="menu-item text-truncate">Judul</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            
            <li class="nav-item active">
                <a class="d-flex align-items-center" href="">
                    <x-gmdi-dashboard-tt />
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-danger" href="">
                    <x-gmdi-logout-tt />
                    <span class="menu-title">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{{-- END: Main Menu --}}