<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="dark" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ env('APP_DESC') }}" name="description">
    <meta content="Asan Webs Development" name="author">
    <link rel="shortcut icon" href="{{ asset('brands/favi.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="/assets/js/layout.js"></script>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQRF729Z95"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MQRF729Z95');
    </script>

    @yield('styles')
    @livewireStyles
</head>

<body>
    <div id="layout-wrapper">
        <div class="app-menu navbar-menu">
            <div class="navbar-brand-box">
                <a href="{{ route('user.dashboard.index') }}" class="logo logo-dark mt-3">
                    <span class="logo-sm">
                        <img src="{{ asset('logo-light.png') }}" alt="{{ env('APP_NAME') }}" width="200">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo-light.png') }}" alt="{{ env('APP_NAME') }}" width="200">
                    </span>
                </a>
                <a href="logo.png" class="logo logo-light mt-3">
                    <span class="logo-sm">
                        <img src="{{ asset('logo-light.png') }}" alt="{{ env('APP_NAME') }}" width="170">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('logo-light.png') }}" alt="{{ env('APP_NAME') }}" width="170">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    @if (auth()->user()->role == 'user')
                        @include('inc.user.nav')
                    @else
                        @include('inc.admin.nav')
                    @endif
                </div>
            </div>
            <div class="sidebar-background"></div>
        </div>
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ route('user.dashboard.index') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('logo-light.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('logo-light.png') }}" alt="" height="22">

                                </span>
                            </a>
                            <img src="{{ asset('logo-light.png') }}" alt="" height="22">

                                <span class="logo-sm">
                                    <img src="{{ asset('logo-light.png') }}" alt="" height="22">

                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('logo-light.png') }}" alt="" height="22">

                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-grid fs-2xl'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fw-semibold fs-base"> Quick Access </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="{{ route('user.dashboard.index') }}">
                                                <i class="ph-gauge" style="font-size: 35px;"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="{{ route('user.deposit.index') }}">
                                                <i class="ph-wallet" style="font-size: 35px;"></i>
                                                <span>Deposit</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="{{ route('user.withdraw.index') }}">
                                                <i class="ph-wallet" style="font-size: 35px;"></i>
                                                <span>Withdraw</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bi bi-arrows-fullscreen fs-lg'></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-sun align-middle fs-3xl"></i>
                            </button>
                            <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                <a href="#!" class="dropdown-item" data-mode="light"><i
                                        class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                <a href="#!" class="dropdown-item" data-mode="dark"><i
                                        class="bi bi-moon align-middle me-2"></i> Dark</a>
                                <a href="#!" class="dropdown-item" data-mode="auto"><i
                                        class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-bell fs-2xl'></i>
                                <span
                                    class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill" style="background-color:  #93e4c1;"><span
                                        class="notification-badge">{{ auth()->user()->notifications->count() }}</span>
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="dropdown-head rounded-top">
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span
                                                        class="badge  fs-sm notification-badge text-white">{{ auth()->user()->notifications->count() }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @forelse (auth()->user()->notifications()->limit(6)->get() as $notification)
                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span
                                                            class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="stretched-link">
                                                            <h6 class="mt-0 fs-md mb-2 lh-base">
                                                                {{ $notification->title }}
                                                            </h6>
                                                            <p> {{ $notification->description }}</p>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i>
                                                                {{ $notification->created_at->diffForHumans() }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 fs-md mb-2 lh-base">
                                                                No Notification
                                                            </h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="/assets/images/users/user-dummy-img.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->fname . ' ' . auth()->user()->lname }}</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-sm user-name-sub-text text-uppercase {{ auth()->user()->kyc && auth()->user()->kyc->status == true ? 'text-success' : '' }}">{{ auth()->user()->kyc && auth()->user()->kyc->status == true ? 'Kyc:Approved' : 'KYC:Pending' }}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome
                                    {{ auth()->user()->fname . ' ' . auth()->user()->lname }}!</h6>
                                @if (auth()->user()->role == 'admin')
                                    <a class="dropdown-item" href="{{ route('admin.dashboard.index') }}"><i
                                            class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i>
                                        <span class="align-middle">Admin Panel</span></a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span
                                        class="align-middle">Balance :
                                        <b>${{ number_format(balance(auth()->user()->id), 2) }}</b></span></a>
                                <a class="dropdown-item" href="{{ route('user.profile.index') }}">
                                    <i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>
                                <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="javascript:void(0)"
                                    onclick="document.getElementById('logoutForm').submit()"><i
                                        class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
                                    <span class="align-middle" data-key="t-logout">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">@yield('title', 'Dashboard')</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}">HOME</a></li>
                                        <li class="breadcrumb-item active">@yield('title', 'Dashboard')</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © {{ env('APP_NAME') }}. All Rights
                            Reserved
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by {{ env('APP_NAME') }}
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/libs/list.js/list.min.js"></script>
    <script src="/assets/libs/list.pagination.js/list.pagination.min.js"></script>
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <x-alert />
    @yield('footer')
    @livewireScripts
</body>

</html>
