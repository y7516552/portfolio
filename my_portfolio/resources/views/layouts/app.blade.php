<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="./img/logo-2.ico" type="image/svg+xml">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div id="app">
        <section class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3" href="{{route('home')}}"> {{ config('app.name', 'Laravel') }}管理者面板</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 ms-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a class="dropdown-item" href="{{ route('login') }}">
                                            <div class="sb-nav-link-icon"></div>
                                            登入{{ __('Login') }}
                                        </a>
                                    </li>
                                
                                @endif
                                @if (Route::has('register'))
                                    <li>
                                        <a class="dropdown-item" href="{{route('register') }}">
                                            <div class="sb-nav-link-icon"></div>
                                            註冊{{ __('Register') }}
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li><a class="dropdown-item" href="#!">massege</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- side bar -->
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                @guest
                                    @if (Route::has('login'))
                                        <a class="nav-link" href="{{ route('login') }}">
                                            <div class="sb-nav-link-icon"></div>
                                            登入{{ __('Login') }}
                                        </a>
                                        
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{route('register') }}">
                                            <div class="sb-nav-link-icon"></div>
                                            註冊{{ __('Register') }}
                                        </a>
                                        
                                    @endif
                                @else
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapselogout" aria-expanded="false" aria-controls="collapselogout">
                                        {{ Auth::user()->name }}
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapselogout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </nav>
                                    </div>
                                    <div class="sb-sidenav-menu-heading">前台</div>
                                    <a class="nav-link" href="{{route('index')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        前台首頁
                                    </a>
                                    <div class="sb-sidenav-menu-heading">後台</div>
                                    <a class="nav-link" href="{{route('home')}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        後台首頁
                                    </a>
                                    <div class="sb-sidenav-menu-heading">Interface</div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Layouts
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                        <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                    </div>
                            
                            <div class="sb-sidenav-footer">
                                使用者:  {{ Auth::user()->name }}
                            </div>
                            @endguest
                        </div>
                    </nav>
                </div>
                <!-- side bar end-->
                <div id="layoutSidenav_content">
                    {{-- content --}}
                    <main>
                        <div class="container-fluid px-4 ">
                            @yield('content')
                        </div>
                    </main>
                    {{-- content end --}}
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-center small ">
                                <div class="text-muted">Copyright &copy; Steven 2022</div>
                                
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            
        </section>
    

        

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    {{-- <script src="assets/demo/chart-bar-demo.js"></script> --}}
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    @yield('js')
</body>
</html>
