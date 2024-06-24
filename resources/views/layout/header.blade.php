<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('sweetalert::alert')
    <title>JB International</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="" />

    <link rel="shortcut icon" href="{{ asset('frontend-assets/images/jb-international-favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('frontend-assets/images/jb-international-favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('frontend-assets/images/jb-international-favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('frontend-assets/images/jb-international-favicon.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/demos/hosting/hosting.css') }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color class="bg-very-light-gray">
    <header class="header-with-topbar">
        <div class="header-top-bar bg-white top-bar-dark cover-background -border-bottom -border-color-dark-gray"
            style="-background-image: url('images/demo-hosting-header-bg.jpg')">
            <div class="container-fluid">
                <div class="row h-42px align-items-center m-0">
                    <div class="col-6 col-md-4 text-center text-md-start">
                        <div class="elements-social social-icon-style-02">
                            <ul class="small-icon">
                                <li class="my-0">
                                    <a class="facebook" href="https://www.facebook.com/" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="my-0">
                                    <a class="twitter" href="https://www.twitter.com/" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li class="my-0">
                                    <a class="instagram" href="https://www.instagram.com/" target="_blank">
                                        <i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-8 text-end">
                        <a href="#" class="widget fs-13 -me-20px">
                            <i class="feather icon-feather-mail"></i>
                            <span class="text-black opacity-8">Contact us</span>
                            <span class="text-black fw-bold">+91 8714060777</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-dark-blue -header-transparent -bg-transparent header-reverse border-top border-color-dark-gray"
            data-header-hover="dark">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('frontend-assets/images/jb-international-logo-white.png') }}" alt
                            class="default-logo" />
                        <img src="{{ asset('frontend-assets/images/jb-international-logo-white.png') }}" alt
                            class="alt-logo" />
                        <img src="{{ asset('frontend-assets/images/jb-international-logo-white.png') }}" alt
                            class="mobile-logo" />
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            {{-- <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li> --}}
                            {{-- <li class="nav-item"><a href="{{ route('userpayment') }}" class="nav-link">Payment</a></li> --}}
                            <li class="nav-item">
                                <div>
                                    <a href="{{ url('/') }}"
                                        class="btn btn-large btn-danger btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                        <span>
                                            <span><i class="feather icon-feather-home m-0"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div>
                                    <a href="{{ route('userpayment') }}"
                                        class="ms-10px xxl-ms-10px xs-ms-0 btn btn-large btn-danger btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                        <span>
                                            <span class="btn-double-text" data-text="Payment">Payment</span>
                                            <span><i class="feather icon-feather-arrow-up-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </li>

                            @if (Auth::check() && Auth::user()->role_id == 0)
                                <li class="nav-item position-relative ms-10px xxl-ms-10px xs-ms-0">
                                    <a class="-nav-link nav-icon-hover" href="javascript:void(0)"
                                        id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('backend-assets/images/profile/user-1.jpg') }}"
                                            alt="" width="35" height="35" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class="message-body">
                                            <div class="px-2 py-1">
                                                <a href="{{ route('admin.dashboard') }}"
                                                    class="btn btn-small btn-base-color btn-rounded btn-hover-animation-switch btn-icon-left w-100 md-mx-auto ">
                                                    <span>
                                                        <span class="btn-text">Dashboard</span>
                                                        <span class="btn-icon">
                                                            <i class="fa-solid fa-list-check"></i></span>
                                                        <span class="btn-icon">
                                                            <i class="fa-solid fa-list-check"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="px-2 py-1">
                                                @csrf
                                                {{-- <button class="btn btn-primary mx-3 mt-2 d-block">Logout</button> --}}
                                                <button
                                                    class="btn btn-small btn-base-color btn-rounded btn-hover-animation-switch btn-icon-left w-100 md-mx-auto">
                                                    <span>
                                                        <span class="btn-text">Logout</span>
                                                        <span class="btn-icon">
                                                            <i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                                        <span class="btn-icon">
                                                            <i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </li>
                            @else
                            <li class="nav-item">


                                <div class="header-button ms-10px xxl-ms-10px xs-ms-0">
                                    @if (Auth::check())
                                        <a href="{{ route('logout') }}"
                                            class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span>
                                                <span class="btn-double-text" data-text="Logout"> Hi
                                                    {{ Auth::user()->name }}
                                                </span>
                                            </span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="{{ route('admin.login') }}"
                                            class="btn btn-large btn-danger btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                                            data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                            <span>
                                                <span class="btn-double-text" data-text="Admin Login">Admin
                                                    Login</span>
                                                <span><i class="feather icon-feather-user"></i></span>

                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </li>
                                @endif

                        </ul>
                    </div>
                </div>


                <div class="col-auto -col-lg-2 text-end lg-pe-5px d-none">
                    <div class="header-icon">
                        <a href="{{ url('/') }}"
                            class="btn btn-large btn-danger btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                            data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                            <span>
                                <span><i class="feather icon-feather-home m-0"></i></span>
                            </span>
                        </a>
                        <a href="{{ route('userpayment') }}"
                            class="ms-10px xxl-ms-10px xs-ms-0 btn btn-large btn-danger btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                            data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                            <span>
                                <span class="btn-double-text" data-text="Payment">Payment</span>
                                <span><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>

                        @if (Auth::check() && Auth::user()->role_id == 0)
                            <div class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('backend-assets/images/profile/user-1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <div class="px-2 py-1">
                                            <a href="{{ route('admin.dashboard') }}"
                                                class="btn btn-small btn-base-color btn-rounded btn-hover-animation-switch btn-icon-left w-100 lg-mb-15px md-mx-auto ">
                                                <span>
                                                    <span class="btn-text">Dashboard</span>
                                                    <span class="btn-icon">
                                                        <i class="fa-solid fa-list-check"></i></span>
                                                    <span class="btn-icon">
                                                        <i class="fa-solid fa-list-check"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="px-2 py-1">
                                            @csrf
                                            {{-- <button class="btn btn-primary mx-3 mt-2 d-block">Logout</button> --}}
                                            <button
                                                class="btn btn-small btn-base-color btn-rounded btn-hover-animation-switch btn-icon-left w-100 lg-mb-15px md-mx-auto">
                                                <span>
                                                    <span class="btn-text">Logout</span>
                                                    <span class="btn-icon">
                                                        <i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                                    <span class="btn-icon">
                                                        <i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        @else
                            <div class="header-button ms-10px xxl-ms-10px xs-ms-0">
                                @if (Auth::check())
                                    <a href="{{ route('logout') }}"
                                        class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span>
                                            <span class="btn-double-text" data-text="Logout"> Hi
                                                {{ Auth::user()->name }}
                                            </span>
                                        </span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('admin.login') }}"
                                        class="btn btn-large btn-danger btn-rounded btn-box-shadow btn-switch-text d-inline-block align-middle fw-600 appear anime-complete"
                                        data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                        <span>
                                            <span class="btn-double-text" data-text="Admin Login">Admin Login</span>
                                            <span><i class="feather icon-feather-arrow-right"></i></span>

                                        </span>
                                    </a>
                                @endif
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </header>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            const registrationModal = new bootstrap.Modal(document.getElementById('registrationModal'));

            document.getElementById('showSignUp').addEventListener('click', function() {
                loginModal.hide();
                registrationModal.show();
            });

            document.getElementById('showLogin').addEventListener('click', function() {
                registrationModal.hide();
                loginModal.show();
            });
        });
    </script>
