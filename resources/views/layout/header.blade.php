<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('sweetalert::alert')
    <title>test</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="" />

    <link rel="shortcut icon" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/vdc_images/vdc-favicon.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link rel="stylesheet" href="{{ asset('frontend/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/demos/hosting/hosting.css') }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color class="bg-very-light-gray">
    <header class="header-with-topbar">
        <div class="header-top-bar bg-white top-bar-dark cover-background -border-bottom -border-color-extra-medium-gray"
            style="-background-image: url('images/demo-hosting-header-bg.jpg')">
            <div class="container-fluid">
                <div class="row h-42px align-items-center m-0">
                    <div class="col-6 col-md-4 text-center text-md-start">
                        <div class="d-flex flex-wrap fs-13">
                            <span class="opacity-6 me-5px text-black lh-sm">For Home Collection</span>
                            <a href="" class="fw-bold text-black lh-sm">+917034031188</a>

                        </div>
                    </div>
                    <div class="col-6 col-md-8 text-end">
                        <a href="#" class="widget fs-13 me-20px">
                            <i class="feather icon-feather-phone"></i>
                            <span class="text-black opacity-8">Customer care</span>
                            <span class="text-black fw-bold">+917034031188</span>
                        </a>
                        <a href="#" class="widget fs-13 -me-20px">
                            <i class="feather icon-feather-mail"></i>
                            <span class="text-black opacity-8">Customer care</span>
                            <span class="text-black fw-bold">+917034031199</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
     


        <nav class="navbar navbar-expand-lg bg-white -header-transparent -bg-transparent header-reverse border-top border-color-extra-medium-gray"
            data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt class="default-logo" />
                        <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt class="alt-logo" />
                        <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" alt class="mobile-logo" /> --}}
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
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>

                  
                           
                            <li class="nav-item"><a href="{{ route('userpayment') }}" class="nav-link">Payment</a>
                            </li>


                            {{-- <li class="nav-item">
                                <a href="{{ Auth::check() ? route('covdi19') : '#' }}"
                                    class="d-flex gap-2 align-items-center opacity-10"
                                    {{ Auth::check() ? '' : 'data-bs-toggle=modal data-bs-target=#loginModal' }}>
                                   
                                    <span class="alt-font fw-500">Payment</span>
                                </a> </li> --}}
                         
                        </ul>
                    </div>
                </div>


 <div class="col-auto -col-lg-2 text-end lg-pe-5px">
                    <div class="header-icon">



                    




                    @if (Auth::check() && Auth::user()->role_id == 0)
                        <div class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt=""
                                    width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 dropdown-item">
                                        <h4 style="font-size: 18px; margin-bottom: 0;">Dashboard</h4>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                    </form>
                                </div>
                                
                            </div>
                         </div>
                         @else
                            <div class="header-button ms-30px xxl-ms-10px xs-ms-0">
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
                                    {{-- <a href="#"
                                        class="btn btn-base-color btn-small btn-rounded btn-box-shadow btn-switch-text fw-600"
                                        data-bs-toggle="modal" data-bs-target="#loginModal">
                                        <span>
                                            <span class="btn-double-text" data-text="Login">Login</span>
                                        </span>
                                    </a> --}}
                                    <a href="{{ route('admin.login') }}"  class="btn btn-base-color btn-big btn-rounded btn-box-shadow btn-switch-text fw-600">Admin login</a>
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
