<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cand-shop.css') }}" rel="stylesheet">


        @yield('css')


    </head>

    <body class="bg-soft">

        <!--<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none"><a class="navbar-brand mr-lg-5" href="../index.html"><img class="navbar-brand-dark" src='{{ asset("img/brand/light.svg") }}' alt="Volt logo"> <img class="navbar-brand-light" src="{{ asset('img/brand/dark.svg')}}" alt="Volt logo"></a>-->
            <div class="d-flex align-items-center"><button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button></div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('partials.sidebar')
                    <main class="content">
                        
<!--                        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
                            <div class="container-fluid px-0">
                                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                                 <div class="d-flex">
                                         Search form 
                                        <form class="navbar-search form-inline" id="navbar-search-main">
                                            <div class="input-group input-group-merge search-bar"><span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span> <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="{{ __('messages.search') }}" aria-label="Search" aria-describedby="topbar-addon"></div>
                                        </form>
                                    </div>
                                     Navbar links 
                                <ul class="navbar-nav align-items-center">

                                        <li class="nav-item dropdown">
                                            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="media d-flex align-items-center">
                                                    <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="{{ asset('img/profile.png') }}">
                                                    <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block"><span class="mb-0 font-small font-weight-bold">Admin</span></div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>-->
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-0">
                            @yield('content_header')
                        </div>

                        <div class="card border-light shadow-sm components-section">
                            <div class="card-body p-1">
                                @yield('content')
                            </div>
                        </div>

                        @include('partials.footer')

                    </main>
                </div>
            </div>
        </div><!-- Core -->


        <!-- Scripts -->


        <script src="{{ asset('js/app.js') }}" defer></script>



    </body>

</html>
